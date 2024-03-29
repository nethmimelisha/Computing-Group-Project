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
                        <span class="title">Admin Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-gauge"></i>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="hospital info.html">
                        <span class="icon">
                            <i class="fa-regular fa-hospital"></i>
                        </span>
                        <span class="title">Hospital Info</span>
                    </a>
                </li>

                <li>
                    <a href="register.html">
                        <span class="icon">
                            <i class="fa-solid fa-user-plus"></i>
                        </span>
                        <span class="title">Patient Registration</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-syringe"></i>
                        </span>
                        <span class="title">Vaccination Updates</span>
                    </a>
                </li>

                <li>
                    <a href="PatientInformation.html">
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
                        
                <div class="search">
                    <label>
                        <input type="text" placeholder="Patient Name / Username">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </label>
                </div>

                <div class="user">
                    <img src="img/asiri.png" alt="">
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
                <a href="#" class="btn">View All</a>
            </div>

            <table>
                <thead>
                    <tr>
                        <td>Patient ID</td>
                        <td>Name</td>
                        <td>Vaccine Type</td>
                        <td>Status</td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>P001</td>
                        <td>Anne Perera</td>
                        <td>Covid-19 Vaccination</td>
                        <td><span class="status done">Done</span></td>
                    </tr>

                    <tr>
                        <td>P002</td>
                        <td>Saman Jayasooriya</td>
                        <td>Chickenpox</td>
                        <td><span class="status pending">Pending</span></td>
                    </tr>

                    <tr>
                        <td>P003</td>
                        <td>John Fernando</td>
                        <td>Influenza (flu)</td>
                        <td><span class="status cancel">Cancel</span></td>
                    </tr>

                    <tr>
                        <td>P004</td>
                        <td>Peter Perera</td>
                        <td>Polio</td>
                        <td><span class="status inProgress">In Progress</span></td>
                    </tr>

                    <tr>
                        <td>P005</td>
                        <td>Ann Perera</td>
                        <td>Covid-19 Vaccination</td>
                        <td><span class="status done">Done</span></td>
                    </tr>

                    <tr>
                        <td>P006</td>
                        <td>Saman Perera</td>
                        <td>Chickenpox</td>
                        <td><span class="status pending">Pending</span></td>
                    </tr>

                    <tr>
                        <td>P007</td>
                        <td>Peter Jayasooriya</td>
                        <td>Influenza (flu)</td>
                        <td><span class="status cancel">Cancel</span></td>
                    </tr>

                    <tr>
                        <td>P008</td>
                        <td>John Fernando</td>
                        <td>Polio</td>
                        <td><span class="status inProgress">In Progress</span></td>
                    </tr>
                </tbody>
            </table>
        </div>


    </body>

</html>
