<?php 

	/**
	** Template Name: About Us Template
	**/
	get_header(); 
    if ( empty(pll_current_language()) )
        $lang = '_'.pll_default_language(); 
    else
        $lang = '_'.pll_current_language();
?>
<?php 
   if (get_option('who_we_are_hide'.$lang ) != '1')  : 
?>
<!-- About section start -->
<section class="about-us-area pt-50 pb-50 bg-pattern bg-pattern-white">
    <div class="container-fluid">
        <div class="section-title">
            <h2><?=get_option('who_we_are_title'.$lang);?></h2>
        </div>
        <div class="about-us-content bg-white">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="about-img <?php if ( ICL_LANGUAGE_CODE=='ar' ): ?>fadeInRight<?php else: ?>fadeInLeft<?php endif ?> wow animated" data-delay-in="10" data-wow-delay="300ms" data-animation-in="<?php if ( ICL_LANGUAGE_CODE=='ar' ): ?>fadeInRight<?php else: ?>fadeInLeft<?php endif ?>">
                        <img src="<?=get_option('who_we_are_img');?>">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="single-about-us-content fadeInRight wow animated" data-delay-in="15" data-wow-delay="500ms" data-animation-in="fadeInRight">
                        <div class="section-title left-title">
                            <p>
                                <?=get_option('who_we_are_content'.$lang);?>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="section-title certificates-title m-0">
            <h2><?=get_option('awards_title'.$lang);?></h2>
        </div>
    </div>
</section>
<!-- About section end -->
<?php endif;?>
<?php 
   if (get_option('awards_hide'.$lang ) != '1')  : 
?>
<!-- About section start -->
<section class="about-us-area certificates pt-50 pb-50 bg-pattern bg-pattern-black">
     <div class="container-fluid">
        <div class="about-us-content">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="single-about-us-content <?php if ( ICL_LANGUAGE_CODE=='ar' ): ?>fadeInRight<?php else: ?>fadeInLeft<?php endif ?> wow animated" data-delay-in="15" data-wow-delay="500ms" data-animation-in="<?php if ( ICL_LANGUAGE_CODE=='ar' ): ?>fadeInRight<?php else: ?>fadeInLeft<?php endif ?>">
                        <div class="section-title left-title">
                            <?=get_option('awards_content'.$lang);?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-img bg-white fadeInRight wow animated" data-delay-in="10" data-wow-delay="300ms" data-animation-in="fadeInRight">
                        <img src="<?=get_option('awards_img');?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About section end -->
<?php endif;?>
<?php 
   if (get_option('mission_hide'.$lang ) != '1')  : 
?>
<!-- About section start -->
<section class="about-us-area pt-50 pb-50 bg-pattern bg-pattern-white">
    <div class="container-fluid">
        <div class="section-title">
            <h2><?=get_option('mission_title'.$lang);?></h2>
        </div>
        <div class="about-us-content bg-white">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="about-img <?php if ( ICL_LANGUAGE_CODE=='ar' ): ?>fadeInRight<?php else: ?>fadeInLeft<?php endif ?> wow animated" data-delay-in="10" data-wow-delay="300ms" data-animation-in="<?php if ( ICL_LANGUAGE_CODE=='ar' ): ?>fadeInRight<?php else: ?>fadeInLeft<?php endif ?>">
                        <img src="<?=get_option('mission_img');?>">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="single-about-us-content fadeInRight wow animated" data-delay-in="15" data-wow-delay="500ms" data-animation-in="fadeInRight">
                        <div class="section-title left-title">
                            <p>
                                <?=get_option('mission_content'.$lang);?>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="section-title certificates-title">
            <h2><?=get_option('vision_title'.$lang);?></h2>
        </div>
    </div>
</section>
<!-- About section end -->
<?php endif;?>
<?php 
   if (get_option('vision_hide'.$lang ) != '1')  : 
?>
<!-- About section start -->
<section class="about-us-area certificates pt-50 pb-50 bg-pattern bg-pattern-black">
    <div class="container-fluid">
        <div class="about-us-content">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="single-about-us-content <?php if ( ICL_LANGUAGE_CODE=='ar' ): ?>fadeInRight<?php else: ?>fadeInLeft<?php endif ?> wow animated" data-delay-in="15" data-wow-delay="500ms" data-animation-in="<?php if ( ICL_LANGUAGE_CODE=='ar' ): ?>fadeInRight<?php else: ?>fadeInLeft<?php endif ?>">
                        <div class="section-title left-title">
                            <p class="p-0">
                                <?=get_option('vision_content'.$lang);?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-img bg-white fadeInRight wow animated" data-delay-in="10" data-wow-delay="300ms" data-animation-in="fadeInRight">
                        <img src="<?=get_option('vision_img');?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About section end -->
<?php endif;?>
<?php 
   if (get_option('strategy_hide'.$lang ) != '1')  : 
?>
<!-- About section start -->
<section class="about-us-area strategy pt-50 pb-50 bg-pattern bg-pattern-white">
    <div class="container-fluid">
        <div class="section-title">
            <h2><?=get_option('strategy_title'.$lang);?></h2>
        </div>
        <div class="about-us-content bg-gray">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="about-img <?php if ( ICL_LANGUAGE_CODE=='ar' ): ?>fadeInRight<?php else: ?>fadeInLeft<?php endif ?> wow animated" data-delay-in="10" data-wow-delay="300ms" data-animation-in="<?php if ( ICL_LANGUAGE_CODE=='ar' ): ?>fadeInRight<?php else: ?>fadeInLeft<?php endif ?>">
                        <img src="<?=get_option('strategy_img');?>">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="single-about-us-content fadeInRight wow animated" data-delay-in="15" data-wow-delay="500ms" data-animation-in="fadeInRight">
                        <div class="section-title left-title">
                            <p>
                                <?=get_option('strategy_content'.$lang);?>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- About section end -->
<?php endif;?>
<?php get_footer()?>