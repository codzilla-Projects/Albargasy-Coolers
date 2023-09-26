<?php 
function services_content_area_callback() {
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
                <h1 class="text-center site-title"><span><?php _e('Services Page Settings', 'coolers'); ?></span></h1>
            </header>
        </div>
        <br/>
        <div class="col-sm-12 col-md-12 col-lg-12 p-0" id="v-pills-tabContent">
            <form method="POST" class = "form-horizontal form_back no-margin-left p-5 rounded">
                <div class="form-group text-start">                  
                    <div class="inline-block">
                        <?php $name = 'services_page_hide'.$lang ; ?>
                        <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>
                    </div>
                    <label for="<?= $name ?>" class="text-white">
                    	<?php _e('Hide Section','coolers') ?>
                    </label>
                </div>
                <div class="form-group">
                    <?php $name = 'services_page_title'.$lang ; ?>
                    <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                        <?php _e('services Title','coolers') ?>
                    </label>
                    <div class="col-sm-12 text-start ">
                        <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <?php $name = 'services_page'.$lang.'[]'; $services = albargasy_get_services(-1); if($services->have_posts()) :?>
                    <label for="<?= $name ?>" class="col-sm-12 text-start  control-label text-white"><?php _e('Choose Services','coolers') ?></label>
                    <div class="col-sm-12 text-start multiSelect_field">
                        <select  name="<?= $name ?>" multiple class="js-example-basic-multiple">
                            <option value = ''><?php _e('Choose services','coolers') ?></option>
                            <?php while($services->have_posts()) : $services->the_post();?>
                            <?php
                                $services_options = get_option('services_page'.$lang);
                                if (!empty($services_options)) {
                                    $selected_post = ( in_array(get_the_ID(), $services_options) ) ? 'selected' :  '';
                                }
                            ?>
                            <option value="<?= get_the_ID() ?>"  <?= $selected_post; ?> >       <?= the_title(); ?>
                            </option>
                            <?php endwhile; wp_reset_query();?>
                        </select>
                    </div>
                    <?php endif;?>
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
