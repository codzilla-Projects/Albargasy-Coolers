<?php 
function main_content_area_callback(){
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
				<h1 class="text-center site-title"><span>General Settings</span></h1>
			</header>
		</div>
		<br/>
		<div class="d-flex align-items-start p-0 m-0">
			<div class="nav flex-column nav-pills me-3 col-sm-3 col-md-3 col-lg-3 rounded" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">Logos</button>
				<button class="nav-link" id="v-pills-sixthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sixthsection" type="button" role="tab" aria-controls="v-pills-sixthsection" aria-selected="false">Colors</button>
				<button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="false">Contact</button>
				<button class="nav-link" id="v-pills-thirdsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thirdsection" type="button" role="tab" aria-controls="v-pills-thirdsection" aria-selected="false">Social Media</button>
				<button class="nav-link" id="v-pills-fourthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourthsection" type="button" role="tab" aria-controls="v-pills-fourthsection" aria-selected="false">Footer</button>
			</div>
			<div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent">
				<form class="form-horizontal form_back p-5 rounded" method="post" action="#">
				    <div class="tab-content" id="v-pills-tabContent">
				        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">
							<div class="form-group">
							  	<label for="coolers_header_logo_img" class="col-sm-12 text-start  control-label text-white">Header Homepage Logo</label>
							  	<div class="col-sm-12 text-start ">
							    	<input class="coolers_header_logo_img_url site_half" type="text" name="coolers_header_logo_img" size="60" value="<?= get_option('coolers_header_logo_img'); ?>">
							    	<a href="#" class="coolers_header_logo_img_upload btn btn-info">Choose</a>
							    	<?php if (!empty(get_option('coolers_header_logo_img'))): ?>
							    	<img class="img-fluid bg-dark img-thumbnail w-50 mt-2 coolers_header_logo_img" src="<?= get_option('coolers_header_logo_img'); ?>" height="100" style="max-width:100%" />

							    	<?php endif ?>
							  	</div>
							</div>
							<div class="form-group">
							  	<label for="coolers_pages_logo_img" class="col-sm-12 text-start  control-label text-white">Pages Logo</label>
							  	<div class="col-sm-12 text-start ">
							    	<input class="coolers_pages_logo_img_url site_half" type="text" name="coolers_pages_logo_img" size="60" value="<?= get_option('coolers_pages_logo_img'); ?>">
							    	<a href="#" class="coolers_pages_logo_img_upload btn btn-info">Choose</a>
							    	<?php if (!empty(get_option('coolers_pages_logo_img'))): ?>
							    	<img class="img-fluid img-thumbnail w-50 mt-2 coolers_pages_logo_img" src="<?= get_option('coolers_pages_logo_img'); ?>" height="100" style="max-width:100%" />

							    	<?php endif ?>
							  	</div>
							</div>
							<div class="form-group">
							  	<label for="coolers_sticky_logo_img" class="col-sm-12 text-start  control-label text-white">Sticky Logo</label>
							  	<div class="col-sm-12 text-start ">
							    	<input class="coolers_sticky_logo_img_url site_half" type="text" name="coolers_sticky_logo_img" size="60" value="<?= get_option('coolers_sticky_logo_img'); ?>">
							    	<a href="#" class="coolers_sticky_logo_img_upload btn btn-info">Choose</a>
							    	<?php if (!empty(get_option('coolers_sticky_logo_img'))): ?>
							    	<img class="img-fluid bg-dark img-thumbnail w-50 mt-2 coolers_sticky_logo_img" src="<?= get_option('coolers_sticky_logo_img'); ?>" height="100" style="max-width:100%" />
							    	<?php endif ?>
							  	</div>
							</div>
							<div class="form-group">
							  	<label for="coolers_favicon_img" class="col-sm-12 text-start  control-label text-white">Favicon Logo</label>
							  	<div class="col-sm-12 text-start ">
							    	<input class="coolers_favicon_img_url site_half" type="text" name="coolers_favicon_img" size="60" value="<?= get_option('coolers_favicon_img'); ?>">
							    	<a href="#" class="coolers_favicon_img_upload btn btn-info">Choose</a>
							    	<?php if (!empty(get_option('coolers_favicon_img'))): ?>
							    	<img class="img-fluid img-thumbnail w-50 mt-2 coolers_favicon_img" src="<?= get_option('coolers_favicon_img'); ?>" height="100" style="max-width:100%" />
							    	<?php endif ?>
							  	</div>
							</div>
				        </div>
				        <div class="tab-pane fade" id="v-pills-sixthsection" role="tabpanel" aria-labelledby="v-pills-sixthsection-tab">
							<div class="form-group">
								<label for="coolers_mainColor" class="col-sm-12 text-start  control-label text-white">Main Color</label>
								<div class="col-sm-12 text-start d-flex align-items-center justify-content-start">
									<input type="color" class="form-control coolers-color" id="coolers_mainColor" name="coolers_mainColor" value="<?= get_option('coolers_mainColor'); ?>">
									<div class="text-white ms-2"><?= get_option('coolers_mainColor'); ?></div>
								</div>
							</div>	

							<div class="form-group">
								<label for="coolers_whiteColor" class="col-sm-12 text-start  control-label text-white">White Color</label>
								<div class="col-sm-12 text-start d-flex align-items-center justify-content-start">
									<input type="color" class="form-control coolers-color" id="coolers_whiteColor" name="coolers_whiteColor" value="<?= get_option('coolers_whiteColor'); ?>">
									<div class="text-white ms-2"><?= get_option('coolers_whiteColor'); ?></div>
								</div>
							</div>
							<div class="form-group">
								<label for="coolers_blackColor" class="col-sm-12 text-start  control-label text-white">Black Color</label>
								<div class="col-sm-12 text-start d-flex align-items-center justify-content-start">
									<input type="color" class="form-control coolers-color" id="coolers_blackColor" name="coolers_blackColor" value="<?= get_option('coolers_blackColor'); ?>">
									<div class="text-white ms-2"><?= get_option('coolers_blackColor'); ?></div>
								</div>
							</div>
							<div class="form-group">
								<label for="coolers_paragraphColor" class="col-sm-12 text-start  control-label text-white">Paragraph Color</label>
								<div class="col-sm-12 text-start d-flex align-items-center justify-content-start">
									<input type="color" class="form-control coolers-color" id="coolers_paragraphColor" name="coolers_paragraphColor" value="<?= get_option('coolers_paragraphColor'); ?>">
									<div class="text-white ms-2"><?= get_option('coolers_paragraphColor'); ?></div>
								</div>
							</div>
					    </div>
				        <div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">
							<div class="form-group">
								<label for="coolers_phone" class="col-sm-12 text-start  control-label text-white">Phone Number</label>
								<div class="col-sm-12 text-start ">
									<input type="text" class="form-control" id="coolers_phone" name="coolers_phone" value="<?= get_option('coolers_phone'); ?>">
								</div>
							</div>		
							<div class="form-group">
								<label for="coolers_email" class="col-sm-12 text-start  control-label text-white">E-mali Address</label>
								<div class="col-sm-12 text-start ">
									<input type="email" class="form-control text-start" id="coolers_email" name="coolers_email" value="<?= get_option('coolers_email'); ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="coolers_location_en" class="col-sm-12 text-start  control-label text-white">Location</label>
								<div class="col-sm-12 text-start ">
									<input type="text" class="form-control text-start" id="coolers_location_en" name="coolers_location_en" value="<?= get_option('coolers_location_en'); ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="coolers_location_ar" class="col-sm-12 text-start  control-label text-white">Arabic Address</label>
								<div class="col-sm-12 text-<?php if ( ICL_LANGUAGE_CODE=='ar' ){echo'start';}else{echo'end';} ?> ">
									<input type="text" class="form-control text-<?php if ( ICL_LANGUAGE_CODE=='ar' ){echo'start';}else{echo'end';} ?>" id="coolers_location_ar" name="coolers_location_ar" value="<?= get_option('coolers_location_ar'); ?>">
								</div>
							</div>

							<div class="form-group">
								<label for="coolers_map" class="col-sm-12 text-start  control-label text-white">Google Map</label>
								<div class="col-sm-12 text-start ">
  									<textarea id="coolers_map" name="coolers_map" class="form-control" rows="3"><?= get_option('coolers_map'); ?></textarea>
								</div>
							</div>
					    </div>	      
						<div class="tab-pane fade" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">
							<div class="form-group">
								<label for="coolers_fb" class="col-sm-12 text-start  control-label text-white">Facebook</label>
								<div class="col-sm-12 text-start ">
									<input type="text" class="form-control" id="coolers_fb" name="coolers_fb" value="<?= get_option('coolers_fb'); ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="coolers_twitter" class="col-sm-12 text-start  control-label text-white">Twitter</label>
								<div class="col-sm-12 text-start ">
									<input type="text" class="form-control" id="coolers_twitter" name="coolers_twitter" value="<?= get_option('coolers_twitter'); ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="coolers_youtube" class="col-sm-12 text-start  control-label text-white">Youtube</label>
								<div class="col-sm-12 text-start ">
									<input type="text" class="form-control" id="coolers_youtube" name="coolers_youtube" value="<?= get_option('coolers_youtube'); ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="coolers_insta" class="col-sm-12 text-start  control-label text-white">Instagram</label>
								<div class="col-sm-12 text-start ">
									<input type="text" class="form-control" id="coolers_insta" name="coolers_insta" value="<?= get_option('coolers_insta'); ?>">
								</div>
							</div>
						</div>

						<div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">							
							<div class="form-group">
							  	<label for="coolers_footer_logo_img" class="col-sm-12 text-start  control-label text-white">Header Logo</label>
							  	<div class="col-sm-12 text-start ">
							    	<input class="coolers_footer_logo_img_url site_half" type="text" name="coolers_footer_logo_img" size="60" value="<?= get_option('coolers_footer_logo_img'); ?>">
							    	<a href="#" class="coolers_footer_logo_img_upload btn btn-info">Choose</a>
							    	<?php if (!empty(get_option('coolers_footer_logo_img'))): ?>
							    	<img class="img-fluid img-thumbnail w-50 mt-2 coolers_footer_logo_img bg-dark" src="<?= get_option('coolers_footer_logo_img'); ?>" height="100" style="max-width:100%" />
							    	<?php endif ?>
							  	</div>
							</div>
				        </div>
				 	</div>
 					<div class="form-group">
 						<div class="col-sm-12">
 						<input type="submit" class="btn btn-default btn-block btn-lg w-100 mt-3 site_save_route" name="coolers_save" value="Save Settings">
 						</div>
 					</div>
 				</form>
			</div>
		</div>
	</div>
</div><!-- /container -->
<?php
}