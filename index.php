<?php get_header();

    if ( empty(pll_current_language()) )

        $lang = '_'.pll_default_language(); 

    else

        $lang = '_'.pll_current_language();

?>

<?php 

   if (get_option('hero_hide'.$lang ) != '1')  : 

?>

<!-- home section start -->

<section class="layout-home" style="background: url('<?=get_option('hero_bg_img');?>');">

    <img class="pattern-right" src="<?=get_option('hero_pattern_img');?>">

    <div class="container-fluid p-0">

        <div class="row m-0">

            <div class="col-lg-12 p-0">

                <div class="sync-hero">

                    <div class="home-hero">

                        <div>

                            <div class="hero-image">

                                <div class="container">

                                    <div class="row">

                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                                            <div class="home-content">

                                                <div class="row d-flex">

                                                    <div class="col-md-6 text-start">

                                                        <h1 class="<?php if ( ICL_LANGUAGE_CODE=='ar' ): ?>fadeInRight<?php else: ?><?php if ( ICL_LANGUAGE_CODE=='ar' ): ?>fadeInRight<?php else: ?>fadeInLeft<?php endif ?><?php endif ?> wow animated" data-delay-in="10" data-wow-delay="500ms" data-animation-in="<?php if ( ICL_LANGUAGE_CODE=='ar' ): ?>fadeInRight<?php else: ?><?php if ( ICL_LANGUAGE_CODE=='ar' ): ?>fadeInRight<?php else: ?>fadeInLeft<?php endif ?><?php endif ?>">

                                                            <?=get_option('hero_title'.$lang);?>

                                                        </h1>



                                                        <a data-delay-in="10" data-wow-delay="500ms" data-animation-in="<?php if ( ICL_LANGUAGE_CODE=='ar' ): ?>fadeInRight<?php else: ?><?php if ( ICL_LANGUAGE_CODE=='ar' ): ?>fadeInRight<?php else: ?>fadeInLeft<?php endif ?><?php endif ?>" href="<?=get_option('hero_btn_url'.$lang);?>" class="default-btn <?php if ( ICL_LANGUAGE_CODE=='ar' ): ?>fadeInRight<?php else: ?><?php if ( ICL_LANGUAGE_CODE=='ar' ): ?>fadeInRight<?php else: ?>fadeInLeft<?php endif ?><?php endif ?> wow animated">

                                                            <?=get_option('hero_btn_txt'.$lang);?>

                                                        </a>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="product fadeInRight wow animated" data-wow-delay="600ms">

                                                            <img  class="img-product" data-delay-in="10" data-animation-in="fadeInRight" src="<?=get_option('hero_img');?>">

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- home section end -->

<?php endif;?>

<?php 

   if (get_option('about_hide'.$lang ) != '1')  : 

?>

<!-- About section start -->

<section class="about-area pt-50 pb-50 bg-pattern">

     <div class="container-fluid">

        <div class="section-title white-title">

            <h2>

                <?=get_option('about_title'.$lang); ?>

            </h2>

        </div>

        <div class="about-content">

            <div class="row align-items-center">

                <div class="col-lg-5">

                    <div class="experience <?php if ( ICL_LANGUAGE_CODE=='ar' ): ?>fadeInRight<?php else: ?><?php if ( ICL_LANGUAGE_CODE=='ar' ): ?>fadeInRight<?php else: ?>fadeInLeft<?php endif ?><?php endif ?> wow animated" data-delay-in="10" data-wow-delay="300ms" data-animation-in="<?php if ( ICL_LANGUAGE_CODE=='ar' ): ?>fadeInRight<?php else: ?><?php if ( ICL_LANGUAGE_CODE=='ar' ): ?>fadeInRight<?php else: ?>fadeInLeft<?php endif ?><?php endif ?>">

                        <img src="<?=get_option('about_img') ?>">

                    </div>

                </div>

                <div class="col-lg-7">

                    <div class="single-about-content fadeInRight wow animated" data-delay-in="15" data-wow-delay="500ms" data-animation-in="fadeInRight">

                        <div class="section-title left-title">

                            <p>

                                <?=get_option('about_content'.$lang);?>

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

