<?php 
function media_center_content_area_callback() {
    if ( empty(pll_current_language()) )
        $lang = '_'.pll_default_language(); 
    else
        $lang = '_'.pll_current_language();
    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ):
        foreach ( $_POST as $key => $value ):
            if ( in_array( $key ,[] ) 
                )
                $value = stripcslashes($value);
            update_option( $key , $value );
        endforeach;
    endif; 

?>
 <div <?php if ( ICL_LANGUAGE_CODE=='ar' ){echo'dir="rtl"';} ?> class="container-fluid text-start padding-right-4">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 bg-gray mt-3 mb-3 rounded">
            <!-- Top Navigation -->
            <header class="codrops-header">
                <h1 class="text-center site-title"><span><?php _e('Media Center Page Settings', 'coolers'); ?></span></h1>
            </header>
        </div>
        <br/>
        <div class="col-sm-12 col-md-12 col-lg-12 p-0" id="v-pills-tabContent">

            <form method="POST" class = "form-horizontal form_back no-margin-left p-5 rounded">

                <div class="form-group">

                    <?php $name = 'media_center_title'.$lang ; ?>

                    <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">

                        <?php _e('Media Center Title','coolers') ?>

                    </label>

                    <div class="col-sm-12 text-start ">

                        <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">

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

