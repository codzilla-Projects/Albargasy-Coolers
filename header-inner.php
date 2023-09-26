<?php 
    if ( empty(pll_current_language()) )
        $lang = '_'.pll_default_language(); 
    else
        $lang = '_'.pll_current_language();
?>
<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <title>

        <?php wp_title('|','true','right') ?>

        <?php bloginfo('name'); ?>

    </title>

    <!-- Stylesheets -->

    <?php wp_head(); ?>

    <link rel="shortcut icon" href="<?=get_option('coolers_favicon_img')?>" id="fav-shortcut" type="image/x-icon">

    <link rel="icon" href="<?=get_option('coolers_favicon_img')?>" id="fav-icon" type="image/x-icon">

    <!-- Responsive Settings -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>

        <!-- Start Preloader Area -->
        <div class="loader-wrapper">
            <div class="ring">
                <img class="preload-img" alt="albargasy-logo" src="assets/img/logo-dark.png">
                <span></span>
            </div>
        </div>
        <!-- End Preloader Area  -->

        <!-- Start Navbar Area -->
        <div class="navbar-area about-menu">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/img/logo-dark.png" class="black-logo" alt="image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-navbar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/img/logo-dark.png" class="black-logo" alt="image">
                            <img src="assets/img/logo.png" class="white-logo" alt="image">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="index.html" class="nav-link">
                                        Home
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="about.html" class="nav-link active">
                                        About Us
                                        <i class='bx bxs-down-arrow'></i>
                                    </a>

                                    <ul class="dropdown-menu">

                                        <li class="nav-item">
                                            <a href="management.html" class="nav-link">Management</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="technical-support.html" class="nav-link">Techincal Support</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="services.html" class="nav-link">
                                        Services
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="products.html" class="nav-link">
                                        Products
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Media Center
                                        <i class='bx bxs-down-arrow'></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Media Center</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Media Center 2</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="others-option-for-responsive">
                        <div class="container">
                            <div class="dot-menu">
                                <div class="inner">
                                    <div class="circle circle-one"></div>
                                    <div class="circle circle-two"></div>
                                    <div class="circle circle-three"></div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="sl-nav">
                                    <ul>
                                      <li>EN <i class='bx bxs-down-arrow'></i>
                                        <div class="triangle"></div>
                                        <ul>
                                          <li><i class="sl-flag"><div id="usa"></div></i> <span class="active">EN</span></li>
                                          <li><i class="sl-flag"><div id="ar"></div></i> <span>AR</span></li>
                                        </ul>
                                      </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Navbar Area -->