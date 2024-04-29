<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="css/education.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Resources</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="css/education.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <script src="js/admin.js"></script>

</head>
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


    <h1>Educational Resources</h1>

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

    <div class="btn-container">
        <a class="btn" href="education.php">Add New Resource</a>
    </div>

</body>

</html>
