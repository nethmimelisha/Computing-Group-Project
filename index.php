<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ImmunifyLanka</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- owl carousel -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- custom css -->
        <link rel = "stylesheet" href = "css/main.css" />
        <link rel = "stylesheet" href = "css/utilities.css" />
        <!-- normalize.css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        
        <div class="page-wrapper" id="first">
            <!-- header -->
            <header class = "header">
                <nav class = "navbar">
                    <div class="container">
                        <div class="navbar-content d-flex justify-content-between align-items-center">
                            <div class = "brand-and-toggler d-flex align-items-center justify-content-between">
                                <a href = "#" class = "navbar-brand d-flex align-items-center">
                                    <span class="icon">
                                        <img src="img/logo3.png" alt="Admin Dashboard Icon">
                                    </span>
                                </a>
                                <button type = "button" class = "d-none navbar-show-btn">
                                    <i class = "fas fa-bars"></i>
                                </button>
                            </div>

                            <div class = "navbar-box">
                                <button type = "button" class = "navbar-hide-btn">
                                    <i class = "fas fa-times"></i>
                                </button>

                                <ul class = "navbar-nav d-flex align-items-center">
                                    <li class = "nav-item">
                                        <a href = "#parto" class = "nav-link text-white nav-active text-nowrap">Login</a>
                                    </li>
                                    <li class = "nav-item">
                                        <a href = "#partt" class = "nav-link text-white text-nowrap">Our Services</a>
                                    </li>
                                    <li class = "nav-item">
                                        <a href = "#partthree" class = "nav-link text-white text-nowrap">About our team</a>
                                    </li>
                                    <li class = "nav-item">
                                        <a href = "#partfour" class = "nav-link text-white text-nowrap">Educational resources</a>
                                    </li>
                                    <li class = "nav-item">
                                        <a href = "contactus.php" class = "nav-link text-white text-nowrap">Contact us</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>

                <div class="element-one" id="parto">
                    <img src = "img/element-img-1.png" alt = "">
                </div>

                <div class="banner">
                    <div class="container">
                        <div class="banner-content">
                            <div class="banner-left">
                                <div class="content-wrapper">
                                    <h1 class="banner-title">Welcome to <br> ImmunifyLanka</h1>
                                    <p class="text text-white">ImmunifyLanka provides easy accessible information about vaccination</p>
                                    <div class="dropdown">
                                        <button class="get-started-btn"><b>Login</b></button>
                                        <div class="dropdown-content">
                                            <a href="adlogin.php">Admin</a>
                                            <a href="patientlogin.php">User</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="banner-right d-flex align-items-center justify-content-end">
                                <img src="img/banner-image.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                
            </header>
            <!-- end of header -->

            <main>
                <section class = "sc-services" id="partt">
                    <div class = "services-shape">
                        <img src = "img/curve-shape-1.png" alt = "">
                    </div>
                    <div class="container">
                        <div class = "services-content">
                            <div class="title-box text-center">
                                <div class = "content-wrapper">
                                    <h3 class = "title-box-name">Our services</h3>
                                    <div class = "title-separator mx-auto"></div>
                                    <p class = "text title-box-text">Introducing our web-based vaccination management system: Seamlessly manage vaccination schedules and empower users with timely notifications, ensuring comprehensive access to their vaccination history for informed healthcare decisions.</p>
                                </div>
                            </div>

                            <div class = "services-list">
                                <div class = "services-item">
                                    <div class = "item-icon">
                                        <img src = "img/service-icon-1.png" alt = "service icon">
                                    </div>
                                    <h5 class = "item-title fw-7">Vaccination Reminder Notifications</h5>
                                    <p class = "text">We send you a notification to your mobile phone when a vaccine is due.</p>
                                </div>

                                <div class = "services-item">
                                    <div class = "item-icon">
                                        <img src = "img/service-icon-2.png" alt = "service icon">
                                    </div>
                                    <h5 class = "item-title fw-7">Vaccine History</h5>
                                    <p class = "text">You can access your vaccination history</p>
                                </div>

                                <div class = "services-item">
                                    <div class = "item-icon">
                                        <img src = "img/service-icon-3.png" alt = "service icon">
                                    </div>
                                    <h5 class = "item-title fw-7">Patient Information</h5>
                                    <p class = "text">Keep track about your profile and vaccinations</p>
                                </div>

                                <div class = "services-item">
                                    <div class = "item-icon">
                                        <img src = "img/service-icon-4.png" alt = "service icon">
                                    </div>
                                    <h5 class = "item-title fw-7">Hospital Info</h5>
                                    <p class = "text">You can learn about details about hospital.</p>
                                </div>

                                <div class = "services-item">
                                    <div class = "item-icon">
                                        <img src = "img/service-icon-5.png" alt = "service icon">
                                    </div>
                                    <h5 class = "item-title fw-7">Safety</h5>
                                    <p class = "text">Your data is highly protected and valued.</p>
                                </div>

                                <div class = "services-item">
                                    <div class = "item-icon">
                                        <img src = "img/service-icon-6.png" alt = "service icon">
                                    </div>
                                    <h5 class = "item-title fw-7">Educational resources</h5>
                                    <p class = "text">Learn about latest vaccinations.</p>
                                </div>
                            </div>

                            <div class = "d-flex align-items-center justify-content-center services-main-btn">
                                
                            </div>
                        </div>
                    </div>
                </section>

                <section class = "sc-grid sc-grid-one" id="partthree">
                    <div class="container">
                        <div class = "grid-content d-grid align-items-center">
                            <div class = "grid-img">
                                <img src = "img/health-care-img.png" alt = "">
                            </div>
                            <div class = "grid-text">
                                <div class = "content-wrapper text-start">
                                    <div class = "title-box">
                                        <h3 class = "title-box-name text-white">About our team</h3>
                                        <div class = "title-separator mx-auto"></div>
                                    </div>

                                    <p class = "text title-box-text text-white">Learn more about our team who developed this application.</p>
                                    <button class="get-started-btn"><b>Learn More</b></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <script>
                    
                    document.getElementById("learnMoreBtn").onclick = function() {
                        
                        window.location.href = 'aboutus.html';
                    };
                </script>

                <section class = "sc-articles" id="partfour">
                    <div class = "articles-shape">
                        <img src = "img/curve-shape-2.png" alt = "">
                    </div>
                    <div class = "container">
                        <div class = "articles-content">
                            <div class = "articles-element">
                                <img src = "img/element-img-2.png" alt = "">
                            </div>
                            <div class = "title-box text-center">
                                <div class = "content-wrapper">
                                    <h3 class = "title-box-name">Learn more about vaccinations</h3>
                                    <div class = "title-separator mx-auto"></div>
                                </div>
                            </div>
                            
                            <div class = "articles-list d-flex flex-wrap justify-content-center">
                                <article class = "articles-item">
                                    <div class = "item-img">
                                        <img src = "img/article-img-1.png">
                                    </div>
                                    <div class = "item-body">
                                        <div class = "item-title">Mumps Vaccination</div>
                                        <p class = "text">Mumps vaccination is a crucial preventive measure against the contagious viral infection known as mumps. Administered primarily through the MMR (measles, mumps, and rubella) vaccine.......</p>
                                        <a href = "#first" class = "item-link text-blue d-flex align-items-baseline">
                                            <span class = "item-link-text">Read more</span>
                                            <span class = "item-link-icon">
                                                <i class = "fas fa-arrow-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </article>

                                <article class = "articles-item">
                                    <div class = "item-img">
                                        <img src = "img/article-img-2.png">
                                    </div>
                                    <div class = "item-body">
                                        <div class = "item-title">Covid 19 Vaccination</div>
                                        <p class = "text">The COVID-19 vaccine represents a pivotal tool in combating the global pandemic caused by the novel coronavirus. Developed through rigorous scientific research...</p>
                                        <a href = "#first" class = "item-link text-blue d-flex align-items-baseline">
                                            <span class = "item-link-text">Read more</span>
                                            <span class = "item-link-icon">
                                                <i class = "fas fa-arrow-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </article>

                                <article class = "articles-item">
                                    <div class = "item-img">
                                        <img src = "img/article-img-3.png">
                                    </div>
                                    <div class = "item-body">
                                        <div class = "item-title">Rabies Vaccine</div>
                                        <p class = "text">The rabies vaccine is a vital defense against the deadly rabies virus transmitted through the bite of infected animals....</p>
                                        <a href = "#first" class = "item-link text-blue d-flex align-items-baseline">
                                            <span class = "item-link-text">Read more</span>
                                            <span class = "item-link-icon">
                                                <i class = "fas fa-arrow-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </article>
                                
                            </div>
                        </div>
                    </div>
                </section>
            </main>

            <footer class = "footer" id="partf">
                <div class = "container">
                    <div class = "footer-content">
                        <div class = "footer-list d-grid text-white">
                            <div class = "footer-item">
                                <a href = "#" class = "navbar-brand d-flex align-items-center">
                                    <span class="icon1">
                                        <img src="img/logo3.png" alt="Admin Dashboard Icon">
                                    </span>
                                </a>
                                <p class = "text-white">At our platform, we prioritize safety and quality in delivering vaccination updates.</p>
                                
                            </div>

                        

                            <div class = "footer-item">
                                <h3 class = "footer-item-title">Contact us through</h3>
                                <ul class = "footer-links">
                                    <li><a href = "#">immunifylanka@gmail.com</a></li>
                                     <li><a href = "#">1236547896</a></li>
                                 
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class = "footer-element-1">
                    <img src = "img/element-img-4.png" alt = "">
                </div>
                <div class = "footer-element-2">
                    <img src = "img/element-img-5.png" alt = "">
                </div>
            </footer>
        </div>
        
        <!-- jquery cdn -->
        <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
        <!-- owl carousel -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- custom js -->
        <script src = "js/script.js"></script>
    </body>
</html>
