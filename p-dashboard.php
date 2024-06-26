
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="css/p-dashboard.css">

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
                        </span>
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
            <div class="cardBox">
                <a href="#" class="card-link">
                    <div class="card">
                        <div>
                            <div class="image">
                                <img src="img/user-info.png" alt="Image 1">
                            </div>
                            <div class="cardText">
                                <p>User Information</p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#" class="card-link">
                <div class="card">
                    <div>
                        <div class="image">
                            <img src="img/vaccine-history.png" alt="Image 2">
                        </div>
                        <div class="cardText">
                            <p>Vaccination History</p>
                        </div>
                    </div>
                </div>
                </a>

                <a href="#" class="card-link">
                <div class="card">
                    <div>
                        <div class="image">
                            <img src="img/edu-resources.png" alt="Image 2">
                        </div>
                        <div class="cardText">
                            <p>Educational Resources</p>
                        </div>
                    </div>
                </div>
                </a>

                <a href="#" class="card-link">
                <div class="card">
                    <div>
                        <div class="image">
                            <img src="img/emg-contact.png" alt="Image 2">
                        </div>
                        <div class="cardText">
                            <p>Emergency Contacts</p>
                        </div>
                    </div>
                </div>
                </a>

            </div>
    </body>

</html>
