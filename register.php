<?php
// Establishing a connection to the database
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

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieving form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $guardian_name = $_POST['fullname'];
    $relationship = $_POST['Relationship'];
    $guardian_address = $_POST['guardian_address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $username = $_POST['uname'];
    $password = $_POST['password'];

    // SQL query to insert data into the child table
    $sql = "INSERT INTO Child (First_Name, Last_Name, Date_of_Birth, Gender, Address, Guardian_Name, Relationship, Guardian_Address, Phone_Number, Email, Username, Password)
    VALUES ('$fname', '$lname', '$dob', '$gender', '$address', '$guardian_name', '$relationship', '$guardian_address', '$phone', '$email', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Success message
        echo '<script>alert("Record inserted successfully!");</script>';
    } else {
        // Error message
        echo '<script>alert("Error: ' . $sql . '\n' . $conn->error . '");</script>';
    }
}

// Closing the database connection
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
    <link rel="stylesheet" href="css/register.css">

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

            <!-- ==================== Patient Registration Form ==================== -->
            <div class="patient-registration">
    <h2>Patient Registration</h2>
    <h5>Patient Infomation</h5>
    
    <form action="register.php" method="POST">

        <div class="form-group">
            <label for="fname">First Name</label>
            <input type="text" id="fullname" name="fname" required>
        </div>

        <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" required>
        </div>

        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <textarea id="address" name="address" required></textarea>
        </div>

        <h5>Guardian Infomation</h5>

            <div class="form-group">
                <label for="fullname">Guardian Name</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="form-group">
                <label for="Relationship">Relationship</label>
                <input type="text" id="dob" name="Relationship" required>
            </div>

            <div class="form-group">
                <label for="guardian_address">Guardian Address</label>
                <textarea id="guardian_address" name="guardian_address" required></textarea>
            </div>
            
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="uname"><b>Username</b></label>
                <input type="text" id="uname" name="uname" required>
                </div>
        
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" id="password" name="password" required>
            </div>

            <button onclick="createPassword()" type="submit">Generate Password</button><br><br>
            
           <button type="submit">Register</button>

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

    