<?php 
    if ( empty(pll_current_language()) )
        $lang = '_'.pll_default_language(); 
    else
        $lang = '_'.pll_current_language();
	/**
	** Template Name: Technical Support Template
	**/
	get_header(); 
?>
<?php if (get_option('technical_hide'.$lang ) != '1')  :  ?>
<!-- Start Single products Area -->
<div class="products-area techincal maintenance bg-pattern bg-pattern-white">
    <div class="container-fluid">
        <div class="section-title">
            <h2><?=get_option('technical_title'.$lang);?></h2>
        </div>
        <div class="maintenance-content">
            <img src="<?=coolers_URL?>assets/img/technical-vector.png" class="pattern-right">
            <div class="maintenance-text">
                <img src="<?=get_option('technical_img');?>" class="maintenance-img">
                <h3>
                    <?=get_option('technical_second_title'.$lang);?>
                    <i class='bx bx-chevrons-right'></i>
                </h3>
            </div>
        </div>
    </div>
</div>
<div class="products-area techincal-support maintenance">
    <div class="container-fluid">
        <div class="techincal-text">
            <img src="<?=coolers_URL?>assets/img/vector-bottom.png" class="pattern-top">
            <?=get_option('technical_content'.$lang);?>
        </div>
    </div>
</div>
<!-- End Single products Area -->
<?php endif;?>
<?php get_footer()?>