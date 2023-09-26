<?php 
function technical_content_area_callback() {
    if ( empty(pll_current_language()) )
        $lang = '_'.pll_default_language(); 
    else
        $lang = '_'.pll_current_language();

    $wp_editor_settings = array( 
        'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), 
        'textarea_rows'=> 5,
        'drag_drop_upload'=> true,
        'wpautop' => false,
        'media_buttons'=> true,
        'class'=>'form-control'
    ); 

    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ):
        foreach ( $_POST as $key => $value ):

            if ( in_array( $key ,[
                    'technical_content'.$lang
                    ] ) 
                )
                $value = stripcslashes($value);

            update_option( $key , $value );
        endforeach;
        if(!isset($_POST['technical_hide'.$lang])) delete_option('technical_hide' .$lang);
    endif; 
?>
 <div <?php if ( ICL_LANGUAGE_CODE=='ar' ){echo'dir="rtl"';} ?> class="container-fluid text-start padding-right-4">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 bg-gray mt-3 mb-3 rounded">
            <!-- Top Navigation -->
            <header class="codrops-header">
                <h1 class="text-center site-title"><span><?php _e('Technical Page Settings', 'coolers'); ?></span></h1>
            </header>
        </div>
        <br/>
        <div class="col-sm-12 col-md-12 col-lg-12 p-0" id="v-pills-tabContent">
            <form method="POST" class = "form-horizontal form_back no-margin-left p-5 rounded">
                <div class="form-group text-start">                  
                    <div class="inline-block">
                        <?php $name = 'technical_hide'.$lang ; ?>
                        <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>
                    </div>
                    <label for="<?= $name ?>" class="text-white">
                    	<?php _e('Hide Section','coolers') ?>
                    </label>
                </div>
                <div class="form-group">
                    <?php $name = 'technical_title'.$lang ; ?>
                    <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                        <?php _e('Technical Title','coolers') ?>
                    </label>
                    <div class="col-sm-12 text-start ">
                        <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <?php $name = 'technical_img' ; ?>
                    <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                        <?php _e('Technical Image','coolers') ?>
                    </label>
                    <div class="col-sm-12 text-start ">
                        <input class="<?=$name ?>_url site_half" type="text" name="<?=$name ?>" size="60" value="<?= get_option( $name ); ?>">
                        <a href="#" class="<?=$name ?>_upload btn btn-info"><?php _e('Choose','coolers') ?></a>
                        <?php if (!empty(get_option($name))): ?>
                        <img class="img-fluid img-thumbnail w-50 mt-2 <?=$name ?>" src="<?= get_option( $name ); ?>" height="100" style="max-width:100%" />
                        <?php endif ?>
                    </div>
                </div>
                <div class="form-group">
                    <?php $name = 'technical_second_title'.$lang ; ?>
                    <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                        <?php _e('Image Technical Title','coolers') ?>
                    </label>
                    <div class="col-sm-12 text-start ">
                        <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">
                    </div>
                </div>
                <div class="form-group text-start">
                    <?php $name = 'technical_content'.$lang ; ?>
                    <label for="<?= $name ?>" class="control-label text-white">
                        <?php _e('Technical Content','coolers') ?>
                    </label>
                    <div class="col-sm-12">
                        <?php wp_editor( get_option( $name ), $name,  $wp_editor_settings);  ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="submit" class="btn btn-default btn-block btn-lg w-100 mt-3 site_save_route" name="albargasy_save_<?=$lang?>" value="<?php _e('Save Settings', 'coolers') ?>">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><!-- /container -->
<?php
}
