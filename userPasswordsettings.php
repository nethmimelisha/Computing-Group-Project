<?php
// Include the database connection file
include("connection.php");

session_start(); // Start the session

if(isset($_POST['reset'])) {
    // Check if the current user is logged in
    if(isset($_SESSION['username'])) {
        $loggedInUser = $_SESSION['username'];
        $resetUser = $_POST['UserName']; // Get the username to reset password

        // Check if the current user is resetting their own password
        if($loggedInUser !== $resetUser) {
            $message = "Insert correct username";
            $isSuccess = false;
        } else {
            // Proceed with password reset
            $new_password = $_POST['new_password'];
            $confirm_password = $_POST['confirm_password'];
            if(strlen($new_password)== 8) {
                $message = "New password must be at least 8 characters long.";
                $isSuccess = false; 
        }elseif ($new_password != $confirm_password) {
                $message = " New password and confirm password do not match.";
                $isSuccess = false;
            } else {
                // Check if the new password is the same as the old password
                $query_check_old_password = "SELECT * FROM child WHERE UserName = '$loggedInUser' AND password = '$new_password'";
                $result_check_old_password = mysqli_query($conn, $query_check_old_password);
                $count_old_password = mysqli_num_rows($result_check_old_password);
            
                if ($count_old_password > 0) {
                    $message = " New password must be different from the old password.";
                    $isSuccess = false;
                } else {
                    // Check if the new password is unique across all existing passwords
                    $query_check_existing = "SELECT * FROM child WHERE UserName != '$loggedInUser' AND password='$new_password'";
                    $result_check_existing = mysqli_query($conn, $query_check_existing);
                    $count_existing = mysqli_num_rows($result_check_existing);
            
                    if ($count_existing == 0) {
                        // Update the password in the database for the given username
                        $update_query = "UPDATE child SET password='$new_password' WHERE UserName='$loggedInUser'";
                        if(mysqli_query($conn, $update_query)) {
                            $message = "Password updated successfully!";
                            $isSuccess = true;
                        } else {
                            $message = "Error updating password: " . mysqli_error($conn);
                            $isSuccess = false;
                        }
                    } else {
                        $message = "Another user already has the same password.";
                        $isSuccess = false;
                    }
                }
            }
        }
    } else {
        $message = "Error: You are not logged in.";
        $isSuccess = false;
    }
}

// Display the message using JavaScript in the HTML code
if (isset($message)) {
    echo "<script>";
    echo "var messageBox = document.getElementById('messageBox');";
    echo "messageBox.innerText = '$message';";
    echo "messageBox.style.color = '" . ($isSuccess ? 'green' : 'red') . "';";
    echo "</script>";
}
?>
    
   

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="css/userPasswordSettings.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    
    <script src="js/admin.js"></script>

</head>
<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <img src="img/logo2.png" alt="Admin Dashboard Icon">
                        </span>
                        <?php
                        session_start();

// Check if the username is set in the session
if(isset($_SESSION['username'])) {
    // Retrieve the username from the session
    $username = $_SESSION['username'];

    // Display a welcome message with the username
    echo "<p style='color: black; font-size: 15px;margin-top:16px;'>Welcome, $username!</p>";

    
} else {
    // Handle case where the username is not set in the session
    echo "Error: Username not found.";
}
?>
                    </a>
                </li>

                <li>
                    <a href="p-dashboard.php">
                        <span class="icon1">
                            <img src="img/pdash.png" alt="Admin Dashboard Icon">
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="user-info.php">
                        <span class="icon1">
                            <img src="img/man.png" alt="Admin Dashboard Icon">
                        </span>
                        <span class="title">User Information</span>
                    </a>
                </li>

                <li>
                    <a href="VaccinationHistory.php">
                        <span class="icon1">
                            <img src="img/vaccine.png" alt="Admin Dashboard Icon">
                        </span>
                        <span class="title">Vaccination History</span>
                    </a>
                </li>

                <li>
                    <a href="educationalResources.php">
                        <span class="icon1">
                            <img src="img/education.png" alt="Admin Dashboard Icon">
                        </span>
                        <span class="title">Educational Resources</span>
                    </a>
                </li>

                <li>
                    <a href="emergency.php">
                        <span class="icon1">
                            <img src="img/emergency-call.png" alt="Admin Dashboard Icon">
                        </span>
                        <span class="title">Emergency Contacts</span>
                    </a>
                </li>

                <li>
                    <a href="userPasswordsettings.php">
                        <span class="icon1">
                            <img src="img/settings.png" alt="Admin Dashboard Icon">
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>

                <li>
                    <a href="logout.php">
                        <span class="icon1">
                            <img src="img/logout.png" alt="Admin Dashboard Icon">
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <i class="fa-solid fa-bars"></i>
                </div>
                
                        
    <div class="settings-container">
        
        
        <div class="main-content" style="margin-top:100px;margin-right:150px;alighn:center;">
            
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            
            <h2>Password Reset</h2>
            <div>
                <label for="username">Username</label>
                <input type="username" id="username" name="UserName" required>
            </div>
            <div>
                <label for="new_password">New Password:</label>
                <input type="password" id="new_password" name="new_password" required>
            </div>
            <div>
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <button type="submit" name="reset">Reset Password</button>
        </form>
    <!-- Message box for displaying success or error messages -->
            <div id="messageBox"></div>

            <!-- JavaScript for displaying messages -->
            <script>
                <?php if (isset($message)): ?>
                    var messageBox = document.getElementById('messageBox');
                    messageBox.innerText = "<?php echo $message; ?>";
                    messageBox.style.color = "<?php echo $isSuccess ? 'green' : 'red'; ?>";
                <?php endif; ?>
            </script>
        </div>
    </div>
              </div>
            </div>
     </body>
</html>
   