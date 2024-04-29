<?php
include("connection.php");
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
    <link rel="stylesheet" href="css/VaccinationHistory.css">
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

                            // Fetch vaccination history based on the username
                            $sql = "SELECT * FROM vaccine_info WHERE child_id IN (SELECT child_id FROM child WHERE username = '$username')";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                // Display navigation menu
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

       

            <h1>Vaccination History</h1>
            <br><br>
            <table id="vaccinationTable">
                <thead>
                    <tr>
                        <th>Hospital ID</th>
                        <th>Vaccine ID</th>
                        <th>Date</th>
                        <th>Remarks</th>
                     
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Loop through each vaccination record and display it in the table rows
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["Hospital_ID"]; ?></td>
                        <td><?php echo $row["Vaccine_ID"]; ?></td>
                        <td><?php echo $row["Date"]; ?></td>
                        <td><?php echo $row["Notes"]; ?></td>
                        
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
<?php
    } else {
        // Handle case where no vaccination history is found for the user
        echo "No vaccination history found for the user.";
    }
} else {
    // Handle case where the username is not set in the session
    echo "Username not found.";
}
?>

