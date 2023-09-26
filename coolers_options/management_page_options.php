<?php 
function management_content_area_callback() {
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
        if(!isset($_POST['chairman_hide'.$lang])) delete_option('chairman_hide' .$lang);
        if(!isset($_POST['directors_hide'.$lang])) delete_option('directors_hide' .$lang);
    endif; 
?>
 <div <?php if ( ICL_LANGUAGE_CODE=='ar' ){echo'dir="rtl"';} ?> class="container-fluid text-start padding-right-4">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 bg-gray mt-3 mb-3 rounded">
            <!-- Top Navigation -->
            <header class="codrops-header">
                <h1 class="text-center site-title"><span><?php _e('Directors Page Settings', 'coolers'); ?></span></h1>
            </header>
        </div>
        <br/>
        <div class="d-flex align-items-start p-0 m-0">
            <div class="nav flex-column nav-pills me-3 col-sm-3 col-md-3 col-lg-3 rounded" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true"><?php _e('Chairman Section','coolers') ?></button>
                <button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="false"><?php _e('Directors Section','coolers') ?></button>

            </div>

            <div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent">
                <form method="POST" class = "form-horizontal form_back p-5 rounded">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">
                            <div class="form-group text-start">                  
                                <div class="inline-block">
                                    <?php $name = 'chairman_hide'.$lang ; ?>
                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>
                                </div>
                                <label for="<?= $name ?>" class="text-white">
                                	<?php _e('Hide Section','coolers') ?>
                                </label>
                            </div>
                            
                            <div class="form-group">
                                <?php $name = 'chairman_title'.$lang ; ?>
                                <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                    <?php _e('Chairman Title','coolers') ?>
                                </label>
                                <div class="col-sm-12 text-start ">
                                    <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade show" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">
                            <div class="form-group text-start">                  
                                <div class="inline-block">
                                    <?php $name = 'directors_hide'.$lang ; ?>
                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>
                                </div>
                                <label for="<?= $name ?>" class="text-white">
                                    <?php _e('Hide Section','coolers') ?>
                                </label>
                            </div>
                            <div class="form-group">
                                <?php $name = 'directors'.$lang.'[]'; $directors = albargasy_get_directors(-1); if($directors->have_posts()) :?>
                                <label for="<?= $name ?>" class="col-sm-12 text-start  control-label text-white"><?php _e('Choose Directors','coolers') ?></label>
                                <div class="col-sm-12 text-start multiSelect_field">
                                    <select  name="<?= $name ?>" multiple class="js-example-basic-multiple">
                                        <option value = ''><?php _e('Choose Directors','coolers') ?></option>
                                        <?php while($directors->have_posts()) : $directors->the_post();?>
                                        <?php
                                            $directors_options = get_option('directors'.$lang);
                                           if (!empty($directors_options)) {
                                                $selected_post = ( in_array(get_the_ID(), $directors_options) ) ? 'selected' :  '';
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
