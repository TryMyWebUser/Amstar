<?php

    include "libs/load.php";
    $conn = Database::getConnect();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AMSTAR PUMPS</title>
    <!-- Stylesheets -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Responsive File -->
    <link href="assets/css/responsive.css" rel="stylesheet">
    <!-- Color File -->
    <link href="assets/css/color-5.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700;800&amp;family=Mukta:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href="assets/images/favicon-five.png" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon-five.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<style>
.whatsapp_float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 40px;
    left: 40px;
    background-color: #25d366;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 30px;
    box-shadow: 2px 2px 3px #999;
    z-index: 100;
}

.whatsapp-icon {
    margin-top: 16px;
}


@media screen and (max-width: 767px) {
    .whatsapp-icon {
        margin-top: 10px;
    }

    .whatsapp_float {
        width: 40px;
        height: 40px;
        bottom: 20px;
        right: 10px;
        font-size: 22px;
    }
}
</style>

<body class="theme-color-five">

    <div class="page-wrapper">

        <!-- Main Header style five-->
        <header class="main-header header-style-five">

            <!-- Header Top -->
            <div class="header-top">
                <div class="auto-container">
                    <div class="inner-container">
                        <div class="right-column">
                            <div class="social-wraper">
                                <span>Get Social With Us!</span>
                                <ul class="social-links">
                                    <li><a href="https://www.facebook.com/" target="_blank"><i
                                                class="fab fa-facebook"></i></a></li>
                                    <li><a href="https://www.instagram.com/" target="_blank"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://www.youtube.com/" target="_blank"><i
                                                class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container">
                        <!--Logo-->
                        <div class="logo-box">
                            <div class="logo"><a href="index.php"><img src="assets/images/logo-v5.png" alt=""></a>
                            </div>
                        </div>
                        <div class="right-column">
                            <div class="contact-info">
                                <div class="single-contact-info">
                                    <div class="icon"><span class="flaticon-geolocation"></span></div>
                                    <h4>Office</h4>
                                    <div class="text">Door No.214, Lenin Street,<br>
                                        Vilankurichi, Coimbatore,<br>
                                        Tamil Nadu - 641035</div>
                                </div>
                                <div class="single-contact-info">
                                    <div class="icon py-2"><span class="flaticon-call"></span></div>
                                    <h4>Phone</h4>
                                    <div class="text">
                                        <p>India : +91 9496144771<br>
                                        Soudhi : 00966501784948 <br> Service number : 7418082985 </p>
                                    </div>
                                </div>
                                <div class="single-contact-info">
                                    <div class="icon"><span class="flaticon-correspondence"></span></div>
                                    <h4>Email</h4>
                                    <div class="text">
                                        <p>salesamstarpumps@gmail.com<br>
                                            serviceamstarpumps@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!-- Header Lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="wrapper-box">
                        <!--Nav Box-->
                        <div class="nav-outer">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar-4.png" alt=""></div>

                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php">About Us</a></li>
                                        <li class="dropdown"><a href="#">Products</a>
                                            <ul>
                                                <?php
                                                    $category = Operations::getCateChecker($conn);
                                                    foreach ($category as $cate) {
                                                ?>
                                                <li><a href="pump.php?data=<?= $cate['category']; ?>"><?= $cate['category']; ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </li>
                                        <li><a href="product.php"></a></li>
                                        <!-- <li><a href="infs.php">Infrastructure</a></li> -->
                                        <li><a href="certificate.php">Certificates</a></li>
                                        <li><a href="contact.php">Contact Us</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="navbar-right-info">
                            <div class="side-menu-nav sidemenu-nav-toggler"><img
                                    src="assets/images/icons/icon-bar-4.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="header-lower">
                    <div class="auto-container">
                        <div class="wrapper-box">
                            <!--Nav Box-->
                            <div class="nav-outer">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar-4.png" alt="">
                                </div>

                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-md navbar-light">
                                </nav>
                            </div>
                            <div class="navbar-right-info">
                                <div class="side-menu-nav sidemenu-nav-toggler"><img
                                        src="assets/images/icons/icon-bar-4.png" alt=""></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Sticky Menu -->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-remove"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.php"><img src="assets/images/logo-v5-2.png" alt=""
                                title=""></a></div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                    <!--Social Links-->
                    <div class="social-links">
                        <ul class="clearfix">
                            <li><a href="https://www.facebook.com/" target="_blank"><span
                                        class="fab fa-facebook"></span></a></li>
                            <li><a href="https://www.instagram.com/" target="_blank"><span
                                        class="fab fa-instagram"></span></a></li>
                            <li><a href="https://www.youtube.com/" target="_blank"><span
                                        class="fab fa-youtube"></span></a></li>
                        </ul>
                    </div>
                </nav>
            </div><!-- End Mobile Menu -->

            <div class="nav-overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div>
        </header>
        <!-- End Main Header -->

        <!-- Hidden Sidebar -->
        <section class="hidden-sidebar close-sidebar style-two">
            <div class="wrapper-box">
                <div class="content-wrapper">
                    <div class="hidden-sidebar-close"><span class="flaticon-close"></span></div>
                    <div class="text-widget sidebar-widget">
                        <div class="logo"><a href="index.php"><img src="assets/images/logo-v5.png" alt=""></a></div>
                        <div class="text">Welcome to AMSTAR PUMPS, your trusted partner in the pump industry since 2023.
                        </div>
                    </div>
                </div>
            </div>
        </section>