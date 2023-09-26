<?php 
/*********************************

Add Meta Box To programs

**********************************/

function coolers_add_coolers_data_metabox() {

    add_meta_box( "managers_extra_", "Director Data" , "coolers_managers_data_callback", array('director'), "side" );

    add_meta_box( "products_extra_", "Product Data" , "coolers_products_data_callback", array('product'), "normal" );
}
add_action( 'add_meta_boxes', 'coolers_add_coolers_data_metabox' );

function coolers_managers_data_callback( $object, $box ) { 
    $coolers_chairman          = esc_attr( get_post_meta( $object->ID, 'coolers_chairman', true ) );
    $coolers_managers_position = esc_attr( get_post_meta( $object->ID, 'coolers_managers_position', true ) );
    $chairman_checked = $coolers_chairman  === '1' ? 'checked' : '';
?>
<div class="form-group row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" name="coolers_chairman" <?=$chairman_checked?>>
            <label class="form-check-label" for="flexCheckDefault">
                Chairman
            </label>
        </div>
    </div>
<div class="form-group row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <label  class="text-dark text-left" for="coolers_managers_position"><?php _e('Director Position: ','coolers'); ?></label>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <input type="text"  name="coolers_managers_position" class="form-control" value="<?=$coolers_managers_position; ?>"><br>
            </div>
        </div>
    </div>
</div>
<?php
}

function coolers_products_data_callback($object, $box ){
    $product_location   = get_post_meta( $object->ID, 'product_location', true );
    $product_details    = get_post_meta( $object->ID, 'product_details', true );
    $key_features       = get_post_meta( $object->ID, 'key_features', true );
    $specifications     = get_post_meta( $object->ID, 'specifications', true );
    $wp_editor_settings = array( 
        'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), 
        'textarea_rows'=> 5,
        'drag_drop_upload'=> true,
        'wpautop' => false,
        'media_buttons'=> true,
        'class'=>'form-control text-dark'
    );
    ?>
<div class="product-card card">
    <div class="card-header">
        Product Location
    </div>
    <div class="card-body">
        <div class="form-group row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <input type="text"  name="product_location" class="form-control" value="<?=$product_location; ?>"><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product-card card">
    <div class="card-header">
        Product Details
    </div>
    <div class="card-body">
        <div class="form-group row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                         <?php wp_editor( htmlspecialchars_decode($product_details), 'product_details', $wp_editor_settings);  ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="product-card card">
    <div class="card-header">
        Key Features
    </div>
    <div class="card-body">
        <div class="form-group row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                         <?php wp_editor( htmlspecialchars_decode($key_features), 'key_features', $wp_editor_settings);  ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="product-card card">
    <div class="card-header">
        Specifications
    </div>
    <div class="card-body">
        <div class="form-group row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                         <?php wp_editor( htmlspecialchars_decode($specifications), 'specifications', $wp_editor_settings);  ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <?php
}
add_action( 'save_post', 'coolers_save_custom_meta', 10, 2 );
function coolers_save_custom_meta($post_id){
//var_dump($_POST);die();
    $keys = ['coolers_chairman','coolers_managers_position','product_color','product_location','product_details','key_features','specifications'];

    foreach ($keys as $key) {

       if( isset($_POST[$key]) ){
            update_post_meta($post_id, $key, $_POST[$key]);
        }
        else
            if ($_POST[$key] === '')  {
               delete_post_meta($post_id,$key);
                
            }elseif (in_array($key, ['coolers_chairman']) && !$_POST[$key]){
                delete_post_meta($post_id,$key);
            }
    }

}
