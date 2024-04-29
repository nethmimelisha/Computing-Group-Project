<?php

$valid_username = 'admin';
$valid_password = '1234';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    if ($username === $valid_username && $password === $valid_password) {
        
        header("Location: dashboard.php");
        exit; 
    } else {
        
        echo "Invalid username or password. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/webmaster.css">
    <title>Web Master</title>
    <style>
        body {
            background-image: url('img/webmaster.jpg'); 
        }
    </style>
</head>
<body>
 <div class="wrapper">
    <nav class="nav">

        <div class="nav-menu" id="navMenu">
            
        </div>

        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>
<!----------------------------- Form box ----------------------------------->    
    <div class="form-box">
      
        <!------------------- login form -------------------------->
        <div class="login-container" id="login">
            <img class="logo" src="img/logo3.png" alt="Logo">       
            <div class="top">
                <header>Web Master Login</header>
            </div>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="input-box">
        <input type="text" name="username" class="input-field" placeholder="Username or Email" required>
        <i class="bx bx-user"></i>
    </div>
    <div class="input-box">
        <input type="password" name="password" class="input-field" placeholder="Password" required>
        <i class="bx bx-lock-alt"></i>
    </div>
    <div class="input-box">
        <input type="submit" class="submit" value="Sign In">
    </div>
</form>

            </div>
        </div>
 
</body>
</html>