
<?php
include("connection.php");

// Initialize $row as an empty array
$row = [];
$errorMsg = "";
$successMsg = "";

// Check if the search form is submitted and the search query is present
if (isset($_GET['search'])) {
    // Sanitize and escape the search query to prevent SQL injection
    $searchQuery = mysqli_real_escape_string($conn, $_GET['search']);

    // Perform the search operation using your database query
    // Replace 'your_table' with your actual table name and 'column_name' with the column you want to search in
    $sql = "SELECT * FROM child WHERE username = '$searchQuery'";
    $result = mysqli_query($conn, $sql);
   

    // Check if any rows were returned
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
       
    } else {
        // No search results found, handle this case (e.g., display a message)
        $errorMsg = "No results found";
    }
}
if (isset($_POST['save_changes'])) {
    if (empty($_POST['full_name']) || empty($_POST['dob']) || empty($_POST['gender']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['email'])) {
        $errorMsg = "Please fill in all fields before saving changes";
    }
    else{
    // Get the updated values from the form
    $patientId = $_POST['patient_id'];
    $fullName = $_POST['full_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // Update the database with the new values
    $updateSql = "UPDATE child SET First_Name='$fullName',Date_of_Birth='$dob', Gender='$gender', Address='$address', Phone_Number='$phone', Email='$email' WHERE Child_ID='$patientId'";
    $updateResult = mysqli_query($conn, $updateSql);
    

   if ($updateResult) {
        // Update $row with the new values
        $row['First_Name'] = $fullName;
        $row['Date_of_Birth'] = $dob;
        $row['Gender'] = $gender;
        $row['Address'] = $address;
        $row['Phone_Number'] = $phone;
        $row['Email'] = $email;

        $successMsg = "Changes saved successfully";
    } else {
        $errorMsg = "Error updating record: " . mysqli_error($conn);
        
    }
}
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
    <link rel="stylesheet" href="css/PatientInformation.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <script src="admin.js"></script>
    <style>
    .error-message {
        color: red;
        font-size: 14px;
        margin-top: 5px;
    }

    .error-icon {
        color: red;
        margin-right: 5px;
    }
    .success-message{
        color:#2df123;
        font-size: 14px;
        margin-top: 5px;
        margin-bottom: 5px;
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
                <div class="search" style="margin-bottom: 20px; margin-top:40px; text-align: center; ">
    <form action="" method="GET">
        <div class="input-group mb-3" >
            <input style="border: 1px solid var(--black2);margin-top: 20px; position: relative; width: 100%;height: 40px;border-radius: 40px;padding: 5px 20px;padding-left: 35px; font-size: 18px; outline: none;" type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data" style="width:100%; height:25%;border-radius: 5px;">
            <button style="margin-top: 20px; width: 100px; height: 40px;border-radius: 40px; font-size: 18px; outline: none;" type="submit" class="btn btn-primary" style="border-radius:10px; ">Search</button>
        </div>
    </form>
                </div>

                
            </div>

            <!-- ==================== Patient Information ==================== -->
<div class="patient-registration">
    <h2>Patient Information</h2>
   
    <form action="" method="POST">
    <?php if (!empty($errorMsg)) : ?>
                    <div class="error-message"><span class="error-icon">!</span><?php echo $errorMsg; ?></div>
                <?php endif; ?>
                <?php if (!empty($successMsg)) : ?>
                    <div class="success-message"><span class="success-icon">&#10003;</span><?php echo $successMsg; ?></div>
                <?php endif; ?>

    <div class="form-group">
    <label for="fullname">Patient ID</label>
    <textarea id="patient_id" name="patient_id" readonly ><?php echo $row['Child_ID']; ?></textarea>
</div>

<div class="form-group">
    <label for="fullname">Full Name</label>
    <textarea id="full_name" name="full_name" ><?php echo $row['First_Name']; ?></textarea>
</div>

<div class="form-group">
    <label for="dob">Date of Birth</label>
    <textarea id="dob" name="dob" ><?php echo $row['Date_of_Birth']; ?></textarea>
</div>

<div class="form-group">
    <label for="gender">Gender</label>
    <select id="gender" name="gender" required>
        <option value="male" <?php if ($row['Gender'] == 'male') echo 'selected'; ?>>Male</option>
        <option value="female" <?php if ($row['Gender'] == 'female') echo 'selected'; ?>>Female</option>
        <option value="other" <?php if ($row['Gender'] == 'other') echo 'selected'; ?>>Other</option>
    </select>
</div>

<div class="form-group">
    <label for="address">Address</label>
    <textarea id="address" name="address" ><?php echo $row['Address']; ?></textarea>
</div>

<div class="form-group">
    <label for="phone">Phone Number</label>
    <textarea id="phone" name="phone"><?php echo $row['Phone_Number']; ?></textarea>
</div>

<div class="form-group">
    <label for="email">Email</label>
    <textarea id="email" name="email" ><?php echo $row['Email']; ?></textarea>
</div>
           
<div class="button-container" style=" margin-bottom: 25px;">
  
  <button type="submit" name="save_changes" style="padding: 8px 16px; background-color: #008CBA; color: white; border: none; border-radius: 4px;" >Save Changes</button>
  <button type="submit" name="discard" style="padding: 8px 16px; background-color: #f44336; color: white; border: none; border-radius: 4px;">Discard</button>
</div>
    
<?php
    // Check if $row has data (i.e., a valid search result)
    if (!empty($row)) {
        // Fetch vaccination information related to the searched username
        $vaccinationSql = "SELECT * FROM vaccine_info WHERE Child_ID = '" . $row['Child_ID'] . "'";
        $vaccinationResult = mysqli_query($conn, $vaccinationSql);
        if ($vaccinationResult && mysqli_num_rows($vaccinationResult) > 0) {
            echo '<table>';
            echo '<thead><tr><th>Date</th><th>Hospital</th><th>Vaccine Name</th><th>Remarks</th></tr></thead>';
            echo '<tbody>';
            while ($vaccinationRow = mysqli_fetch_assoc($vaccinationResult)) {
                echo "<tr>";
                echo "<td>" . $vaccinationRow['Date'] . "</td>";
                echo "<td>" . $vaccinationRow['Hospital_ID'] . "</td>";
                echo "<td>" . $vaccinationRow['Vaccine_ID'] . "</td>";
                echo "<td>" . $vaccinationRow['Notes'] . "</td>";
                echo "</tr>";
            }
            echo '</tbody>';
            echo '</table>';
        } else {
            echo "No vaccination information found.";
        }
    } else {
        //echo "No patient information found to fetch vaccination details.";
    }
    ?>
            


    </form>
</div>
            
       

     </body>

</html>

    

    
