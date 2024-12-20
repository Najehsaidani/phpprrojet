<?php
include 'cible.php';
 // Fetch genres and their book counts
 $genresQuery = "SELECT genre, COUNT(*) as book_count FROM books GROUP BY genre";
 $genresStmt = $pdo->query($genresQuery);
 $genres = $genresStmt->fetchAll(PDO::FETCH_ASSOC);
 

 // Fetch books grouped by genre
 $booksQuery = "SELECT * FROM books WHERE genre = :genre";
 $communityQuery = "SELECT profile_image FROM users LIMIT 4";
 $countQuery = "SELECT COUNT(*) as reader_count FROM users";

 $avatarsStmt = $pdo->query($communityQuery);
 $avatars = $avatarsStmt->fetchAll(PDO::FETCH_ASSOC);

 $countStmt = $pdo->query($countQuery);
 $readerCount = $countStmt->fetch(PDO::FETCH_ASSOC)['reader_count'];

 

 $bookQuery = "SELECT 
 title, 
 author, 
 genre, 
 cover_image, 
 created_at 
FROM books
ORDER BY created_at DESC
LIMIT 6";
$stmt = $pdo->query($bookQuery);
$books1 = $stmt->fetchAll(PDO::FETCH_ASSOC);
// var_dump($books1);


// $title="ISET-Bizerte Library";
// $style_1="css/style_1.css";
// $style_2="styles/style_2.css";
// $page="home.phtml";
// include 'layouthome.phtml';

