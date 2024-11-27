<!DOCTYPE html><html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style_2.css" rel="stylesheet">
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/themify-icons.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style_1.css" rel="stylesheet">
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
                <h2 class="title">Privacy Policy</h2>

            </div>
        </section>
        <!-- breadcrumb area  -->

        <!-- author single area  -->
        <div class="sec_padding sql_description" style="background-color: #f5f5f5;">
            <div class="container">
                <div class="page-area">
                    <h1>Database Structure and Data Disclosure Policy</h1>
                    <p><strong>Last Revision Date:</strong> November 23, 2024</p>
                    <p>
                        This document outlines the database schema and data structure for the `library_management` system, including detailed descriptions of the tables and the types of data collected.
                    </p>
        
                    <h2 id="a-database-overview">A. Database Overview</h2>
                    <p>
                        The `library_management` database is designed to manage library resources efficiently. It supports core functionalities like book tracking, user management, and borrowing operations.
                    </p>
                    
                    <h2 id="b-data-structure">B. Data Structure</h2>
                    <p>Data is organized into the following primary tables:</p>
                    <ul>
                        <li><strong>`books`:</strong> Stores book details, inventory information, and metadata.</li>
                        <li><strong>`borrow_records`:</strong> Tracks borrowing and returning of books by users.</li>
                        <li><strong>`notifications`:</strong> Manages user notifications and their statuses.</li>
                        <li><strong>`users`:</strong> Contains user profiles, roles, and authentication data.</li>
                    </ul>
        
                    <h2 id="d-data-usage">C. Data Usage</h2>
                    <p>
                        The collected data serves the following purposes:
                    </p>
                    <ul>
                        <li>Managing library inventory and user interactions.</li>
                        <li>Facilitating borrowing operations and tracking overdue items.</li>
                        <li>Sending notifications for user engagement and updates.</li>
                        <li>Securing user accounts and enforcing role-based access controls.</li>
                    </ul>
        
                    <h2 id="e-privacy-notice">D. Privacy and Security</h2>
                    <p>
                        At Spider-Themes, we prioritize the security and privacy of your data. We implement robust security measures to protect your personal information against unauthorized access, alteration, or destruction.
                    </p>
        
                    <h2 id="f-data-retention">E. Data Retention</h2>
                    <p>
                        We retain personal data only for as long as necessary to fulfill the purposes outlined in this policy, or as required by law. Once data is no longer needed, it will be securely deleted or anonymized.
                    </p>
        
                    <h2 id="g-rights-and-access">F. User Rights and Data Access</h2>
                    <p>
                        You have the right to access, update, or delete your personal data at any time. If you wish to exercise these rights, or if you have any concerns about your data, please contact us at
                        <a href="mailto:contact@spider-themes.net">contact@spider-themes.net</a>.
                    </p>
        
                    <h2 id="h-data-sharing">G. Data Sharing and Third Parties</h2>
                    <p>
                        We do not share your personal data with third parties unless required by law or for the provision of services directly related to the functionality of the library management system (such as email services).
                    </p>
        
                    <h2 id="i-legal-compliance">H. Legal Compliance</h2>
                    <p>
                        Our database structure and data handling practices comply with relevant laws and regulations, including the General Data Protection Regulation (GDPR) and applicable local privacy laws.
                    </p>
        
                    <h2 id="j-contact-us">I. Contact Information</h2>
                    <p>
                        If you have any questions or concerns about this privacy policy or how your data is managed, please contact us at
                        <a href="mailto:contact@spider-themes.net">contact@spider-themes.net</a>.
                    </p>
                </div>
            </div>
        </div>
</div>          
        
        <!-- author single area  -->

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

    <script src="js/preloader.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/comming-soon.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/jquery.parallax-scroll.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/custom.js"></script>
</body></html>