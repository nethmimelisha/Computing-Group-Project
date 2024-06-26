<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="css/admin.css">

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
            
            </div>

                 <!-- ======================= Cards ================== -->
                 <div class="cardBox">
                 
                    <div class="card hospital">
                        <div>
                            <div class="numbers">
                                <i class="fa-regular fa-hospital" style="color: #0F3559;"></i>
                            </div>
                            <div class="cardName blue">Hospital Info</div>
                        </div>
                    </div>
                    
                    
                    <div class="card appointments">
                          
                        <div>
                            <div class="numbers">
                                <i class="fa-regular fa-calendar-check" style="color: #FF69B4;"></i> </i>
                            </div>
                            <div class="cardName pink">Patient Information</div>
                        </div>
                    </div>
                
                    <div class="card vaccination">
                        <div>
                            <div class="numbers">
                                <i class="fa-solid fa-syringe" style="color: #b8c411;"></i>
                            </div>
                            <div class="cardName yellow">Vaccination Update</div>
                        </div>
                    </div>
                
                    <div class="card patient">
                        <div>
                            <div class="numbers">
                                <i class="fa-solid fa-user" style="color: #0a940a;"></i>
                            </div>
                            <div class="cardName green">Patient Registration</div>
                        </div>
                    </div>
                </div>

                 <!-- ================ Vaccination Progress ================= -->
    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Vaccination Progress</h2>
    
            </div>

            <table>
                <thead>
                    <tr>
                        <td>Vaccine_ID </td>
                        <td>Name</td>
                        <td>Type</td>
                        <td>Purpose</td>
                        <td>Serial_Number</td>
                    </tr>
                </thead>

                <?php
// Include your database connection file


// Fetch data from the vaccine table
$sql = "SELECT * FROM vaccine";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["vaccine_id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["type"] . "</td>";
        echo "<td>" . $row["purpose"] . "</td>";
        echo "<td>" . $row["serial_number"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>No data found</td></tr>";
}

// Close the database connection (if required)
mysqli_close($conn);
?>

            </table>
        </div>
    </body>

</html>