<main class="main-wrapper">

    <img class="main-img" src="<?=coolers_URL?>assets/img/vector-white.png">

    <?php 

        if (get_option('services_hide'.$lang ) != '1')  : 

        $no = get_option('posts_per_page');

        $posts_in = get_option('services'.$lang);

        $number = 200;

        $services = albargasy_get_services_with_select_services($no,$posts_in);

        if($services->have_posts()) :

    ?>

    <!-- Start Our services area -->

    <div class="services-area bg-pattern bg-pattern-white">

        <div class="container-fluid">

            <div class="section-title">

                <h2><?=get_option('services_title'.$lang);?></h2>

            </div>

            <div class="row">

                <?php 

                    while($services->have_posts()) : $services->the_post();

                ?>

                <div class="col-md-3">

                    <div class="single-services-card fadeInUp wow animated" data-wow-delay="<?=$number;?>ms">

                        <a href="<?php the_permalink();?>">

                            <div class="services-icon">

                                <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">

                            </div>

                            <h3><?php the_title();?></h3>

                            <?php the_excerpt();?>

                             <a href="<?php the_permalink();?>" class="default-btn"><?php _e('VIEW MORE', 'coolers')?></a>

                        </a>

                    </div>

                </div>

                <?php $number = $number + 100; endwhile; wp_reset_query();?>

            </div>

        </div>

    </div>

    <!-- End Our services area -->

    <?php endif;?>

    <div class="border-5"> </div>

    <?php endif;?>

    <?php 

        if (get_option('products_hide'.$lang ) != '1')  : 

        $no = get_option('posts_per_page');

        $posts_in = get_option('products'.$lang);

        $number = 200;

        $products = albargasy_get_products_with_select_products($no,$posts_in);

        if($products->have_posts()) :

    ?>

    <!-- Start Single ptoducts Area -->

    <div class="products-area bg-pattern bg-pattern-white">

        <div class="container-fluid">

            <div class="section-title">

                <h2><?=get_option('products_title'.$lang);?></h2>

            </div>

            <div class="products-slider owl-carousel owl-theme">

                <?php 

                    while($products->have_posts()) : $products->the_post();

                ?>

                <div class="single-products-card fadeInUp wow animated" data-wow-delay="<?=$number?>ms">

                    <a href="<?php the_permalink();?>">

                        <div class="products-icon">

                            <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">

                        </div>

                         <h3><?php the_title();?></h3>

                            <?php the_content();?>

                         <a href="<?php the_permalink();?>" class="default-btn"><?php _e('VIEW MORE', 'coolers')?></a>

                    </a>

                </div>

                <?php $number = $number + 100; endwhile; wp_reset_query();?>

            </div>

        </div>

    </div>

    <!-- End Single ptoducts Area -->

    <?php endif;endif ?>
    <?php 

        if (get_option('partners_hide'.$lang ) != '1')  : 

        $no = get_option('posts_per_page');

        $posts_in = get_option('brands'.$lang);

        $number = 200;

        $brands = albargasy_get_partners_with_select_partners($no,$posts_in);

        if($brands->have_posts()) :

    ?>
    <!-- Start Single Brands Area -->
    <div class="products-area bg-pattern bg-pattern-white">
        <div class="container">
            <div class="section-title">
                <h2><?=get_option('partners_title'.$lang);?> </h2>
            </div>
            <div class="brands-logos bg-white">
                <div class="products-slider brands-slider owl-carousel owl-theme">
                    <?php while($brands->have_posts()) : $brands->the_post();?>
                    <div class="single-products-card single-brand-card fadeInUp wow animated" data-wow-delay="<?=$number?>ms">
                        <div class="products-icon">
                            <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                        </div>
                    </div>
                    <?php $number = $number + 100; endwhile; wp_reset_query();?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Single Brands Area -->
    <?php endif;endif ?>
    <img class="main-bottom" src="<?=coolers_URL?>assets/img/vector-bottom.png">
</main>

<?php get_footer();?>