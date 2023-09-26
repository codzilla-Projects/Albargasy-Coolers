<?php 
		$page_image  = get_the_post_thumbnail_url();
        $page_image_title  = get_option('coolers_main_img'); 
?>
<section class="banner-section breadcrumb" style="background: url('<?php  if(empty($page_image)){ echo $page_image_title;}elseif (is_tax()){echo $page_image_title;} else{ echo $page_image;}?>');">

	<div class="container z-9">

		<div class="banner_content">

			<h3 class="banner_title"><?=$page_name_title?></h3>

		</div>

	</div>

</section>