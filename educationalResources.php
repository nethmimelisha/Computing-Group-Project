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
    <title>Educational Resources</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="css/p-dashboard.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    
    <script src="js/admin.js"></script>
    <style>
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .resources {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .resource {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .resource h2 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .resource p {
            font-size: 1rem;
            color: #666;
            margin-bottom: 15px;
        }

        .resource img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .btn-container {
            text-align: center;
            margin-top: 20px;
        }

        .btn {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #45a049;
        }
    
    </style>

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

            <br><br>
            <h1>Educational Resources</h1>
            <br><br>


            <div class="resources">
        <?php
        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "immunifylanka";


        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve data from the education table
        $sql = "SELECT * FROM education";
        $result = $conn->query($sql);

        // Check if there are any records in the result
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                // Display resource information
                echo "<div class='resource'>";
                echo "<h2>" . $row["title"] . "</h2>";
                echo "<p>" . $row["description"] . "</p>";
                echo "<img src='" . $row["image"] . "' alt='" . $row["title"] . "' />";
                echo "</div>";
            }
        } else {
            echo "No educational resources available.";
        }

        // Close database connection
        $conn->close();
        ?>
    </div>
    </body>

</html>