?>
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
    <link href="css/themify-icons.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/swiper.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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
        <div class="click_capture"></div>
        <header class="header_area header_relative header_blue">
            <nav class="navbar navbar-expand-lg menu_one menu_white" id="header">
                <div class="container">
                    <a class="navbar-brand sticky_logo" href="home.php">
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
                                <a class="nav-link" href="index.php" role="button" >
                                    HOME
                                </a>
                               
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link" href="registreuser.php" role="button" >
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
        <!-- banner area  -->
        <section class="bj_banner_area banner_animation_03" data-bg-color="#f5f5f5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="bj_banner_content">
                            
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s">
                                Meet your next favorite book
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">
                                Unleash your imagination with epic fantasy sagas, mystical
                                adventures, and tales of otherworldly realms. Embark on quests
                                with heroes.
                            </p>
                            <div class="d-flex">
                                <a href="shop.html" class="bj_theme_btn wow fadeInLeft" data-wow-delay="0.2s">SHOP
                                    NOW</a>
                                <a href="#product_tab_showcase_id" class="bj_theme_btn strock_btn wow fadeInLeft" data-wow-delay="0.3s">TAKE A
                                    TOUR</a>
                            </div>
                            <div class="d-flex community_info_wrapper wow fadeInUp" data-wow-delay="0.4s">
                                <div class="community_info">
                                    <h5>Our Community</h5>
                                    <div class="people_img">
                                        <?php foreach ($avatars as $avatar): ?>
                                            <div class="avater_img">
                                                <img src="<?= $avatar['profile_image'] ?>" alt="<?= $avatar['nom'] ?>">
                                            </div>
                                        <?php endforeach; ?>
                                        <div class="avater_img">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="community_info_number">
                                    <div class="number"><span class="counter"><?= number_format($readerCount) ?></span>+</div>
                                    <p>Book Readers worldwide</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bj_banner_img">
                            <img class="wow fadeInRight" data-wow-delay="0.4s" src="images/girl.png" alt="">
                            <div class="shape_one">
                                <img class="layer" data-depth="-0.15" src="images/star-one.png" alt="">
                            </div>
                            <div class="shape_two">
                                <img class="layer" data-depth="-0.25" src="images/star-two.png" alt="">
                            </div>
                            <div class="shape_three">
                                <img class="layer" data-depth="-0.15" src="images/round.png" alt="">
                            </div>
                            <div class="shape_four">
                                <img src="images/dot.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner area  -->

        <!-- product tab showcase area  -->
        <section class="product_tab_showcase_area sec_padding" id="product_tab_showcase_id">
    <div class="container">
        <div class="section_title wow fadeInUp">
            <h2 class="title title_two">Browse By Genres</h2>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-lg-4">
                <ul class="nav nav-pills tab_slider_thumb" id="pills-tab-one" role="tablist">
                    <?php foreach ($genres as $index => $genre): ?>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link <?= $index === 0 ? 'active' : '' ?>" 
                               id="pills-<?= strtolower($genre['genre']) ?>-tab" 
                               data-bs-toggle="pill" 
                               data-bs-target="#pills-<?= strtolower($genre['genre']) ?>" 
                               role="tab" 
                               aria-controls="pills-<?= strtolower($genre['genre']) ?>" 
                               aria-selected="<?= $index === 0 ? 'true' : 'false' ?>">
                                <strong><?= $genre['genre'] ?></strong>
                                <span>(<?= $genre['book_count'] ?> Books)</span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-lg-8">
                <div class="tab-content" id="pills-tabContent-two">
                    <?php foreach ($genres as $index => $genre): ?>
                        <div class="tab-pane fade <?= $index === 0 ? 'show active' : '' ?>" 
                             id="pills-<?= strtolower($genre['genre']) ?>" 
                             role="tabpanel" 
                             aria-labelledby="pills-<?= strtolower($genre['genre']) ?>-tab">
                            <div class="tab_slider_content slick_slider_tab">
                                <?php
                                // Fetch books for the current genre
                                $stmt = $pdo->prepare($booksQuery);
                                $stmt->execute(['genre' => $genre['genre']]);
                                $books = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                foreach ($books as $book): ?>
                                    <div class="item">
                                        <div class="bj_new_pr_item">
                                            <a href="#" class="img">
                                                <img src="<?= $book['cover_image'] ?>" alt="<?= $book['title'] ?>">
                                            </a>
                                            <div class="bj_new_pr_content_two">
                                                <div class="d-flex justify-content-between">
                                                    <a href="#">
                                                        <h5><?= $book['title'] ?></h5>
                                                    </a>
                                                </div>
                                                <div class="writer_name">
                                                    <i class="icon-user"></i>
                                                    <a href="#">By
                                                        <?= $book['author'] ?>
                                                    </a>
                                                </div>
                                                <div class="writer_name">
                                                    <i class="icon-book"></i>
                                                    <a href="#">Avaible 
                                                        <?= $book['available_copies'] ?>
                                                    </a>
                                                </div>
                                                <div class="writer_name">
                                                <i class='bx bxs-wallet'></i>
                                                    <a href="#">Total
                                                        <?= $book['total_copies'] ?>
                                                    </a>
                                                </div>
                                                <a href="registreuser.php" class="bj_theme_btn">Borrow</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
        <!-- product tab showcase area  -->


        <!-- best selling product area  -->
        <section class="best_selling_pr_area sec_padding" data-bg-color="#f5f5f5">
            <div class="container">
                <div class="section_title section_title_two text-center wow fadeInUp" data-wow-delay="0.2s">
                    <h2 class="title title_two">New Arrivals</h2>
                    <p>Reading books helps you to develop your communication skill</p>
                </div>
                <div class="row">
                    <?php foreach ($books1 as $book): ?>
                        <div class="col-xl-4 col-md-6">
                            <div class="bj_new_pr_item_two d-flex wow fadeInUp" data-wow-delay="0.2s">
                                <a href="#" class="img"><img src="<?= $book['cover_image'] ?>" alt="book"></a>
                            
                                <div class="bj_new_pr_content_two">
                                    <a href="#" class="category"><?= $book['genre'] ?></a>
                                    <a href="product-single.html">
                                        <h4 class="bj_new_pr_title"><?= $book['title'] ?></h4>
                                    </a>
                                    <div class="writer_name">by <a href="author-single.html"><?= $book['author'] ?> </a></div>
                                
                                    <a href="registreuser.php" class="bj_theme_btn">Borrow Now</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
              
            </div>
        </section>
        <!-- bj subscribe area -->
         <!-- bj subscribe area -->
        <section class="bj_subscribe_area_two">
            <div class="container">
                <div class="bj_subscribe_inner_two text-center wow fadeInUp banner_animation_03" data-wow-delay="0.2s" data-bg-color="#f5f5f5">
                    <div class="bg_shap">
                        <div class="shap_one">
                            <img class="layer" data-depth="-0.15" src="images/round_s1.png" alt="">
                        </div>
                        <div class="shap_one">
                            <img class="layer" data-depth="-0.25" src="images/star_s_2.png" alt="">
                        </div>
                        <div class="shap_one">
                            <img class="layer" data-depth="0.15" src="images/star_s_1.png" alt="">
                        </div>
                        <div class="shap_one">
                            <img class="layer" data-depth="-0.25" src="images/cube.png" alt="">
                        </div>
                    </div>
                    <h2>Online Book Fairs 2024</h2>
                    <p>
                        Our authors are devoted to their writing and are eager to share
                        more information about their books with you. After that, you can
                        Explore anywhere.
                    </p>
                    <a href="registreuser.php" class="bj_theme_btn">REGISTRATION NOW</a>
                </div>
            </div>
        </section>

        <!-- footer area css  -->
        <footer class="bj_footer_area padding_top" data-bg-color="#001F58">
            <img class="footer_bg_img" src="images/footer_img.jpg" alt="">
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
                                <a href="home.php" class="f_logo">
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
        <!-- footer area css  -->
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
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/custom.js"></script>


</body></html>