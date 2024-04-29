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

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $child_id = $_POST['child_id'];
    $hospital_id = $_POST['hospital_id'];
    $vaccine_id = $_POST['vaccine_id'];
    $date = $_POST['date'];
    $notes = $_POST['notes'];
    
    // Upload barcode image
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["barcode_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    // Check file size
    if ($_FILES["barcode_image"]["size"] > 50000) {
        echo "<script>alert('Sorry, your file is too large.');</script>";
        $uploadOk = 0;
    }
    
    // Allow only certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";
        $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<script>alert('Sorry, your file was not uploaded.');</script>";
    // If everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["barcode_image"]["tmp_name"], $target_file)) {
            // Insert data into database
            $sql = "INSERT INTO vaccine_info (child_id, hospital_id, vaccine_id, date, notes, barcode_image) VALUES ('$child_id', '$hospital_id', '$vaccine_id', '$date', '$notes', '$target_file')";
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('New record created successfully');</script>";
            } else {
                echo "<script>alert('Error: " . $sql . "\\n" . $conn->error . "');</script>";
            }
        } else {
            echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
        }
    }
}

// Close database connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="css/childvacinne.css">

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

         
         <!-- ========================= Vaccine Form ==================== -->   
<br><br>
         <div class="patient-registration">
         <h2>Vaccine Update - User's New Vaccination Update</h2>
  <br><br>
         <form action="childvaccine.php" method="POST" enctype="multipart/form-data">
   
            <div class="form-group">
                <label for="child_id">Child ID:</label>
                <input type="text" id="child_id" name="child_id" required>
            </div>
            
            <div class="form-group">
                <label for="hospital_id">Hospital ID:</label>
                <input type="text" id="hospital_id" name="hospital_id" required>
            </div>

            <div class="form-group">
                <label for="vaccine_id">Vaccine ID:</label>
                <input type="text" id="vaccine_id" name="vaccine_id" required>
            </div>

            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
            </div>

            <div class="form-group">
                <label for="notes">Notes:</label>
                <textarea id="notes" name="notes" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="barcode_image">Barcode Image:</label>
                <input type="file" id="barcode_image" name="barcode_image" accept="image/*" required>
            </div>

            <div class="button-container">
                <button type="submit">Submit</button>
            </div>

        </form>
    </div>

</body>
</html>
