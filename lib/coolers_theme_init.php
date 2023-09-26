<?php 
add_action( 'init', 'coolers_custom_post_types' );
function coolers_custom_post_types() {

$cpts = [

    array(
        'single'        => 'services',
        'plural'        => 'services',
        'cptname'       => 'service',
        'icon'          => 'dashicons-admin-multisite',
        'supports'      => ["title","editor","thumbnail","excerpt"],
        'show_in_menu'  => true,
        'position'      => 5
        ),

    array(
        'single'        => 'products',
        'plural'        => 'products',
        'cptname'       => 'product',
        'icon'          => 'dashicons-products',
        'supports'      => ["title","editor","thumbnail"],
        'show_in_menu'  => true,
        'position'      => 6
        ),

    array(
        'single'        => 'Directors',
        'plural'        => 'Directors',
        'cptname'       => 'director',
        'icon'          => 'dashicons-businessman',
        'supports'      => ["title","editor","thumbnail"],
        'show_in_menu'  => true,
        'position'      => 7
        ),

    array(
        'single'        => 'Partners',
        'plural'        => 'Partners',
        'cptname'       => 'partner',
        'icon'          => 'dashicons-admin-multisite',
        'supports'      => ["title","thumbnail"],
        'show_in_menu'  => true,
        'position'      => 8
        ),
    array(
        'single'        => 'Photos',
        'plural'        => 'Photos',
        'cptname'       => 'photo',
        'icon'          => 'dashicons-images-alt2',
        'supports'      => ["title","thumbnail"],
        'show_in_menu'  => true,
        'position'      => 9
        ),
    array(
        'single'        => 'Events',
        'plural'        => 'Events',
        'cptname'       => 'event',
        'icon'          => 'dashicons-calendar-alt',
        'supports'      => ["title","editor","thumbnail","excerpt"],
        'show_in_menu'  => true,
        'position'      => 10
        ),

 ];

 foreach ($cpts as $cpt) {

     $labels = array(
        'name'                  => _x( $cpt['single'], 'Post Type General Name', 'coolers' ),
        'singular_name'         => _x( $cpt['single'], 'Post Type Singular Name', 'coolers' ),
        'menu_name'             => __( $cpt['plural'], 'coolers' ),
        'all_items'             => __( 'All '.$cpt['plural'], 'coolers' ),
        'add_new_item'          => __( 'Add New '.$cpt['single'] , 'coolers' ),
        'add_new'               => __( 'Add New', 'coolers' ),
        'new_item'              => __( 'New '.$cpt['single'], 'coolers' ),
        'edit_item'             => __( 'Edit '.$cpt['single'], 'coolers' ),
        'update_item'           => __( 'Update '.$cpt['single'], 'coolers' ),
        'view_item'             => __( 'View '.$cpt['single'], 'coolers' ),
        'search_items'          => __( 'Search '.$cpt['plural'], 'coolers' ),
        'not_found'             => __( 'Not found', 'coolers' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'coolers' ),
        'featured_image'        => __( 'Featured Image', 'coolers' ),
        'set_featured_image'    => __( 'Set featured image', 'coolers' ),
        'remove_featured_image' => __( 'Remove featured image', 'coolers' ),
        'use_featured_image'    => __( 'Use as featured image', 'coolers' ),
      );

      $args = array(
        'label'                 => __( $cpt['plural'], 'coolers' ),
        'description'           => __( $cpt['plural'].' Description', 'coolers' ),
        'labels'                => $labels,
        'supports'              => $cpt['supports'],
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          =>$cpt['show_in_menu'],
        'menu_position'         => $cpt['position'],
        'menu_icon'             => $cpt['icon'],
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,    
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
      );
    // Register Custom Post Type>
    register_post_type( $cpt['cptname'], $args );
    }   
}

/* create my custom menu pages */
function coolers_register_custom_menu_pages() {
    add_menu_page(
        'website options',
        'coolers Options',
        'manage_options',
        'content-area',
        'main_content_area_callback',
        get_option('coolers_favicon'),
        2
    );   

    add_submenu_page(
        'content-area',
        'Home Page options',
        'Home Page Options',
        'manage_options',
        'home-page-content',
        'home_content_area_callback'
    ); 
    add_submenu_page(
        'content-area',
        'About Page options',
        'About Page Options',
        'manage_options',
        'about-page-content',
        'about_content_area_callback'
    ); 

    add_submenu_page(
        'content-area',
        'Management Page options',
        'Management Page Options',
        'manage_options',
        'management-page-content',
        'management_content_area_callback'
    ); 

    add_submenu_page(
        'content-area',
        'Technical Page options',
        'Technical Page Options',
        'manage_options',
        'technical-page-content',
        'technical_content_area_callback'
    ); 

    add_submenu_page(
        'content-area',
        'Services Page options',
        'Services Page Options',
        'manage_options',
        'services-page-content',
        'services_content_area_callback'
    ); 

    add_submenu_page(
        'content-area',
        'Products Page options',
        'Products Page Options',
        'manage_options',
        'products-page-content',
        'products_content_area_callback'
    ); 

    add_submenu_page(
        'content-area',
        'Contact Page options',
        'Contact Page Options',
        'manage_options',
        'contact-page-content',
        'contact_content_area_callback'
    );


}


add_action( 'admin_menu', 'coolers_register_custom_menu_pages' );
require_once ( coolers_ROOT . 'coolers_options/theme_options.php');
require_once ( coolers_ROOT . 'coolers_options/home_page_options.php');
require_once ( coolers_ROOT . 'coolers_options/about_page_options.php');
require_once ( coolers_ROOT . 'coolers_options/management_page_options.php');
require_once ( coolers_ROOT . 'coolers_options/technical_page_options.php');
require_once ( coolers_ROOT . 'coolers_options/services_page_options.php');
require_once ( coolers_ROOT . 'coolers_options/products_page_options.php');
require_once ( coolers_ROOT . 'coolers_options/contact_page_options.php');
add_filter( 'rwmb_meta_boxes', 'coolers_gallery' );
    function coolers_gallery( $meta_boxes ) {
        $meta_boxes[] = array(
            'title'      => __( 'Product Gallery', 'coolers' ),
            'context'    => 'normal',
            'priority'   => 'high',
            'post_types' => array('product'),
            'fields'     => array(
                array(
                    'name' => esc_html__( 'Upload Images'),
                    'id'   => "thumbnail_ids",
                    'type' => 'image_advanced',
                ),
            ),
        );

        return $meta_boxes;
    }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
function my_login_logo() { ?>
    <style type="text/css">
        body{
            background:#c5c5d8!important; 
        }
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_option('coolers_header_logo_img'); ?>);
            width: 100%;
            height: 100px;
            background-size: contain;
            margin: 0 auto;
        }

        .login form{
            background: rgba(3, 3, 4, .9)!important;
            border-radius: .5rem;
        }

        .login label{
            font-weight: 600!important;
            color: #fff!important;
        }

        .wp-core-ui p .button {
            background: rgba(3, 3, 4, .9)!important;
            border-color: rgba(3, 3, 4, .9)!important;
        }

        .wp-core-ui p .button:hover{
            background-color: #005b52 !important;
            border-color: #005b52 !important;
            color: #fff;
        }

        #reg_passmail{color:#fff;}
    </style>
<?php }

