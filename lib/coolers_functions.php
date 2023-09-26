<?php
function albargasy_get_services($no){
    $args = array(
       'post_type'       => 'service',
       'post_status'     => 'publish',
       'posts_per_page'  =>  $no,
       'orderby'         => 'date',
       'order'           => 'DESC',

    );
    return $posts = new WP_Query( $args );
}
function albargasy_get_services_with_select_services($no,$posts_in){
    $args = array(
       'post_type'       => 'service',
       'post_status'     => 'publish',
       'posts_per_page'  =>  $no,
       'orderby'         => 'date',
       'order'           => 'DESC',
       'post__in'        =>  $posts_in,
       
    );
    return $posts = new WP_Query( $args );
}

function albargasy_get_products($no){
    $args = array(
       'post_type'       => 'product',
       'post_status'     => 'publish',
       'posts_per_page'  =>  $no,
       'orderby'         => 'date',
       'order'           => 'DESC'
    );
    return $posts = new WP_Query( $args );
}


function albargasy_get_products_with_select_products($no,$posts_in){
    $args = array(
       'post_type'       => 'product',
       'post_status'     => 'publish',
       'posts_per_page'  =>  $no,
       'orderby'         => 'date',
       'order'           => 'DESC',
       'post__in'        =>  $posts_in,
    );
    return $posts = new WP_Query( $args );
}

function albargasy_get_directors_chairman($no){
    $args = array(
       'post_type'       => 'director',
       'post_status'     => 'publish',
       'posts_per_page'  =>  $no,
       'orderby'         => 'date',
            'meta_query' => array(
            array(
                'key'     => 'coolers_chairman',
                'value'   => '1',
                'compare' =>'LIKE',
            )
        ),

       'order'           => 'DESC'
    );
    return $posts = new WP_Query( $args );
}

function albargasy_get_directors_with_post_in($no,$posts_in){
    $args = array(
       'post_type'       => 'director',
       'post_status'     => 'publish',
       'posts_per_page'  =>  $no,
       'post__in'        =>  $posts_in,
       'orderby'         => 'date',
            'meta_query' => array(
            array(
                'key'     => 'coolers_chairman',
                'value'   => '1',
                'compare' => 'NOT EXISTS'
            )
        ),

       'order'           => 'DESC'
    );
    return $posts = new WP_Query( $args );
}

function albargasy_get_directors($no){
    $args = array(
       'post_type'       => 'director',
       'post_status'     => 'publish',
       'posts_per_page'  =>  $no,
       'order'           => 'DESC'
    );
    return $posts = new WP_Query( $args );
}

function albargasy_get_products_tax($no, $term_id){
    $args = array(
        'post_type'       => 'product',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $no,
        'order'           => 'DESC',
        'tax_query' => array(
            array(
                'taxonomy' => 'product-category',
                'field' => 'term_id',
                'terms' => $term_id,
            ),
        ),
    );
    return $posts = new WP_Query( $args );
}

function albargasy_get_products_tax_post_in($no, $posts_in, $term_id){
    $args = array(
        'post_type'       => 'product',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $no,
        'post__in'        =>  $posts_in,
        'order'           => 'DESC',
        'tax_query' => array(
            array(
                'taxonomy' => 'product-category',
                'field' => 'term_id',
                'terms' => $term_id,
            ),
        ),
    );
    return $posts = new WP_Query( $args );
}

function albargasy_get_partners($no){
    $args = array(
       'post_type'       => 'partner',
       'post_status'     => 'publish',
       'posts_per_page'  =>  $no,
       'orderby'         => 'date',
       'order'           => 'DESC'
    );
    return $posts = new WP_Query( $args );
}

function albargasy_get_partners_with_select_partners($no,$posts_in){
    $args = array(
       'post_type'       => 'partner',
       'post_status'     => 'publish',
       'posts_per_page'  =>  $no,
       'orderby'         => 'date',
       'order'           => 'DESC',
       'post__in'        =>  $posts_in,
    );
    return $posts = new WP_Query( $args );
}

function albargasy_get_photos($no){
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $args = array(
       'post_type'       => 'photo',
       'post_status'     => 'publish',
       'posts_per_page'  =>  $no,
       'paged'           =>  $paged,
       'orderby'         => 'date',
       'order'           => 'ASC'
    );
    return $posts = new WP_Query( $args );
}

function albargasy_get_photos_with_select_photos($no,$posts_in){
    $args = array(
       'post_type'       => 'photo',
       'post_status'     => 'publish',
       'posts_per_page'  =>  $no,
       'orderby'         => 'date',
       'order'           => 'ASC',
       'post__in'        =>  $posts_in,
    );
    return $posts = new WP_Query( $args );
}

function albargasy_get_events($no){
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $args = array(
       'post_type'       => 'event',
       'post_status'     => 'publish',
       'posts_per_page'  =>  $no,
       'paged'           =>  $paged,
       'orderby'         => 'date',
       'order'           => 'DESC'
    );
    return $posts = new WP_Query( $args );
}

function albargasy_get_events_with_select_events($no,$posts_in){
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $args = array(
       'post_type'       => 'event',
       'post_status'     => 'publish',
       'posts_per_page'  =>  $no,
       'paged'           =>  $paged,
       'orderby'         => 'date',
       'order'           => 'ASC',
       'post__in'        =>  $posts_in,
    );
    return $posts = new WP_Query( $args );
}
