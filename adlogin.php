<?php
include("connection.php");

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM hospital WHERE username='$username' && password='$password' ";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);

    if($total == 1) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: admin.php");
        exit;
    } else {
        // Set error message for incorrect credentials
        $error_message = "Invalid Username or Password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrator Login</title>
   <link href="css/adlogin.css" rel="stylesheet" name=""> 
    <script src="https://kit.fontawesome.com/f9dc94ec3b.js" crossorigin="anonymous"></script>
 </head>
<body style="background-image: url('img/moderna-pic.png');">
 

  <div class="container">
  <img src="img/img1.jpg" alt="Logo" class="logo">
    <h1>Administrator Login</h1>
    <form action="#" method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Enter username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter password" required>
      </div>
      <div class="form-group">
      
      </div>
      <button type="submit" name="login" class="login-btn">Login</button>
    </form>
   <!-- Error message pop-up box -->
   <div id="errorPopup" class="popup" style="display: none;">
            <div class="popup-content">
                
                <p id="errorMessage" style="color: red; margin-left:30px;background-color:pink">Invalid Username or Password!</p>
            </div>
        </div>
    </div>

    <!-- JavaScript for error message pop-up -->
    <script>
        function showErrorPopup() {
            var errorPopup = document.getElementById('errorPopup');
            errorPopup.style.display = 'block';
        }

        function closeErrorPopup() {
            var errorPopup = document.getElementById('errorPopup');
            errorPopup.style.display = 'none';
        }

        <?php if(isset($error_message)): ?>
        // Show error pop-up if error message is set
        showErrorPopup();
        <?php endif; ?>
    </script>
  </div>
  </div>
  <script src="js/menu.js"></script>
</body>
</html>