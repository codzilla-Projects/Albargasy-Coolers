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
            <img class="preload-img" alt="<?php bloginfo('name');?>" src="<?=get_option('coolers_pages_logo_img');?>">
            <span></span>
        </div>
    </div>
    <!-- End Preloader Area  -->

    <!-- Start Navbar Area -->
    <div class="navbar-area <?php if (!is_home()): ?>
        about-menu
    <?php endif ?>">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="<?php bloginfo('url');?>">
                        <?php if (is_home()) : ?>
                            <img src="<?=get_option('coolers_header_logo_img');?>" class="black-logo" alt="<?php bloginfo('name') ?>">
                        <?php else: ?>
                            <img src="<?=get_option('coolers_pages_logo_img');?>" class="black-logo" alt="<?php bloginfo('name') ?>">
                        <?php endif ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-navbar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="<?php bloginfo('url');?>">
                        <?php if (is_home()) : ?>
                            <img src="<?=get_option('coolers_header_logo_img');?>" class="black-logo" alt="<?php bloginfo('name') ?>">
                        <?php else: ?>
                            <img src="<?=get_option('coolers_pages_logo_img');?>" class="black-logo" alt="<?php bloginfo('name') ?>">
                        <?php endif ?>
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <?php if ( ICL_LANGUAGE_CODE=='en' ) :?>
                            <?php if (is_home()): ?>
                               <?php coolers_menu_en(); ?>
                            <?php else: ?> 
                                <?php coolers_menu_not_home_en(); ?>
                            <?php endif ?>
                        <?php else: ?>
                            <?php if (is_home()): ?>
                               <?php coolers_menu_ar(); ?>
                            <?php else: ?> 
                                <?php coolers_menu_not_home_ar(); ?>
                            <?php endif ?>
                        <?php endif; ?> 
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
                        <?php $langs_array_hidden =  pll_the_languages( array( 'dropdown' => 2, 'hide_current' => 0, 'raw' => 2 ) );?>
                        <div class="container">
                            <div class="sl-nav">
                                <ul>
                                  <li> 
                                    <?php if ( ICL_LANGUAGE_CODE=='ar' ): ?>
                                       AR
                                    <?php else: ?>
                                       EN
                                    <?php endif ?> 
                                    <i class='bx bxs-down-arrow'></i>
                                    <div class="triangle"></div>
                                    <ul>
                                        <?php foreach ($langs_array_hidden as $lang) : ?>
                                            <?php $my_locale = pll_current_language(); ?>
                                        <li>
                                            <a href="<?php echo $lang['url'];?>">
                                                <i class="sl-flag">
                                                    <div id="usa"></div>
                                                </i> 
                                                <span class="<?php if ($lang['slug'] == $my_locale) {echo"active";} ?>">
                                                    <?php echo $lang['slug'];?>
                                                </span>
                                            </a>
                                        </li>
                                      <?php endforeach; ?>
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

