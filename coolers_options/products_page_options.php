<?php 
function products_content_area_callback() {
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
                    'about_content'.$lang
                    ] ) 
                )
                $value = stripcslashes($value);

            update_option( $key , $value );
        endforeach;
        if(!isset($_POST['desert_adaptations_hide'.$lang])) delete_option('desert_adaptations_hide' .$lang);
        if(!isset($_POST['spare_parts_hide'.$lang])) delete_option('spare_parts_hide' .$lang);
        if(!isset($_POST['product_maintenance_hide'.$lang])) delete_option('product_maintenance_hide' .$lang);
    endif; 
?>
 <div <?php if ( ICL_LANGUAGE_CODE=='ar' ){echo'dir="rtl"';} ?> class="container-fluid text-start padding-right-4">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 bg-gray mt-3 mb-3 rounded">
            <!-- Top Navigation -->
            <header class="codrops-header">
                <h1 class="text-center site-title"><span><?php _e('Products Page Settings', 'coolers'); ?></span></h1>
            </header>
        </div>
        <br/>
        <div class="d-flex align-items-start p-0 m-0">
            <div class="nav flex-column nav-pills me-3 col-sm-3 col-md-3 col-lg-3 rounded" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true"><?php _e('Desert Adaptations','coolers') ?></button>
                <button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="false"><?php _e('Spare Parts','coolers') ?></button>
                <button class="nav-link" id="v-pills-thirdsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thirdsection" type="button" role="tab" aria-controls="v-pills-thirdsection" aria-selected="false"><?php _e('Maintenance','coolers') ?></button>
            </div>

            <div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent">
                <form method="POST" class = "form-horizontal form_back p-5 rounded">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">
                            <div class="form-group text-start">                  
                                <div class="inline-block">
                                    <?php $name = 'desert_adaptations_hide'.$lang ; ?>
                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>
                                </div>
                                <label for="<?= $name ?>" class="text-white">
                                	<?php _e('Hide Section','coolers') ?>
                                </label>
                            </div>
                            <div class="form-group">
                                <?php $name = 'desert_adaptations_title'.$lang ; ?>
                                <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                    <?php _e('Title','coolers') ?>
                                </label>
                                <div class="col-sm-12 text-start ">
                                    <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <?php $name = 'desert_adaptations'.$lang.'[]'; $desert_adaptations = albargasy_get_products_tax(-1, 8); if($desert_adaptations->have_posts()) :?>
                                <label for="<?= $name ?>" class="col-sm-12 text-start  control-label text-white"><?php _e('Choose Desert Adaptations Products','coolers') ?></label>
                                <div class="col-sm-12 text-start multiSelect_field">
                                    <select  name="<?= $name ?>" multiple class="js-example-basic-multiple">
                                        <option value = ''><?php _e('Choose Desert Adaptations','coolers') ?></option>
                                        <?php while($desert_adaptations->have_posts()) : $desert_adaptations->the_post();?>
                                        <?php
                                            $desert_adaptations_options = get_option('desert_adaptations'.$lang);
                                           if (!empty($desert_adaptations_options)) {
                                                $selected_post = ( in_array(get_the_ID(), $desert_adaptations_options) ) ? 'selected' :  '';
                                            }
                                        ?>
                                        <option value="<?= get_the_ID() ?>"  <?= $selected_post; ?> >       <?= the_title(); ?>
                                        </option>
                                        <?php endwhile; wp_reset_query();?>
                                    </select>
                                </div>
                                <?php endif;?>
                            </div>
                            
                        </div>

                        <div class="tab-pane fade show" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">
                            <div class="form-group text-start">                  
                                <div class="inline-block">
                                    <?php $name = 'spare_parts_hide'.$lang ; ?>
                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>
                                </div>
                                <label for="<?= $name ?>" class="text-white">
                                    <?php _e('Hide Section','coolers') ?>
                                </label>
                            </div>
                            <div class="form-group">
                                <?php $name = 'spare_parts_title'.$lang ; ?>
                                <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                    <?php _e('Title','coolers') ?>
                                </label>
                                <div class="col-sm-12 text-start ">
                                    <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <?php $name = 'spare_parts'.$lang.'[]'; $spare_parts = albargasy_get_products_tax(-1, 9); if($spare_parts->have_posts()) :?>
                                <label for="<?= $name ?>" class="col-sm-12 text-start  control-label text-white"><?php _e('Choose Spare Parts','coolers') ?></label>
                                <div class="col-sm-12 text-start multiSelect_field">
                                    <select  name="<?= $name ?>" multiple class="js-example-basic-multiple">
                                        <option value = ''><?php _e('Choose Spare Parts Products','coolers') ?></option>
                                        <?php while($spare_parts->have_posts()) : $spare_parts->the_post();?>
                                        <?php
                                            $spare_parts_options = get_option('spare_parts'.$lang);
                                           if (!empty($spare_parts_options)) {
                                                $selected_post = ( in_array(get_the_ID(), $spare_parts_options) ) ? 'selected' :  '';
                                            }
                                        ?>
                                        <option value="<?= get_the_ID() ?>"  <?= $selected_post; ?> > <?= the_title(); ?>
                                        </option>
                                        <?php endwhile; wp_reset_query();?>
                                    </select>
                                </div>
                                <?php endif;?>
                            </div>
                        </div>

                        <div class="tab-pane fade show" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">
                            <div class="form-group text-start">                  
                                <div class="inline-block">
                                    <?php $name = 'product_maintenance_hide'.$lang ; ?>
                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>
                                </div>
                                <label for="<?= $name ?>" class="text-white">
                                    <?php _e('Hide Section','coolers') ?>
                                </label>
                            </div>
                            <div class="form-group">
                                <?php $name = 'product_maintenance_title'.$lang ; ?>
                                <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                    <?php _e('Title','coolers') ?>
                                </label>
                                <div class="col-sm-12 text-start ">
                                    <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <?php $name = 'product_maintenance_img' ; ?>
                                <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                    <?php _e('Image','coolers') ?>
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
                                <?php $name = 'product_maintenance_img_title'.$lang ; ?>
                                <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                    <?php _e('Image Title','coolers') ?>
                                </label>
                                <div class="col-sm-12 text-start ">
                                    <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">
                                </div>
                            </div>
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
    </div>
</div><!-- /container -->
<?php
}
