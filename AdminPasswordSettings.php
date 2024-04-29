<?php
// Include the database connection file
include("connection.php");

session_start(); // Start the session

if(isset($_POST['reset'])) {
    // Check if the current user is logged in
    if(isset($_SESSION['username'])) {
        $loggedInUser = $_SESSION['username'];
        $resetUser = $_POST['username']; // Get the username to reset password

        // Check if the current user is resetting their own password
        if($loggedInUser !== $resetUser) {
            $message = "Insert correct username";
            $isSuccess = false;
        } else {
            // Proceed with password reset
            $new_password = $_POST['new_password'];
            $confirm_password = $_POST['confirm_password'];
            if(strlen($new_password) < 8) {
                $message = "New password must be at least 8 characters long.";
                $isSuccess = false;
            }
            elseif ($new_password != $confirm_password) {
                $message = " New password and confirm password do not match.";
                $isSuccess = false;
            } else {
                // Check if the new password is the same as the old password
                $query_check_old_password = "SELECT * FROM hospital WHERE username = '$loggedInUser' AND password = '$new_password'";
                $result_check_old_password = mysqli_query($conn, $query_check_old_password);
                $count_old_password = mysqli_num_rows($result_check_old_password);
            
                if ($count_old_password > 0) {
                    $message = " New password must be different from the old password.";
                    $isSuccess = false;
                } else {
                    // Check if the new password is unique across all existing passwords
                    $query_check_existing = "SELECT * FROM hospital WHERE username != '$loggedInUser' AND password='$new_password'";
                    $result_check_existing = mysqli_query($conn, $query_check_existing);
                    $count_existing = mysqli_num_rows($result_check_existing);
            
                    if ($count_existing == 0) {
                        // Update the password in the database for the given username
                        $update_query = "UPDATE hospital SET password='$new_password' WHERE username='$loggedInUser'";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings Slide</title>
    <link rel="stylesheet" href="css/AdminPasswordSettings.css">
    <script src="https://kit.fontawesome.com/f9dc94ec3b.js" crossorigin="anonymous"></script>
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
                        <span class="title">Hospital Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="admin.php">
                        <span class="icon">
                            <i class="fa-solid fa-gauge"></i>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="hospital info.php">
                        <span class="icon">
                            <i class="fa-regular fa-hospital"></i>
                        </span>
                        <span class="title">Hospital Info</span>
                    </a>
                </li>

                <li>
                    <a href="register.php">
                        <span class="icon">
                            <i class="fa-solid fa-user-plus"></i>
                        </span>
                        <span class="title">Patient Registration</span>
                    </a>
                </li>

                <li>
                    <a href="childvaccine.php">
                        <span class="icon">
                        <i class="fa-solid fa-child"></i>
                        </span>
                        <span class="title">Child Vaccine Update</span>
                    </a>
                </li>

                <li>
                    <a href="vaccine.php">
                        <span class="icon">
                            <i class="fa-solid fa-syringe"></i>
                        </span>
                        <span class="title">Update New Vaccine</span>
                    </a>
                </li>

                <li>
                    <a href="PatientInformation.php">
                        <span class="icon">
                            <i class="fa-solid fa-users"></i>
                        </span>
                        <span class="title">Patient information</span>
                    </a>
                </li>

                <li>
                    <a href="AdminPasswordSettings.php">
                        <span class="icon">
                            <i class="fa-solid fa-gear"></i>
                        </span>
                        <span class="title">settings</span>
                    </a>
                </li>

                <li>
                    <a href="Adlogout.php">
                        <span class="icon">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
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
                
    

   


        
        
         <div class="main-content" style="margin-top: 700px;margin-right:500px;">
            
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            
            <h2>Password Reset</h2>
            <div>
                <label for="username">Username</label>
                <input type="username" id="username" name="username" required>
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
            <div id="messageBox"></div>
        </form>
                </div>
    <!-- Message box for displaying success or error messages -->


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