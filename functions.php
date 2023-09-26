<?php  
define('coolers_ROOT', get_stylesheet_directory().'/');
define('coolers_URL', get_stylesheet_directory_uri() .'/');
define('coolers_ADMIN', admin_url());
define('coolers_BlogUrl', get_bloginfo('url'));

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1568, 9999 );

require_once( coolers_ROOT . '/lib/coolers_enqueue_scripts.php' );
require_once( coolers_ROOT . '/lib/coolers_theme_init.php' );
require_once( coolers_ROOT . '/lib/coolers_functions.php');
require_once( coolers_ROOT . '/lib/coolers_meta_fields.php');
require_once( coolers_ROOT . '/lib/coolers_mail_functions.php');
require_once( coolers_ROOT . '/lib/coolers_taxonomy_terms.php');
require_once( coolers_ROOT . '/lib/wp_bootstrap_navwalker.php');

register_nav_menus();

function coolers_menu_en() {
wp_nav_menu( array(
    'menu'              => 'Main Menu',
    'container'         => '',
    'theme_location'    => 'main-menu',
    'menu_class'        => 'navbar-nav ms-auto',
    'depth'             => 3,
    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
    'walker'            => new wp_bootstrap_navwalker()
  )
 );
}

function coolers_menu_ar() {
wp_nav_menu( array(
    'menu'              => 'Main Menu Arabic',
    'container'         => '',
    'theme_location'    => 'main-menu',
    'menu_class'        => 'navbar-nav ms-auto',
    'depth'             => 3,
    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
    'walker'            => new wp_bootstrap_navwalker()
  )
 );
}
function coolers_menu_not_home_en() {
wp_nav_menu( array(
    'menu'              => 'Main Menu',
    'container'         => '',
    'theme_location'    => 'main-menu',
    'menu_class'        => 'navbar-nav',
    'depth'             => 3,
    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
    'walker'            => new wp_bootstrap_navwalker()
  )
 );
}

function coolers_menu_not_home_ar() {
wp_nav_menu( array(
    'menu'              => 'Main Menu Arabic',
    'container'         => '',
    'theme_location'    => 'main-menu',
    'menu_class'        => 'navbar-nav',
    'depth'             => 3,
    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
    'walker'            => new wp_bootstrap_navwalker()
  )
 );
}

function coolers_load_theme_textdomain() {
    load_theme_textdomain( 'coolers', get_template_directory() . '/language' );
}
/*Remove Title TO Anchor Tag Menu*/
function my_menu_notitle( $menu ){
  	return $menu = preg_replace('/ title=\"(.*?)\"/', '', $menu );
}
add_filter( 'wp_nav_menu', 'my_menu_notitle' );
add_filter( 'wp_page_menu', 'my_menu_notitle' );
add_filter( 'wp_list_categories', 'my_menu_notitle' );

/*Add Footer Widget*/
function coolers_widgets_init() {
register_sidebar( array(
    'name'          => 'First Sidebar Column',
    'id'            => 'first_sidebar',
    'before_widget' => '',
    'after_widget'  => '',
  ));
}
add_action( 'widgets_init', 'coolers_widgets_init' );

function coolers_second_widgets_init() {
register_sidebar( array(
    'name'          => 'Second Sidebar Column',
    'id'            => 'second_sidebar',
    'before_widget' => '',
    'after_widget'  => '',
  ));
}
add_action( 'widgets_init', 'coolers_second_widgets_init' );

function change_footer_admin() {
  echo '<span id="footer-thankyou">Powered by <a href="https://codzilla.net/" target="_blank">Codezilla</a></span>';
}
add_filter('admin_footer_text', 'change_footer_admin');
