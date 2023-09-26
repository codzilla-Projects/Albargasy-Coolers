<?php

function coolers_admin_scripts_styles($hook) {
    $lang = ICL_LANGUAGE_CODE;
    $perfix = $lang === 'ar' ? '.rtl' : '';
    wp_enqueue_style( 'coolers-admin-main', coolers_URL . 'assets/admin/css/main-style.css');

    //var_dump($hook);

    $coolers_pages = ['toplevel_page_content-area',
        'coolers-options_page_home-page-content',
        'coolers-options_page_about-page-content',
        'coolers-options_page_management-page-content',
        'coolers-options_page_technical-page-content',
        'coolers-options_page_services-page-content',
        'coolers-options_page_products-page-content',
        'coolers-options_page_media-center-page-content',
        'coolers-options_page_events-page-content',
        'coolers-options_page_contact-page-content',
        'post-new.php','post.php','edit-tags.php','term.php'
    ];

    if( in_array($hook, $coolers_pages) ) {
        wp_enqueue_style('coolers-admin-bootsrtap-css',coolers_URL.'assets/admin/css/bootstrap'.$perfix.'.min.css');
        wp_enqueue_style('coolers-admin-jquery-ui-css',coolers_URL.'assets/admin/css/jquery-ui.css');
        wp_enqueue_style('coolers-admin-choose_cat-css',coolers_URL.'assets/admin/css/choose-cat.css');
        wp_enqueue_style('coolers-admin-style-css',coolers_URL. 'assets/admin/css/style.css');
        wp_enqueue_script('coolers-admin-jquery-js',coolers_URL.'assets/js/jquery.js', array() ,false, true );
        wp_enqueue_script('coolers-admin-popper-js',coolers_URL.'assets/admin/js/popper.min.js', array() ,false, true );
        wp_enqueue_script( 'coolers-admin-bootsrtap-js', coolers_URL.'assets/admin/js/bootstrap.bundle.min.js', array() ,false, true );
        wp_enqueue_script('coolers-choose_cat-js',coolers_URL.'assets/admin/js/choose_cat.js', array() ,false, true ); 
        wp_enqueue_script('coolers-admin-script-js',coolers_URL.'assets/admin/js/script.js', array() ,false, true );
        if(function_exists( 'wp_enqueue_media' )){
            wp_enqueue_media();
        }else{
            wp_enqueue_style('thickbox');
            wp_enqueue_script('media-upload');
            wp_enqueue_script('thickbox');
        }
    }

        $mainColor     = get_option('coolers_mainColor');
        if (empty($mainColor)) {
            $mainColor = '#000';
        }
        $whiteColor   = get_option('coolers_whiteColor');
        if (empty($whiteColor)) {
            $whiteColor = '#222';
        }
        $blackColor       = get_option('coolers_blackColor');
        if (empty($blackColor)) {
            $blackColor = '#ccc';
        }

        $paragraphColor       = get_option('coolers_paragraphColor ');
        if (empty($paragraphColor)) {
            $paragraphColor = '#ccc';
        }

        $googleFontUrl    = get_option('coolers_font_url');
        $googleFontName   = get_option('coolers_font_name');
        $custom_css = 
            "
                @import url('{$googleFontUrl}');
                :root {
                   --mainColor          : {$mainColor};
                   --whiteColor         : {$whiteColor};
                   --blackColor         : {$blackColor};
                   --paragraphColor     : {$paragraphColor};
                   --coolers-font       :'{$googleFontName}',sans-serif;
                }
            ";
        wp_add_inline_style('coolers-style-css', $custom_css);
        wp_add_inline_style('coolers-admin-main', $custom_css);
}

add_action('admin_enqueue_scripts', 'coolers_admin_scripts_styles');

