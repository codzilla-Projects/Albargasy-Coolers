<?php 
function home_content_area_callback() {
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
                    'hero_title'.$lang,
                    'about_content'.$lang
                    ] ) 
                )
                $value = stripcslashes($value);

            update_option( $key , $value );
        endforeach;
        if(!isset($_POST['hero_hide'.$lang])) delete_option('hero_hide' .$lang);
        if(!isset($_POST['about_hide'.$lang])) delete_option('about_hide' .$lang);
        if(!isset($_POST['services_hide'.$lang])) delete_option('services_hide' .$lang);
        if(!isset($_POST['products_hide'.$lang])) delete_option('products_hide' .$lang);
        if(!isset($_POST['partners_hide'.$lang])) delete_option('partners_hide' .$lang);
    endif; 
?>
 <div <?php if ( ICL_LANGUAGE_CODE=='ar' ){echo'dir="rtl"';} ?> class="container-fluid text-start padding-right-4">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 bg-gray mt-3 mb-3 rounded">
            <!-- Top Navigation -->
            <header class="codrops-header">
                <h1 class="text-center site-title"><span><?php _e('Home Page Settings', 'coolers'); ?></span></h1>
            </header>
        </div>
        <br/>
        <div class="d-flex align-items-start p-0 m-0">
            <div class="nav flex-column nav-pills me-3 col-sm-3 col-md-3 col-lg-3 rounded" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true"><?php _e('hero Section','coolers') ?></button>
                <button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="false"><?php _e('About Section','coolers') ?></button>
                <button class="nav-link" id="v-pills-thirdsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thirdsection" type="button" role="tab" aria-controls="v-pills-thirdsection" aria-selected="false"><?php _e('Services Section','coolers') ?></button>
                <button class="nav-link" id="v-pills-fourthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourthsection" type="button" role="tab" aria-controls="v-pills-fourthsection" aria-selected="false"><?php _e('Products Section','coolers') ?></button>
                <button class="nav-link" id="v-pills-fifthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fifthsection" type="button" role="tab" aria-controls="v-pills-fifthsection" aria-selected="false"><?php _e('Partners Section','coolers') ?></button>

            </div>

            <div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent">
                <form method="POST" class = "form-horizontal form_back p-5 rounded">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">
                            <div class="form-group text-start">                  
                                <div class="inline-block">
                                    <?php $name = 'hero_hide'.$lang ; ?>
                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>
                                </div>
                                <label for="<?= $name ?>" class="text-white">
                                	<?php _e('Hide Section','coolers') ?>
                                </label>
                            </div>
                            <div class="form-group">
                                <?php $name = 'hero_bg_img' ; ?>
                                <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                    <?php _e('hero Background Image','coolers') ?>
                                </label>
                                <div class="col-sm-12 text-start ">
                                    <input class="<?=$name ?>_url site_half" type="text" name="<?=$name ?>" size="60" value="<?= get_option( $name ); ?>">
                                    <a href="#" class="<?=$name ?>_upload btn btn-info"><?php _e('Choose','coolers') ?></a>
                                    <?php if (!empty(get_option($name))): ?>
                                    <img class="img-fluid img-thumbnail w-50 mt-2 <?=$name ?>" src="<?= get_option( $name ); ?>" height="100" style="max-width:100%" />
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="services">
                                        <div class="form-group">
                                            <?php $name = 'hero_img' ; ?>
                                            <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                                <?php _e('hero Image','coolers') ?>
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
                                            <?php $name = 'hero_pattern_img' ; ?>
                                            <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                                <?php _e('hero Pattern Image','coolers') ?>
                                            </label>
                                            <div class="col-sm-12 text-start ">
                                                <input class="<?=$name ?>_url site_half" type="text" name="<?=$name ?>" size="60" value="<?= get_option( $name ); ?>">
                                                <a href="#" class="<?=$name ?>_upload btn btn-info"><?php _e('Choose','coolers') ?></a>
                                                <?php if (!empty(get_option($name))): ?>
                                                <img class="img-fluid bg-dark img-thumbnail w-25 mt-2 <?=$name ?>" src="<?= get_option( $name ); ?>" height="100" style="max-width:100%" />
                                                <?php endif ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="services">
                                        <div class="form-group text-start">
                                            <?php $name = 'hero_title'.$lang ; ?>
                                            <div class="mb-3">
                                                <label for="<?= $name ?>"  class="col-sm-12 text-start control-label text-white"><?php _e('Hero Title','coolers') ?></label>
                                                <textarea class="form-control" rows="3" name="<?= $name ?>"><?=get_option( $name )?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <?php $name = 'hero_btn_txt'.$lang ; ?>
                                            <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                                <?php _e('Hero Button Text','coolers') ?>
                                            </label>
                                            <div class="col-sm-12 text-start ">
                                                <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <?php $name = 'hero_btn_url'.$lang ; ?>
                                            <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                                <?php _e('Hero Button URL','coolers') ?>
                                            </label>
                                            <div class="col-sm-12 text-start ">
                                                <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <div class="tab-pane fade show" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">
                            <div class="form-group text-start">                  
                                <div class="inline-block">
                                    <?php $name = 'about_hide'.$lang ; ?>
                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>
                                </div>
                                <label for="<?= $name ?>" class="text-white">
                                    <?php _e('Hide Section','coolers') ?>
                                </label>
                            </div>
                        	<div class="row">
                        		<div class="col-md-6">
                                    <div class="services">
                                        <div class="form-group">
                                            <?php $name = 'about_img' ; ?>
                                            <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                                <?php _e('About Image','coolers') ?>
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
                                        <div class="form-group">
                                            <?php $name = 'about_title'.$lang ; ?>
                                            <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                                <?php _e('About Title','coolers') ?>
                                            </label>
                                            <div class="col-sm-12 text-start ">
                                                <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group text-start">
                                            <?php $name = 'about_content'.$lang ; ?>
                                            <label for="<?= $name ?>" class="control-label text-white">
                                                <?php _e('About Content','coolers') ?>
                                            </label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option( $name ), $name,  $wp_editor_settings);  ?>
                                            </div>
                                        </div>
		                            </div>
                        		</div>
                        	</div> 
                        </div>

                        <div class="tab-pane fade show" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">
                            <div class="form-group text-start">                  
                                <div class="inline-block">
                                    <?php $name = 'services_hide'.$lang ; ?>
                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>
                                </div>
                                <label for="<?= $name ?>" class="text-white">
                                    <?php _e('Hide Section','coolers') ?>
                                </label>
                            </div>
                            <div class="form-group">
                                <?php $name = 'services_title'.$lang ; ?>
                                <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                    <?php _e('Services Title','coolers') ?>
                                </label>
                                <div class="col-sm-12 text-start ">
                                    <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <?php $name = 'services'.$lang.'[]'; $services = albargasy_get_services(-1); if($services->have_posts()) :?>
                                <label for="<?= $name ?>" class="col-sm-12 text-start  control-label text-white"><?php _e('Choose Services','coolers') ?></label>
                                <div class="col-sm-12 text-start multiSelect_field">
                                    <select  name="<?= $name ?>" multiple class="js-example-basic-multiple">
                                        <option value = ''><?php _e('Choose services','coolers') ?></option>
                                        <?php while($services->have_posts()) : $services->the_post();?>
                                        <?php
                                            $services_options = get_option('services'.$lang);
                                           if (!empty($services_options)) {
                                                $selected_post = ( in_array(get_the_ID(), $services_options) ) ? 'selected' :  '';
                                            }
                                        ?>
                                        <option value="<?= get_the_ID() ?>"  <?= $selected_post; ?> >       <?php the_title(); ?>
                                        </option>
                                        <?php endwhile; wp_reset_query();?>
                                    </select>
                                </div>
                                <?php endif;?>
                            </div>
                        </div>

                        <div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">
                            <div class="form-group text-start">                  
                                <div class="inline-block">
                                    <?php $name = 'products_hide'.$lang ; ?>
                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>
                                </div>
                                <label for="<?= $name ?>" class="text-white">
                                    <?php _e('Hide Section','coolers') ?>
                                </label>
                            </div>
                            <div class="form-group">
                                <?php $name = 'products_title'.$lang ; ?>
                                <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                    <?php _e('Products Title','coolers') ?>
                                </label>
                                <div class="col-sm-12 text-start ">
                                    <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <?php $name = 'products'.$lang.'[]'; $products = albargasy_get_products(-1); if($products->have_posts()) :?>
                                <label for="<?= $name ?>" class="col-sm-12 text-start  control-label text-white"><?php _e('Choose Products','coolers') ?></label>
                                <div class="col-sm-12 text-start multiSelect_field">
                                    <select  name="<?= $name ?>" multiple class="js-example-basic-multiple">
                                        <option value = ''><?php _e('Choose products','coolers') ?></option>
                                        <?php while($products->have_posts()) : $products->the_post();?>
                                        <?php
                                            $products_options = get_option('products'.$lang);
                                           if (!empty($products_options)) {
                                                $selected_post = ( in_array(get_the_ID(), $products_options) ) ? 'selected' :  '';
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

                        <div class="tab-pane fade show" id="v-pills-fifthsection" role="tabpanel" aria-labelledby="v-pills-fifthsection-tab">
                            <div class="form-group text-start">                  
                                <div class="inline-block">
                                    <?php $name = 'partners_hide'.$lang ; ?>
                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>
                                </div>
                                <label for="<?= $name ?>" class="text-white">
                                    <?php _e('Hide Section','coolers') ?>
                                </label>
                            </div>
                            <div class="form-group">
                                <?php $name = 'partners_title'.$lang ; ?>
                                <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                    <?php _e('partners Title','coolers') ?>
                                </label>
                                <div class="col-sm-12 text-start ">
                                    <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <?php 
                                    $name = 'brands'.$lang.'[]'; 
                                    $brands = albargasy_get_partners(-1); 
                                    if($brands->have_posts()) :
                                ?>
                                <label for="<?= $name ?>" class="col-sm-12 text-start  control-label text-white"><?php _e('Choose Partners','coolers') ?></label>
                                <div class="col-sm-12 text-start multiSelect_field">
                                    <select  name="<?= $name ?>" multiple class="js-example-basic-multiple">
                                        <option value = ''><?php _e('Choose Partners','coolers') ?></option>
                                        <?php 
                                            while($brands->have_posts()) : $brands->the_post();
                                            $brands_options = get_option('brands'.$lang);
                                            if (!empty($brands_options)) {
                                                $selected_brands = ( in_array(get_the_ID(), $brands_options) ) ? 'selected' :  '';
                                            }
                                        ?>

                                        <option value="<?= get_the_ID();?>"  <?= $selected_brands;?> ><?php the_title(); ?>
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
