<?php 
function about_content_area_callback() {
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
                   
                    'who_we_are_content'.$lang,
                    'awards_content'.$lang,
                    'mission_content'.$lang,
                    'vision_content'.$lang,
                    'strategy_content'.$lang
                    ] ) 
                )
                $value = stripcslashes($value);

            update_option( $key , $value );
        endforeach;
        if(!isset($_POST['who_we_are_hide'.$lang])) delete_option('who_we_are_hide' .$lang);
        if(!isset($_POST['awards_hide'.$lang])) delete_option('awards_hide' .$lang);
        if(!isset($_POST['mission_hide'.$lang])) delete_option('mission_hide' .$lang);
        if(!isset($_POST['vision_hide'.$lang])) delete_option('vision_hide' .$lang);
        if(!isset($_POST['strategy_hide'.$lang])) delete_option('strategy_hide' .$lang);
    endif; 
?>
 <div <?php if ( ICL_LANGUAGE_CODE=='ar' ){echo'dir="rtl"';} ?> class="container-fluid text-start padding-right-4">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 bg-gray mt-3 mb-3 rounded">
            <!-- Top Navigation -->
            <header class="codrops-header">
                <h1 class="text-center site-title"><span><?php _e('About Page Settings', 'coolers'); ?></span></h1>
            </header>
        </div>
        <br/>
        <div class="d-flex align-items-start p-0 m-0">
            <div class="nav flex-column nav-pills me-3 col-sm-3 col-md-3 col-lg-3 rounded" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true"><?php _e('Who We Are Section','coolers') ?></button>
                <button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="false"><?php _e('Awards Section','coolers') ?></button>
                <button class="nav-link" id="v-pills-thirdsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thirdsection" type="button" role="tab" aria-controls="v-pills-thirdsection" aria-selected="false"><?php _e('Our Mission Section','coolers') ?></button>
                <button class="nav-link" id="v-pills-fourthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourthsection" type="button" role="tab" aria-controls="v-pills-fourthsection" aria-selected="false"><?php _e('Our Vision Section','coolers') ?></button>

                <button class="nav-link" id="v-pills-fifthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fifthsection" type="button" role="tab" aria-controls="v-pills-fifthsection" aria-selected="false"><?php _e('Company Strategy','coolers') ?></button>

            </div>

            <div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent">
                <form method="POST" class = "form-horizontal form_back p-5 rounded">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">
                            <div class="form-group text-start">                  
                                <div class="inline-block">
                                    <?php $name = 'who_we_are_hide'.$lang ; ?>
                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>
                                </div>
                                <label for="<?= $name ?>" class="text-white">
                                	<?php _e('Hide Section','coolers') ?>
                                </label>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="services">
                                        <div class="form-group">
                                            <?php $name = 'who_we_are_title'.$lang ; ?>
                                            <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                                <?php _e('Who We Are Title','coolers') ?>
                                            </label>
                                            <div class="col-sm-12 text-start ">
                                                <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services">
                                        <div class="form-group">
                                            <?php $name = 'who_we_are_img' ; ?>
                                            <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                                <?php _e('Who We Are Image','coolers') ?>
                                            </label>
                                            <div class="col-sm-12 text-start ">
                                                <input class="<?=$name ?>_url site_half" type="text" name="<?=$name ?>" size="60" value="<?= get_option( $name ); ?>">
                                                <a href="#" class="<?=$name ?>_upload btn btn-info"><?php _e('Choose','coolers') ?></a>
                                                <?php if (!empty(get_option($name))): ?>
                                                <img class="img-fluid img-thumbnail w-50 mt-2 <?=$name ?>" src="<?= get_option( $name ); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="services">
                                        <div class="form-group text-start">
                                            <?php $name = 'who_we_are_content'.$lang ; ?>
                                            <label for="<?= $name ?>" class="control-label text-white">
                                                <?php _e('Who We Are Content','coolers') ?>
                                            </label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option( $name ), $name,  $wp_editor_settings);  ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">
                            <div class="form-group text-start">                  
                                <div class="inline-block">
                                    <?php $name = 'awards_hide'.$lang ; ?>
                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>
                                </div>
                                <label for="<?= $name ?>" class="text-white">
                                    <?php _e('Hide Section','coolers') ?>
                                </label>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="services">
                                        <div class="form-group">
                                            <?php $name = 'awards_title'.$lang ; ?>
                                            <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                                <?php _e('Awards Title','coolers') ?>
                                            </label>
                                            <div class="col-sm-12 text-start ">
                                                <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services">
                                        <div class="form-group text-start">
                                            <?php $name = 'awards_content'.$lang ; ?>
                                            <label for="<?= $name ?>" class="control-label text-white">
                                                <?php _e('Awards Content','coolers') ?>
                                            </label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option( $name ), $name,  $wp_editor_settings);  ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services">
                                        <div class="form-group">
                                            <?php $name = 'awards_img' ; ?>
                                            <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                                <?php _e('Awards Image','coolers') ?>
                                            </label>
                                            <div class="col-sm-12 text-start ">
                                                <input class="<?=$name ?>_url site_half" type="text" name="<?=$name ?>" size="60" value="<?= get_option( $name ); ?>">
                                                <a href="#" class="<?=$name ?>_upload btn btn-info"><?php _e('Choose','coolers') ?></a>
                                                <?php if (!empty(get_option($name))): ?>
                                                <img class="img-fluid img-thumbnail w-50 mt-2 <?=$name ?>" src="<?= get_option( $name ); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade show" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">
                            <div class="form-group text-start">                  
                                <div class="inline-block">
                                    <?php $name = 'mission_hide'.$lang ; ?>
                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>
                                </div>
                                <label for="<?= $name ?>" class="text-white">
                                    <?php _e('Hide Section','coolers') ?>
                                </label>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="services">
                                        <div class="form-group">
                                            <?php $name = 'mission_title'.$lang ; ?>
                                            <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                                <?php _e('Our Mission Title','coolers') ?>
                                            </label>
                                            <div class="col-sm-12 text-start ">
                                                <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services">
                                        <div class="form-group">
                                            <?php $name = 'mission_img' ; ?>
                                            <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                                <?php _e('Our Mission Image','coolers') ?>
                                            </label>
                                            <div class="col-sm-12 text-start ">
                                                <input class="<?=$name ?>_url site_half" type="text" name="<?=$name ?>" size="60" value="<?= get_option( $name ); ?>">
                                                <a href="#" class="<?=$name ?>_upload btn btn-info"><?php _e('Choose','coolers') ?></a>
                                                <?php if (!empty(get_option($name))): ?>
                                                <img class="img-fluid img-thumbnail w-50 mt-2 <?=$name ?>" src="<?= get_option( $name ); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="services">
                                        <div class="form-group text-start">
                                            <?php $name = 'mission_content'.$lang ; ?>
                                            <label for="<?= $name ?>" class="control-label text-white">
                                                <?php _e('Our Mission Content','coolers') ?>
                                            </label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option( $name ), $name,  $wp_editor_settings);  ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">
                            <div class="form-group text-start">                  
                                <div class="inline-block">
                                    <?php $name = 'vision_hide'.$lang ; ?>
                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>
                                </div>
                                <label for="<?= $name ?>" class="text-white">
                                    <?php _e('Hide Section','coolers') ?>
                                </label>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="services">
                                        <div class="form-group">
                                            <?php $name = 'vision_title'.$lang ; ?>
                                            <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                                <?php _e('Our Vision Title','coolers') ?>
                                            </label>
                                            <div class="col-sm-12 text-start ">
                                                <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services">
                                        <div class="form-group text-start">
                                            <?php $name = 'vision_content'.$lang ; ?>
                                            <label for="<?= $name ?>" class="control-label text-white">
                                                <?php _e('Our Vision Content','coolers') ?>
                                            </label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option( $name ), $name,  $wp_editor_settings);  ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services">
                                        <div class="form-group">
                                            <?php $name = 'vision_img' ; ?>
                                            <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                                <?php _e('Our Vision Image','coolers') ?>
                                            </label>
                                            <div class="col-sm-12 text-start ">
                                                <input class="<?=$name ?>_url site_half" type="text" name="<?=$name ?>" size="60" value="<?= get_option( $name ); ?>">
                                                <a href="#" class="<?=$name ?>_upload btn btn-info"><?php _e('Choose','coolers') ?></a>
                                                <?php if (!empty(get_option($name))): ?>
                                                <img class="img-fluid img-thumbnail w-50 mt-2 <?=$name ?>" src="<?= get_option( $name ); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade show" id="v-pills-fifthsection" role="tabpanel" aria-labelledby="v-pills-fifthsection-tab">
                            <div class="form-group text-start">                  
                                <div class="inline-block">
                                    <?php $name = 'strategy_hide'.$lang ; ?>
                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>
                                </div>
                                <label for="<?= $name ?>" class="text-white">
                                    <?php _e('Hide Section','coolers') ?>
                                </label>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="services">
                                        <div class="form-group">
                                            <?php $name = 'strategy_title'.$lang ; ?>
                                            <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                                <?php _e('Company Strategy Title','coolers') ?>
                                            </label>
                                            <div class="col-sm-12 text-start ">
                                                <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services">
                                        <div class="form-group">
                                            <?php $name = 'strategy_img' ; ?>
                                            <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                                <?php _e('Company Strategy Image','coolers') ?>
                                            </label>
                                            <div class="col-sm-12 text-start ">
                                                <input class="<?=$name ?>_url site_half" type="text" name="<?=$name ?>" size="60" value="<?= get_option( $name ); ?>">
                                                <a href="#" class="<?=$name ?>_upload btn btn-info"><?php _e('Choose','coolers') ?></a>
                                                <?php if (!empty(get_option($name))): ?>
                                                <img class="img-fluid img-thumbnail w-50 mt-2 <?=$name ?>" src="<?= get_option( $name ); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="services">
                                        <div class="form-group text-start">
                                            <?php $name = 'strategy_content'.$lang ; ?>
                                            <label for="<?= $name ?>" class="control-label text-white">
                                                <?php _e('Company Strategy Content','coolers') ?>
                                            </label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option( $name ), $name,  $wp_editor_settings);  ?>
                                            </div>
                                        </div>
                                    </div>
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