function coolers_scripts_styles() {

    wp_enqueue_style( 'coolers-bootstrap-css', coolers_URL . 'assets/css/bootstrap.min.css');
    wp_enqueue_style( 'coolers-animate-css', coolers_URL . 'assets/css/animate.min.css');
    wp_enqueue_style( 'coolers-boxicons-css', coolers_URL . 'assets/css/boxicons.min.css');
    wp_enqueue_style( 'coolers-owl-carousel-css', coolers_URL . 'assets/css/owl.carousel.min.css');
    wp_enqueue_style( 'coolers-owl-theme-css', coolers_URL . 'assets/css/owl.theme.default.min.css');
    wp_enqueue_style( 'coolers-meanmenu-css', coolers_URL . 'assets/css/meanmenu.css');
    wp_enqueue_style( 'coolers-navbar-css', coolers_URL . 'assets/css/navbar.css');
    wp_enqueue_style( 'coolers-footer-css', coolers_URL . 'assets/css/footer.css');
    if ( is_single() && 'product' == get_post_type() ) {
    wp_enqueue_style( 'coolers-swiper-css', coolers_URL . 'assets/css/swiper-bundle.min.css');
    }
    wp_enqueue_style( 'coolers-fancybox-css', coolers_URL . 'assets/css/jquery.fancybox.min.css');
    wp_enqueue_style( 'coolers-main-style-css', coolers_URL . 'assets/css/style.css');
    wp_enqueue_style( 'coolers-responsive-css', coolers_URL . 'assets/css/responsive.css');
    if ( is_rtl() ) {
    wp_enqueue_style( 'coolers-main-rtl-style-css', coolers_URL . 'assets/css/rtl.css');
    }
    
    if (wp_is_mobile(  )):
        if ( is_rtl() ) { 
            wp_enqueue_style( 'coolers-responsive-css', coolers_URL . 'assets/css/responsive.css');
            wp_enqueue_style( 'coolers-responsive-rtl-css', coolers_URL . 'assets/css/responsive-rtl.css');
        }else{
            wp_enqueue_style( 'coolers-responsive-css', coolers_URL . 'assets/css/responsive.css');
        }
    endif;



    wp_enqueue_script( 'coolers-jquery-js', coolers_URL .'assets/js/jquery.min.js', array() ,false, true );
    wp_enqueue_script( 'coolers-bootstrap-js', coolers_URL .'assets/js/bootstrap.bundle.min.js', array() ,false, true );
    wp_enqueue_script( 'coolers-appear-js', coolers_URL .'assets/js/appear.min.js', array() ,false, true );
    wp_enqueue_script( 'coolers-owl-carousel-js', coolers_URL .'assets/js/owl.carousel.min.js', array() ,false, true );
    wp_enqueue_script( 'coolers-wow-js', coolers_URL .'assets/js/wow.min.js"', array() ,false, true );
    if ( is_single() && 'product' == get_post_type() ) {
    wp_enqueue_script( 'coolers-swiper-js', coolers_URL .'assets/js/swiper-bundle.min.js"', array() ,false, true );
    }
    wp_enqueue_script( 'coolers-fancybox-js', coolers_URL .'assets/js/jquery.fancybox.min.js"', array() ,false, true );
    wp_enqueue_script( 'coolers-jquery-meanmenu-js', coolers_URL .'assets/js/jquery.meanmenu.js', array() ,false, true );
    wp_enqueue_script( 'coolers-script-js', coolers_URL .'assets/js/script.js', array() ,false, true );


        $mainColor            = get_option('coolers_mainColor');

        $whiteColor           = get_option('coolers_whiteColor');

        $blackColor           = get_option('coolers_blackColor');

        $paragraphColor       = get_option('coolers_paragraphColor');

        $googleFontUrl        = get_option('coolers_font_url');

        $googleFontName       = get_option('coolers_font_name');

        $custom_css = 

            "

                @import url('{$googleFontUrl}');

                :root {

                   --mainColor          : {$mainColor};

                   --whiteColor         : {$whiteColor};

                   --blackColor         : {$blackColor};

                   --paragraphColor     : {$paragraphColor};

                   --coolers-font       :'{$googleFontName}',sans-serif;

                }

            ";

    wp_add_inline_style('coolers-main-style-css', $custom_css);



}

add_action( 'wp_enqueue_scripts', 'coolers_scripts_styles' );



