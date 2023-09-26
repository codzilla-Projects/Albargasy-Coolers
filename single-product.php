<?php  

	get_header(); 

	if ( have_posts() ) : while ( have_posts() ) : the_post(); $post_id = get_the_ID();

    $product_galleries  = get_post_meta($post_id, 'thumbnail_ids' );

	$product_location   = get_post_meta( $post_id, 'product_location', true );

	$product_details    = get_post_meta( $post_id, 'product_details', true );

	$key_features       = get_post_meta( $post_id, 'key_features', true );

	$specifications     = get_post_meta( $post_id, 'specifications', true );

?>

<div class="single-product bg-pattern bg-pattern-white">

    <img src="<?=coolers_URL;?>assets/img/pattern-green.png" class="pattern-right">

    <div class="container">

        <div class="products-details bg-white">

            <div class="row">

            	<?php if (!empty($product_galleries)) :?>

                <div class="col-lg-5 product-left">
                    <h3 class="product-title product-title-mobile"><?php the_title();?>
                    </h3>
                    <div class="swiper-container product-slider mb-3">

                        <div class="swiper-wrapper">

                        	<?php
                                $i=0;
                                foreach ($product_galleries as $product_gallery) :
                                $slider_image = wp_get_attachment_image_src($product_gallery, 'large')[0];
                            ?>

                            <div class="swiper-slide">
                                <img src="<?= $slider_image;?>" alt="<?php the_title();?>"  class="img-fluid">
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
                <?php else: ?>
                <div class="col-lg-5 product-left">
                    <h3 class="product-title product-title-mobile"><?php the_title();?>
                        <?php if (!empty($product_color)) :?> - <span><?=$product_color;?></span><?php endif;?></h3>
                    <img class="img-fluid" src="<?php the_post_thumbnail_url();?>">
                </div>
                <?php endif;?>
                <div class="col-lg-7">
                    <h3 class="product-title"><?php the_title();?>
                        <?php if (!empty($product_color)) :?> - <span><?=$product_color;?></span><?php endif;?></h3>
                    <div class="product-content <?php if (empty($product_galleries)): ?>single-product<?php endif ?>">
                        
                        <p>
                            <?php the_content();?>
                        </p>
                        <?php if (!empty($product_location)) : ?>
                        <div class="location">
                            <?php _e('Available In', 'coolers')?> <?=$product_location;?>   
                        </div>
                        <div class="rating">
                            <div class="wrapper">
                                <label class="st1" for="st1"></label>
                                <label class="st2" for="st2"></label>
                                <label class="st3" for="st3"></label>
                                <label class="st4" for="st4"></label>
                                <label class="st5" for="st5"></label>
                            </div>
                            <div class="rating-available">
                                <?php _e('Rating Available', 'coolers')?>
                            </div>
                        </div>
                        <?php endif;?>
                        <?php if (!empty($product_galleries)) :?>
                        <div class="slider-thumbnail">
                            <div class="swiper-container product-thumbs">
                                <div class="swiper-wrapper">
                                	<?php
                                        $i=0;
                                        foreach ($product_galleries as $product_gallery) :
                                        $slider_image = wp_get_attachment_image_src($product_gallery, 'large')[0];
                                    ?>
                                    <div class="swiper-slide">
                                        <img src="<?= $slider_image;?>" alt="<?php the_title();?>"  class="img-fluid">
                                    </div>
                                    <?php endforeach;?>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    	<?php endif;?>
                    </div>
                </div>
            </div>
        </div>
        <?php if (!empty($product_details) && !empty($key_features) && !empty($specifications)): ?>
        <div class="product-details bg-pattern bg-pattern-black">
            <div class="row">
                <div class="col-md-12">
                    <div class="tabbable-panel">
                        <div class="tabbable-line">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <?php if (!empty($product_details)): ?>
                                <li class="nav-item" role="presentation">
                                    <a class="active" id="products-details-tab" data-bs-toggle="pill" data-bs-target="#products-details" type="button" role="tab" aria-controls="products-details" aria-selected="true">
                                        <?php _e('Product Details', 'coolers')?>     
                                    </a>
                                </li>
                                <?php endif;?>
                                <?php if (!empty($key_features)): ?>
                                <li class="nav-item" role="presentation">
                                    <a id="key-features-tab" data-bs-toggle="pill" data-bs-target="#key-features" type="button" role="tab" aria-controls="key-features" aria-selected="false">
                                    <?php _e('Key Features', 'coolers')?></a>
                                </li>
                                <?php endif;?>
                                <?php if (!empty($specifications)): ?>
                                <li class="nav-item" role="presentation">
                                    <a id="specifications-tab" data-bs-toggle="pill" data-bs-target="#specifications" type="button" role="tab" aria-controls="specifications" aria-selected="false">
                                    <?php _e('Specifications', 'coolers')?></a>
                                </li>
                                <?php endif;?>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <?php if (!empty($product_details)): ?>
                                <div class="tab-pane fade show active" id="products-details" role="tabpanel" aria-labelledby="products-details-tab">
                                    <?=$product_details;?>
                                </div>
                                <?php endif;?>
                                <?php if (!empty($key_features)): ?>
                                <div class="tab-pane fade" id="key-features" role="tabpanel" aria-labelledby="key-features-tab">
                                    <?=$key_features;?>
                                </div><?php endif;?>
                                <?php if (!empty($specifications)): ?>
                                <div class="tab-pane fade" id="specifications" role="tabpanel" aria-labelledby="specifications-tab">
                                    <?=$specifications;?>
                                </div>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif;?>
    </div>
</div>

<?php endwhile; endif; get_footer()?>