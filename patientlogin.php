<?php
include("connection.php");

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare the query using prepared statements
    $stmt = $conn->prepare("SELECT * FROM child WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password); // 'ss' indicates two string parameters
    $stmt->execute();
    $result = $stmt->get_result();
    $total = $result->num_rows;

    if($total == 1) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: policy.php");
        exit;
    } else {
        // Set error message for incorrect credentials
        $error_message = "Invalid Username or Password!";
    }

    $stmt->close(); // Close the prepared statement
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Login</title>
    <link rel="stylesheet" href="css/patientlogin.css">
    <script src="https://kit.fontawesome.com/f9dc94ec3b.js" crossorigin="anonymous"></script>
</head>

<body style="background-image: url('img/background.jpg');">
    <div class="container">
        <img src="img/logo2.png" alt="Logo" class="logo">
        <h1>Patient Login</h1>
        <form action="#" method="post"style="padding:10px;margin-top:5px;">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter username" required title="Please enter your username"style="padding:10px;">
            </div>
            <div class="form-group" >
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter password" required title="Please enter your password"style="padding:10px;">
            </div>
            <div class="form-group" style="margin-top:30px;margin-left:50px;">
        <button type="submit" name="login" class="login-btn">Login</button>
            </div>
        </form>

        <!-- Error message pop-up box -->
        <div id="errorPopup" class="popup" style="display: none;">
            <div class="popup-content">
                
                <p id="errorMessage" style="color: red; margin-left:30px;background-color:pink">Invalid Username or Password!</p>
            </div>
        </div>
    </div>
    <script>

        function showErrorPopup() {
            var errorPopup = document.getElementById('errorPopup');
            errorPopup.style.display = 'block';
        }

        

        <?php if(isset($error_message)): ?>
        // Show error pop-up if error message is set
        showErrorPopup();
        <?php endif; ?>
    </script>
</body>

</html>
