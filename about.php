<!DOCTYPE html><html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/slick-theme.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/style_1.css" rel="stylesheet">
    <link href="css/themify-icons.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="css/style_2.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <title>IsetBooks</title>
</head>

<body data-scroll-animation="true">
<div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src="images/favicon.png" alt="Image">
                    <h4><span>IsetBooks</span></h4>
                </div>
            </div>
            <h2 class="head">Did You Know?</h2>
            <p></p>
        </div>
    </div>
    <div class="body_wrapper">

        <div class="toast-container position-fixed p-3">
            <div id="cartToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Cart Update</strong>
                    <small>just now</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Item added to the cart!
                </div>
            </div>
        </div>
        <header class="header_area header_relative header_blue">
            <nav class="navbar navbar-expand-lg menu_one menu_white" id="header">
                <div class="container">
                    <a class="navbar-brand sticky_logo" href="index.html">
                        <img src="images/logo-white.svg" alt="logo">
                        <img src="images/logo-dark.svg" alt="logo">
                    </a>
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
                            <li class="nav-item dropdown  active">
                                <a class="nav-link" href="home.php" role="button" >
                                    HOME
                                </a>
                               
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link" href="shop.php" role="button" >
                                    Shop
                                </a>

                            </li>
                           
                            <li class="nav-item dropdown submenu mega_menu tab-demo">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Explore
                                </a>
                                <ul class="dropdown-menu sub">
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-5 tabHeader">
                                                <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                    <li class="nav-item active">
                                                        <a class="nav-link" id="v-pills-tour-tab" data-toggle="pill" href="#v-pills-tour" role="tab" aria-controls="v-pills-tour" aria-selected="false">Utility Pages</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="v-others-menu-tab" data-toggle="pill" href="#v-others-menu" role="tab" aria-controls="v-others-menu" aria-selected="false">Company</a>
                                                    </li>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="tab-content tabContent" id="v-pills-tabContent">
                                                    <div class="tab-pane fade active show" id="v-pills-tour" role="tabpanel" aria-labelledby="v-pills-tour-tab">
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
                                                    <div class="tab-pane fade" id="v-others-menu" role="tabpanel" aria-labelledby="v-others-menu-tab">
                                                        <div class="d-flex">
                                                            <ul class="list-unstyled tab_list w_100">
                                                             
                                                                <li>
                                                                    <a href="about.php">About</a>
                                                                </li>
                                                                <li>
                                                                    <a href="contact.php">Contact Us</a>
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
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <div class="alter_nav">
                            <ul class="navbar-nav search_cart menu">
                                <li class="nav-item search">
                                    <a class="nav-link search-btn" href="javascript:void(0);"><i class="icon-search"></i></a>
                                    <form action="#" method="get" class="menu-search-form">
                                        <div class="input-group">
                                            <input type="search" class="form-control" placeholder="Search here..">
                                            <button type="submit">
                                                <i class="ti-arrow-right"></i>
                                            </button>
                                        </div>
                                    </form>
                                </li>
                                <li class="nav-item user ms-3">
                                    <a class="nav-link" href="my-account.html"><i class="icon-user"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <!-- breadcrumb area  -->
        <section class="bj_breadcrumb_area text-center banner_animation_03" data-bg-color="#f5f5f5">
            <div class="bg_one" data-bg-image="assets/img/breadcrumb/breadcrumb_banner_bg.png"></div>
            <div class="bd_shape one wow fadeInDown layer" data-wow-delay="0.3s" data-depth="0.5"><img data-parallax="{" y":="" -50}"="" src="images/book_left1.png" alt="">
            </div>
            <div class="bd_shape two wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img data-parallax="{" y":="" 30}"="" src="images/book-left2.png" alt="">
            </div>
            <div class="bd_shape three wow fadeInDown layer" data-wow-delay="0.3s" data-depth="0.5"><img data-parallax="{" y":="" -50}"="" src="images/plane-1.png" alt="">
            </div>
            <div class="bd_shape four wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img data-parallax="{" y":="" 30}"="" src="images/plan-3.png" alt="">
            </div>
            <div class="bd_shape five wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img data-parallax="{" y":="" 80}"="" src="images/plan-2.png" alt="">
            </div>
            <div class="bd_shape six wow fadeInDown layer" data-wow-delay="0.3s" data-depth="0.5"><img data-parallax="{" y":="" -60}"="" src="images/book-right.png" alt="">
            </div>
            <div class="bd_shape seven wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img data-parallax="{" x":="" 50}"="" src="images/book-right2.png" alt="">
            </div>
            <div class="container">
                <h2 class="title wow fadeInUp" data-wow-delay="0.2s">About Us</h2>
                <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">About</li>
                </ol>
            </div>
        </section>
        <!-- breadcrumb area  -->
        <!-- mission area  -->
        <section class="bj_mission_area sec_padding" data-bg-color="#f5f5f5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="bj_video_inner wow fadeInLeft" data-wow-delay="0.2s">
                            <img class="img-fluid" src="images/about_img.png" alt="">
                           
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bj_mission_content pe-5 wow fadeInRight" data-wow-delay="0.3s">
                            <h2 class="title">Our Mission</h2>
                            <p>Our mission is to bring the passion and love for reading books back. whether it's a
                                regular paper book, or an online edition, we want our readers to know that we appreciate
                                quality and artful storytelling. </p>
                            <p>Join our community and enjoy multiple genres, modern and classic authors, reviews,
                                critics and more!</p>
                        </div>
                    </div>
                </div>
                <div class="row features_box" style="justify-content: center;">
                    <div class="col-lg-8 col-md-6">
                        <div class="bj_features_item text-center wow fadeInUp" data-wow-delay="0.2s">
                            <i class="icon-gift icon"></i>
                            <h3>Make the Best Present</h3>
                            <p>A book is still one of the best presents
                                for anyone on any occasion.</p>
                           
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </section>
        <!-- mission area  -->
        <!-- bj author area  -->
        

        <!-- bj author area  -->
        <!-- bj testimonial three area  -->
        
        <!-- bj testimonial three area  -->
        <!-- footer area -->
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
    <script src="js/custom.js"></script>

    </body></html>