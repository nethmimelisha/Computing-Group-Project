<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define your database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "immunifylanka";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the INSERT statement
    $stmt = $conn->prepare("INSERT INTO vaccine (name, type, purpose, serial_number) VALUES (?, ?, ?, ?)");

    // Check if the prepare() succeeded
    if ($stmt === false) {
        echo "<script>alert('Prepare failed: " . $conn->error . "');</script>";
    } else {
        // Bind parameters
        $stmt->bind_param("ssss", $vname, $type, $purpose, $serialno);

        // Set parameters and execute
        $vname = $_POST['vname'];
        $type = $_POST['type'];
        $purpose = $_POST['purpose'];
        $serialno = $_POST['serialno'];
        if ($stmt->execute()) {
            echo "<script>alert('New record created successfully');</script>";
        } else {
            echo "<script>alert('Error: " . $stmt->error . "');</script>";
        }

        // Close statement
        $stmt->close();
    }

    // Close database connection
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="css/vaccine.css">

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

         
         <!-- ========================= Vaccine Form ==================== -->   
<br><br>
  
<div class="patient-registration">
    <h2>New Vaccine Update</h2>
    
    <form action="vaccine.php" method="POST">

        <div class="form-group">
            <label for="vname">Vaccine Name</label>
            <input type="text" id="vname" name="vname" required>
        </div>

        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" id="type" name="type" required>
        </div>

        <div class="form-group">
            <label for="purpose">Purpose of the Vaccine</label>
            <input type="text" id="purpose" name="purpose" required>
        </div>

        <div class="form-group">
            <label for="serialno">Serial Number</label>
            <input type="text" id="serialno" name="serialno" required>
        </div>

        <button type="submit">Submit</button>
    </form>
</div>
     

</body>
</html>
