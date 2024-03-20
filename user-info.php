<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="css/user-info.css">

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
                        <span>
                        <?php


// Check if the username is set in the session
if(isset($_SESSION['username'])) {
    // Retrieve the username from the session
    $username = $_SESSION['username'];

    // Display the username wherever you need it in your HTML code
    echo "<p style='color: black; font-size: 15px;margin-left:10px;margin-top:25px;'>Welcome, $username!</p>";

} else {
    // Handle case where the username is not set in the session
    echo "Username not found.";
}
?>

                        </span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon1">
                            <img src="img/pdash.png" alt="Admin Dashboard Icon">
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon1">
                            <img src="img/man.png" alt="Admin Dashboard Icon">
                        </span>
                        <span class="title">User Information</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon1">
                            <img src="img/vaccine.png" alt="Admin Dashboard Icon">
                        </span>
                        <span class="title">Vaccination History</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon1">
                            <img src="img/education.png" alt="Admin Dashboard Icon">
                        </span>
                        <span class="title">Educational Resources</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon1">
                            <img src="img/emergency-call.png" alt="Admin Dashboard Icon">
                        </span>
                        <span class="title">Emergency Contacts</span>
                    </a>
                </li>

                <li>
                    <a href="usersettings.html">
                        <span class="icon1">
                            <img src="img/settings.png" alt="Admin Dashboard Icon">
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>

                <li>
                    <a href="#">
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
                        
                <div class="user">
                    <img src="img/male.jpg" alt="">
                </div>
            </div>

            <!-- ========================= User Info ==================== -->
            <div class="container1">
                <h1>User Information</h1><br>
                <div class="patient-details">
                <h2>Patient Info</h2><br>
                <?php
                        
                        include("connection.php");

                 
                        if (isset($_SESSION['username'])) {
                            
                            $username = $_SESSION['username'];

                           $query = "SELECT c.*, g.* 
                           FROM child c 
                           JOIN child_guardian g ON c.Child_ID = g.Child_ID 
                           WHERE c.username = '$username'";

                            $result = mysqli_query($conn, $query);
                            if (!$result) {
                                // Query execution failed
                                echo "Error: " . mysqli_error($conn);
                            } else {
                                // Query executed successfully, continue with fetching data
                            }

                            // Check if the query was successful and data was fetched
                            if ($result && mysqli_num_rows($result) > 0) {
                                // Fetch the user and guardian data as an associative array
                                $data = mysqli_fetch_assoc($result);
                                //var_dump($data);
                                ?>
                                <div class="pid">
                                    <label for="patient-id">Patient ID</label>
                                    <textarea readonly rows="1"><?php echo $data['Child_ID']; ?></textarea>
                                </div>

                                <div class="name">
                                    <label for="patient-name">First Name</label>
                                    <textarea readonly id="patient-name" rows="1"><?php echo $data['first_name']; ?></textarea>
                                </div>
                                <div class="name">
                                    <label for="patient-name">Last Name</label>
                                    <textarea readonly id="patient-name" rows="1"><?php echo $data['last_name']; ?></textarea>
                                </div>
                                <div class="birth">
                        <label for="patient-birth">Date of Birth</label>
                        <textarea readonly id="patient-birth" rows="1"><?php echo $data['DOB']; ?></textarea>
                    </div>

                    <div class="gender">
                        <label for="patient-gender">Gender</label>
                        <textarea readonly id="patient-gender" rows="1"><?php echo $data['gender']; ?></textarea>
                    </div>

                    
                  </div>
                

                               <h2>Guardian Info</h2><br>

                                <div class="guardian-name">
                                    <label for="guardian-name">Guardian Name</label>
                                    <textarea readonly id="guardian-name" rows="1"><?php echo $data['guardian_name']; ?></textarea>
                                </div>
                                <div class="guardian-name">
                                    <label for="guardian-name">Relationship</label>
                                    <textarea readonly id="guardian-name" rows="1"><?php echo $data['relationship']; ?></textarea>
                                </div>
                                <div class="guardian-name">
                                    <label for="guardian-name">Address</label>
                                    <textarea readonly id="guardian-name" rows="1"><?php echo $data['address']; ?></textarea>
                                </div>
                                <div class="guardian-name">
                                    <label for="guardian-name">Address</label>
                                    <textarea readonly id="guardian-name" rows="1"><?php echo $data['email']; ?></textarea>
                                </div>


                                

                        <?php
                            } else {
                                echo "User data not found.";
                            }

                            // Free the result set
                            mysqli_free_result($result);
                        } else {
                            echo "Username not found in session.";
                        }
                        ?>

                        </div>
                    </div>
                  </div>
                </div>
  
      </body>
  
  </html>

