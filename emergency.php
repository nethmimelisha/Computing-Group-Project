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
    <link rel="stylesheet" href="css/emergencey.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    
    <script src="js/admin.js"></script>

</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="p-dashboard.php">
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
              
            </div>


            <!-- ======================= Card ======================== -->
            <h1>Emergency Contact</h1>
            <div class="cardBox">
                <a href="#" class="card-link">
                    <div class="card">
                        <div>
                        <div class="cardText">
                                <p> Colombo General Hospital</p>
                                <br><br>
                                <p>Address:The National Hospital of Sri Lanka,<br>Colombo 10.<br>NAtional Hospital:+9411-2691111<br>Inquiries:+9411-2693510<br>Accident Service:+9411-2691111</p> 
                            </div>
                                
                        </div>
                    </div>
                </a>

                <a href="#" class="card-link">
                <div class="card">
                    <div>
                    <div class="cardText">
                            <p>Certis Lanka Ambulance</p>
                            <br><br>
                            <p>Address:120 Havelock Rd,Colombo 00500<br>Hours:Open 24 hours<br>Phone:0112585777</p> 
                        </div>
                     </div>
                </div>
                </a>

                <a href="#" class="card-link">
                <div class="card">
                    <div>
                    <div class="cardText">
                            <p>Government Hospital Homagama</p>
                            <br><br>
                            <p>Address:Hospital Rd,Homagama 10200<br>Hours:Open 24 hours<br>Phone:0112855200</p> 
                        </div>
                          
                    </div>
                </div>
                </a>

                <a href="#" class="card-link">
                <div class="card">
                    <div>
                    <div class="cardText">
                            <p>Colombo General Hosptal</p>
                            <br><br>
                            <p>Address:The National Hospital of Sri Lanka,<br>Colombo 10.National Hospital: +9411-2691111<br>inquiries:+9411-2693510<br>Accident Service:+9411-2691111</p>
                        </div>
                     </div>
                </div>
                </a>

            </div>
    </body>

</html>