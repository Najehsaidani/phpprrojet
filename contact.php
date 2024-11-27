<!DOCTYPE html><html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- Bootstrap CSS -->
     
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/slick-theme.css" rel="stylesheet">
    <link href="css/style_1.css" rel="stylesheet">
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/themify-icons.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="css/style_2.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <title>Bookjar</title>
</head>

<body data-scroll-animation="true">
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src="images/favicon.png" alt="Image">
                    <h4><span>Bookjar</span></h4>
                </div>
            </div>
            <h2 class="head">Did You Know?</h2>
            <p></p>
        </div>
    </div>

    <div class="body_wrapper">
        

        <header class="header_area header_relative">
            <nav class="navbar navbar-expand-lg menu_one" id="header">
                <div class="container">
                    <a class="navbar-brand" href="index.html"><img src="images/logo-dark.svg" alt="logo"></a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_toggle">
                            <span class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                            <span class="hamburger-cross">
                                <span></span>
                                <span></span>
                            </span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                        <ul class="navbar-nav menu w_menu ms-auto me-auto">
                            <li class="nav-item dropdown ">
                                <a class="nav-link " href="index.html" role="button" >
                                    HOME
                                </a>
                                
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link" href="shop.html" role="button" >
                                    Shop
                                </a>
                            </li>
                            
                            <li class="nav-item dropdown submenu mega_menu tab-demo active">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Explore
                                </a>
                                <ul class="dropdown-menu sub">
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-5 tabHeader">
                                                <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="v-pills-tour-tab" data-toggle="pill" href="#v-pills-tour" role="tab" aria-controls="v-pills-tour" aria-selected="false">Utility Pages</a>
                                                    </li>
                                                    <li class="nav-item active">
                                                        <a class="nav-link" id="v-others-menu-tab" data-toggle="pill" href="#v-others-menu" role="tab" aria-controls="v-others-menu" aria-selected="false">Company</a>
                                                    </li>
                                                   
                                                </ul>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="tab-content tabContent" id="v-pills-tabContent">
                                                    <div class="tab-pane fade" id="v-pills-tour" role="tabpanel" aria-labelledby="v-pills-tour-tab">
                                                        <div class="d-flex">
                                                            <ul class="list-unstyled tab_list w_100">
                                                                <li>
                                                                    <a href="loginuser.php">Sign In</a>
                                                                </li>
                                                                <li>
                                                                    <a href="registreuser.php">Sign Up</a>
                                                                </li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade active show" id="v-others-menu" role="tabpanel" aria-labelledby="v-others-menu-tab">
                                                        <div class="d-flex">
                                                            <ul class="list-unstyled tab_list w_100">
                                                               
                                                                <li>
                                                                    <a href="about.php">About</a>
                                                                </li>
                                                                <li>
                                                                    <a class="active" href="contact.php">Contact Us</a>
                                                                </li>
                                                                <li>
                                                                    <a href="terms.php">Terms &amp; Services</a>
                                                                </li>
                                                                <li>
                                                                    <a href="privacy.php">Privacy Policy</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        
                        </ul>
                        <div class="alter_nav">
                            <ul class="navbar-nav search_cart menu">
                                <li class="nav-item search"><a class="nav-link search-btn" href="javascript:void(0);"><i class="ti-search"></i></a>
                                    <form action="#" method="get" class="menu-search-form">
                                        <div class="input-group">
                                            <input type="search" class="form-control" placeholder="Search here..">
                                            <button type="submit"><i class="ti-arrow-right"></i></button>
                                        </div>
                                    </form>
                                </li>
                                
                            </ul>
                        </div>
                        <a class="bj_theme_btn strock_btn hidden-sm hidden-xs" href="login.html"><i class="fa-regular fa-user"></i>Login</a>
                    </div>
                </div>
            </nav>
        </header>


        <!-- Support Area -->
        <section class="contact-area">
            <!--Google map-->
            <div class="contact-map">
                <iframe id="frame" src="https://maps.google.com/maps?q=iset%20bizerte&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=&amp;output=embed" style="border:0" allowfullscreen=""></iframe>
            </div>
            <!--Google Maps-->
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-lg-8 ms-auto">
                        <div class="contact-form wow fadeInLeft" data-wow-delay="0.4s">
                            <h3 class="title">Contact. Get in touch</h3>
                            <p class="mb-35">LEAVE US A MESSAGE</p>
                            <form action="contact_process.php" method="post" id="contactForm">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Name *</label>
                                        <div class="input-group ">
                                            <i class="input-icon fa-solid fa-user"></i>
                                            <input class="form-control" type="text" id="name" name="name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email *</label>
                                        <div class="input-group">
                                            <i class="input-icon fa-solid fa-envelope-open"></i>
                                            <input class="form-control" type="email" id="email" name="email" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Write your message here"></textarea>

                                    </div>
                                </div>
                                <button type="submit" onclick="send()" class="bj_theme_btn"><i class="fa-solid fa-paper-plane"></i>SEND
                                    MESSAGE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Support Area -->

        <!-- Support Area -->
        <section class="support-area sec_padding wow fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="section_title">
                            <h2 class="title">Keep In Touch With Us</h2>
                            <p>You can get all the contact informations.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 offset-lg-1">
                        <div class="support-item">
                            <img class="support-icon" src="images/map-icon.svg" alt="">
                            <p class="support-title">Visit Us</p>
                            <p class="support-text">iset Bizerte,menzel Abed rahmen, Bizerte,Tunis</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 offset-lg-1">
                        <div class="support-item">
                            <img class="support-icon" src="images/phone-icon.svg" alt="">
                            <p class="support-title">Call Us</p>
                            <a class="support-text d-block" href="tel:9666698821521">+216 55874561</a>
                            <a class="support-text d-block" href="tel:9666698821521">+216 20369584</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 offset-lg-1">
                        <div class="support-item">
                            <img class="support-icon" src="images/envelope-icon.svg" alt="">
                            <p class="support-title">Email Us</p>
                            <a class="support-text d-block" href="mailto:example@example.com">najehsaidani241@gmail.com</a>
                     
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Support Area -->

        <!-- footer area css  -->
        <footer class="bj_footer_area_two bj_footer_area_four" data-bg-color="#212833">
            
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-sm-6">
                            <div class="f_widget link_widget wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="f_widget_title">Company</h2>
                                <ul class="list-unstyled list">
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="contact.php">Contact us</a></li>

                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="f_widget link_widget ps-lg-5 wow fadeInUp" data-wow-delay="0.3s">
                                <h2 class="f_widget_title">Services</h2>
                                <ul class="list-unstyled list">
                                    <li><a href="shop.php">Shop</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="f_widget link_widget ps-lg-5 wow fadeInUp" data-wow-delay="0.3s">
                                <h2 class="f_widget_title">Pages</h2>
                                <ul class="list-unstyled list">
                                    <li><a href="loginuser.php">Login</a></li>
                                    <li><a href="registreuser.php">Register</a></li>
                
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="f_widget link_widget ps-lg-5 wow fadeInUp" data-wow-delay="0.3s">
                            <div class=" text-center text-lg-start">
                                <a href="#" class="f_logo">
                                    <img src="images/logo-white.svg" alt="f_logo">
                                </a>
                            </div>
                            <ul class="list-unstyled list">
                                <li><a href="terms.php">Terms of service</a></li>
                                <li><a href="privacy.php">Privacy policy</a></li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="footer_bottom text-center wow fadeInUp" data-wow-delay="0.6s">
                <p>© 2024 IsetBooks. All Rights Reserved</p>
            </div>
        </footer>
    </div>
    <!-- Back to top button -->
    <a id="back-to-top" title="Back to Top"></a>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="js/jquery-3.6.0.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="js/send.js"></script>
    <script src="js/preloader.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/comming-soon.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.parallax-scroll.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/wow.min.js"></script>
    <!-- contact js -->
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/custom.js"></script>



</body></html>