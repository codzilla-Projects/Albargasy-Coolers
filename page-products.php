<?php 
	if ( empty(pll_current_language()) )
        $lang = '_'.pll_default_language(); 
    else
        $lang = '_'.pll_current_language();
	/**
	** Template Name: Products Template
	**/
	get_header(); 
?>
<?php 
	if (get_option('desert_adaptations_hide'.$lang ) != '1')  : 
	$no = get_option('posts_per_page');
    $posts_in = get_option('desert_adaptations'.$lang);
    $number = 200;
    $desert_adaptations = albargasy_get_products_tax_post_in($no,$posts_in,8);
    if($desert_adaptations->have_posts()) : 
?>
<!-- Start Single products Area -->
<div class="products-area products-page-area bg-pattern bg-pattern-white">
    <div class="container-fluid">
        <div class="section-title">
            <h2><?=get_option('desert_adaptations_title'.$lang)?></h2>
        </div>
        <div class="products-page-slider owl-carousel owl-theme">
        	<?php while($desert_adaptations->have_posts()) : $desert_adaptations->the_post();?>
            <div class="single-products-card fadeInUp wow animated" data-wow-delay="<?=$number;?>ms">
                <a href="<?php the_permalink();?>">
                    <div class="products-icon">
                        <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                    </div>
                    <h3><?php the_title();?></h3>
                    <?php the_content();?>
                    <a href="<?php the_permalink();?>" class="default-btn">
                    	<?php _e('VIEW MORE', 'coolers')?>	
                    </a>
                </a>
            </div>
            <?php $number = $number + 100; endwhile; wp_reset_query();?>
        </div>
    </div>
</div>
<!-- End Single products Area -->
<?php endif; endif;?>
<?php 
	if (get_option('spare_parts_hide'.$lang ) != '1')  :
	$no = get_option('posts_per_page');
    $posts_in = get_option('spare_parts'.$lang);
    $number = 200;
    $spare_parts = albargasy_get_products_tax_post_in($no,$posts_in,9);
    if($spare_parts->have_posts()) : 
?>
<!-- Start Single products Area -->
<div class="products-area spare-parts bg-pattern bg-pattern-black">
    <div class="container-fluid">
        <div class="section-title white-title">
            <h2><?=get_option('spare_parts_title'.$lang)?></h2>
        </div>

        <div class="products-page-slider owl-carousel owl-theme">
        	<?php while($spare_parts->have_posts()) : $spare_parts->the_post();?>
            <div class="single-products-card fadeInUp wow animated" data-wow-delay="<?=$number?>ms">
                <a href="<?php the_permalink();?>">
                    <div class="products-icon">
                        <img src="<?php the_post_thumbnail_url();?>" alt="products-1">
                    </div>
                    <a href="<?php the_permalink();?>" class="default-btn">
                    	<?php _e('VIEW MORE', 'coolers')?>	
                    </a>
                </a>
            </div>
            <?php $number = $number + 100; endwhile; wp_reset_query();?>
        </div>
    </div>
</div>
<!-- End Single products Area -->
<?php endif; endif;?>
<?php if (get_option('product_maintenance_hide'.$lang ) != '1')  :  ?>
<!-- Start Single products Area -->
<div class="products-area maintenance bg-pattern bg-pattern-white">
    <div class="container-fluid">
        <div class="section-title">
            <h2><?=get_option('product_maintenance_title'.$lang)?></h2>
        </div>
        <div class="maintenance-content">
            <img src="<?=coolers_URL;?>assets/img/Vector-left.png" class="pattern-top">
            <img src="<?=coolers_URL;?>assets/img/pattern-green.png" class="pattern-right">
            <div class="maintenance-text">
                <img src="<?=get_option('product_maintenance_img')?>" class="<?=get_option('product_maintenance_title'.$lang)?>">
                <h3>
                    <?=get_option('product_maintenance_img_title'.$lang) ?>
                    <i class='bx bx-chevrons-right'></i>
                </h3>
            </div>
        </div>
    </div>
</div>
<!-- End Single products Area -->
<?php endif;?>
<?php get_footer()?>