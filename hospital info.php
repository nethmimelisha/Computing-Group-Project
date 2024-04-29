<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="css/hospitalinfo.css">

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
                    <a href="adminSettings.html">
                        <span class="icon">
                            <i class="fa-solid fa-gear"></i>
                        </span>
                        <span class="title">settings</span>
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

            <!-- ========================= Hospital Info ==================== -->

            <div class="container1">
                <h1>Hospital Information</h1><br>
                <div class="patient-details">
                  <div class="info">
                    <h2>Hospital Info</h2><br>

                    <?php
                // Include your database connection file
                include "connection.php";

                // Fetch hospital data from the database
                $sql = "SELECT * FROM hospital";
                $result = mysqli_query($conn, $sql);

                if ($result && mysqli_num_rows($result) > 0) {
                    // Fetch the user and guardian data as an associative array
                    $row = mysqli_fetch_assoc($result);
                   
                        
                ?>
                        <div class="hid">
                            <label for="hospital-id">Hospital_ID </label>
                            <textarea readonly rows="1"><?php echo $row["Hospital_ID"]; ?></textarea>
                        </div>

                        <div class="RegID">
                            <label for="reg-no">MOH_ID</label>
                            <textarea readonly id="reg-no" rows="1"><?php echo $row["MOH_ID"]; ?></textarea>
                        </div>

                        <div class="name">
                            <label for="hospital-name">Name</label>
                            <textarea readonly id="hospital-name" rows="1"><?php echo $row["Name"]; ?></textarea>
                        </div>
                     
                        <div class="address">
                            <label for="hospital-address">Address</label>
                            <textarea readonly id="hospital-address" rows="4"><?php echo $row["city"] . ", " . $row["district"] . ", " . $row["province"]; ?></textarea>
                        </div>
                        

                        <div class="contact">
                            <label for="hospital-contact">Contact</label>
                            <textarea readonly id="hospital-contact" rows="1"><?php echo $row["contact"]; ?></textarea>
                        </div>
                <?php
                    }
                else {
                    echo "No hospital data found";
                }

                
              
                ?>
            </div>
        </div>
    </div>
    </body>

</html>