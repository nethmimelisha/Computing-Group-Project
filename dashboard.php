<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="css/dashboard.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <script src="js/admin.js"></script>

</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="dashboard.php">
                        <span class="icon">
                            <img src="img/logo2.png" alt="Admin Dashboard Icon">
                        </span>
                        <span class="title">Web Admin Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="dashboard.php">
                        <span class="icon">
                            <i class="fa-solid fa-gauge"></i>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="hosp-register.php">
                        <span class="icon">
                            <i class="fa-solid fa-user-plus"></i>
                        </span>
                        <span class="title">Hospital Registration</span>
                    </a>
                </li>
                
                <li>
                    <a href="education.php">
                        <span class="icon">
                            <i class="fa-solid fa-syringe"></i>
                        </span>
                        <span class="title">Educational Resources</span>
                    </a>
                </li>

                <li>
                    <a href="newedu.php">
                        <span class="icon">
                        <i class="fa-solid fa-school"></i>
                        </span>
                        <span class="title">View Educational Resources</span>
                    </a>
                </li>


                <li>
                    <a href="#">
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
                </div>


            <!-- ======================= Card ======================== -->
            <div class="cardBox">
                <a href="register.php" class="card-link">
                    <div class="card">
                        <div>
                            <div class="image">
                                <img src="img/user-info.png" alt="Image 1">
                            </div>
                            <div class="cardText">
                                <p>Hospital Registartion</p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="education.php" class="card-link">
                <div class="card">
                    <div>
                        <div class="image">
                            <img src="img/edu-resources.png" alt="Image 2">
                        </div>
                        <div class="cardText">
                            <p>Add Educational Resources</p>
                        </div>
                    </div>
                </div>
                </a>

                <a href="newedu.php" class="card-link">
                <div class="card">
                    <div>
                        <div class="image">
                            <img src="img/emg-contact.png" alt="Image 2">
                        </div>
                        <div class="cardText">
                            <p>View Educational Resources</p>
                        </div>
                    </div>
                </div>
                </a>

            </div>
            </html>