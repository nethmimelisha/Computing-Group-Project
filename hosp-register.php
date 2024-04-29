<?php

$message = "";
// Database connection parameters
// This should match your database name
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

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $hospital_id = isset($_POST['ID']) ? mysqli_real_escape_string($conn, $_POST['ID']) : '';
    $moh_id = isset($_POST['MOHID']) ? mysqli_real_escape_string($conn, $_POST['MOHID']) : '';
    $name = isset($_POST['Name']) ? mysqli_real_escape_string($conn, $_POST['Name']) : '';
    $type = isset($_POST['type']) ? mysqli_real_escape_string($conn, $_POST['type']) : ''; // Check if 'type' is set
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
    $city = isset($_POST['city']) ? mysqli_real_escape_string($conn, $_POST['city']) : '';
    $district = isset($_POST['district']) ? mysqli_real_escape_string($conn, $_POST['district']) : '';
    $province = isset($_POST['province']) ? mysqli_real_escape_string($conn, $_POST['province']) : ''; // Check if 'province' is set
    $contact = isset($_POST['phone']) ? mysqli_real_escape_string($conn, $_POST['phone']) : '';
    $username = isset($_POST['uname']) ? mysqli_real_escape_string($conn, $_POST['uname']) : '';
    $password = isset($_POST['password']) ? mysqli_real_escape_string($conn, $_POST['password']) : '';


    

    // Insert data into Hospital table
    $sql = "INSERT INTO Hospital (Hospital_ID, MOH_ID, Name, Type, Email, City, District, Province, Contact, Username, Password) 
            VALUES ('$hospital_id', '$moh_id', '$name', '$type', '$email', '$city', '$district', '$province', '$contact', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
    echo "<script>alert('New record created successfully');</script>";
    } else {
    echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
    }
}

// Close connection
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
    <link rel="stylesheet" href="css/web-admin.css">

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

            <!-- ==================== Patient Registration Form ==================== -->
<div class="patient-registration">
    <h2>Hospital Registration</h2>
    
    <form action="register.php" method="POST">

        <div class="form-group">
            <label for="ID">Hospital ID</label>
            <input type="text" id="ID" name="ID" required>
        </div>

        <div class="form-group">
            <label for="MOHID">MOH Registration ID</label>
            <input type="text" id="MOHID" name="MOHID" required>
        </div>

        <div class="form-group">
            <label for="fullname">Name of the Hospital</label>
            <input type="text" id="fullname" name="Name" required>
        </div>

        <div class="form-group">
            <label for="type">Type</label>
            <select id="type" name="Type" required >
            <option value="" disabled selected>Select Type</option>

                <option value="gov">Government Hospital</option>
                <option value="private">Private Hospital</option>
                <option value="gov-clinic">Government Clinic</option>
                <option value="private-clinic">Private Clinic</option>

                
            </select>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="city">City</label>
            <input type="text" id="city" name="city" required>
        </div>

        <div class="form-group">
        <label for="district">District</label>
        <select id="district" name="district" required>
        <option value="" disabled selected>Select District</option>

                <option value="ampara">Ampara</option>
                <option value="anuradhapura">Anuradhapura</option>
                <option value="badulla">Badulla</option>
                <option value="batticaloa">Batticaloa</option>
                <option value="colombo">Colombo</option>
                <option value="galle">Galle</option>
                <option value="gampaha">Gampaha</option>
                <option value="hambantota">Hambantota</option>
                <option value="jaffna">Jaffna</option>
                <option value="kalutara">Kalutara</option>
                <option value="kandy">Kandy</option>
                <option value="kegalle">Kegalle</option>
                <option value="kilinochchi">Kilinochchi</option>
                <option value="kurunegala">Kurunegala</option>
                <option value="mannar">Mannar</option>
                <option value="matale">Matale</option>
                <option value="matara">Matara</option>
                <option value="monaragala">Monaragala</option>
                <option value="mullaitivu">Mullaitivu</option>
                <option value="nuwaraeliya">Nuwara Eliya</option>
                <option value="polonnaruwa">Polonnaruwa</option>
                <option value="puttalam">Puttalam</option>
                <option value="ratnapura">Ratnapura</option>
                <option value="trincomalee">Trincomalee</option>
                <option value="vavuniya">Vavuniya</option>
            </select>
        </div>

        <div class="form-group">
            <label for="province">Province</label>
            <select id="province"  name="province" required>

            <option value="" disabled selected>Select Province</option>
                <option value="nothern">Northern</option>
                <option value="north-western">North Western</option>
                <option value="western">Western</option>
                <option value="north-central">North Central</option>
                <option value="central">Central</option>
                <option value="sabaragamuwa">Sabaragamuwa</option>
                <option value="eastern">Eastern</option>
                <option value="uva">Uva</option>
                <option value="southern">Southern</option> 
            </select>
        </div>

            <div class="form-group">
                <label for="phone">Contact Number</label>
                <input type="tel" id="phone" name="phone" required>
            </div>

            <div class="form-group">
            <label for="uname"><b>Username</b></label>
            <input type="text" id="uname" name="uname" required>
            </div>
    
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" id="password" name="password" required>
            </div>
            <button onclick="createPassword()">Generate Password</button>
<br>
        <button onclick="SendMail()" type="submit">Register</button>
    </form>
</div>
     

<script>

    const passwordBox = document.getElementById("password");
    const lenght = 8;

    const upperCase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    const lowerCase = "abcdefghijklmnopqrstuvwxyz";
    const number = "0123456789";
    const symbol = "@#&$*_+/-=";

    const allChars = upperCase + lowerCase + number + symbol;

    function createPassword(){
        let password = "";
        password += upperCase[Math.floor(Math.random() * upperCase.length)];
        password += lowerCase[Math.floor(Math.random() * lowerCase.length)];
        password += number[Math.floor(Math.random() * number.length)];
        password += symbol[Math.floor(Math.random() * symbol.length)];

        while (lenght > password.length){
            password += allChars[Math.floor(Math.random() * allChars.length)];
        }
        passwordBox.value = password;
    }

</script>

<script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
</script>
<script type="text/javascript">
   (function(){
      emailjs.init({
        publicKey: "l-vZ1EnhSLA1dLRRT",
      });
   })();
</script>

<script>
    function SendMail(){
    var params = {
        uname : document.getElementById("uname").value,
        password : document.getElementById("password").value,
    };
  
    const serviceID = "service_8s184kk";
    const templateID = "template_6erhp8r"

    

    emailjs
    .send(serviceID,templateID,params)
    .then((res) => {
        document.getElementById("uname").value = "" ;
        document.getElementById("password").value = "" ;
        console.log(res);
        alert ("Your Message Sent Successfully");
    })
    .catch((err) => console.log(err));
}    

</script>

    </body>

</html>

    