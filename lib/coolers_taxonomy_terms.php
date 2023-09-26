<?php

/************************
** create Custom Taxonomies for portfolio post type
************************/
add_action( 'init', 'coolers_custom_tax', 0 );
function coolers_custom_tax() 
{
    $my_taxonomies = array(
        array(
          'labels' => array(
            'name' => _x( 'Product Categories', 'taxonomy general name' ),
            'singular_name' => _x( 'Product Categories', 'taxonomy singular name' ),
            'search_items' =>  __( 'Search Product Categories','codzilla' ),
            'popular_items' => __( 'Popular Product Categories' ,'codzilla'),
            'all_items' => __( 'All Product Categories' ),
            'parent_item' => __('Parent'),
            'parent_item_colon' => null,
            'edit_item' => __( 'Edit Product Categories' ), 
            'update_item' => __( 'Update Product Categories' ),
            'add_new_item' => __( 'Add New Product Categories' ),
            'new_item_name' => __( 'New Product Categories' ),
            'separate_items_with_commas' => __( 'Separate Product Categories with commas' ),
            'add_or_remove_items' => __( 'Add or remove Product Categories' ),
            'choose_from_most_used' => __( 'Choose from the most used Product Categories' ),
            'menu_name' => __( 'Product Categories' ),
          ),
          'tax_name' => 'product-category',
          'post_types' =>  array('product'),
          'slug' => 'product-category'          
        ),
    );

  // Add new taxonomy, NOT hierarchical (like tags)
    foreach ($my_taxonomies as $tax) {
      register_taxonomy($tax['tax_name'],$tax['post_types'],array(
        'hierarchical' => true,
        'labels' => $tax['labels'],
        'show_ui' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => $tax['slug'] ),
      ));
    }
}

