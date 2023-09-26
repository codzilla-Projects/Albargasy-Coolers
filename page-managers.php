<?php

    if ( empty(pll_current_language()) )

        $lang = '_'.pll_default_language(); 

    else

        $lang = '_'.pll_current_language();

	/**

	** Template Name: Managers Template

	**/

	get_header(); 

?>

<!-- End Navbar Area -->

<section class="managment_page bg-pattern bg-pattern-white">

  <!-- Start services Area -->

<?php 

    if (get_option('chairman_hide'.$lang ) != '1')  : 

    $chairman = albargasy_get_directors_chairman(1);

    if($chairman->have_posts()) : 

?>

<div class="services-area management-page-area chairman ">

    <div class="container">

        <div class="section-title">

            <h2><?=get_option('chairman_title'.$lang)?></h2>

        </div>

           <?php 

		        while($chairman->have_posts()) : $chairman->the_post();

		        $coolers_managers_position = get_post_meta( get_the_ID(), 'coolers_managers_position', true );

		    ?>

        <div class="row">

            <div class="col-md-5">

                <div class="single-services-card <?php if ( ICL_LANGUAGE_CODE=='ar' ): ?>fadeInRight<?php else: ?>fadeInLeft<?php endif ?> wow animated" data-wow-delay="200ms">

                    <div class="services-icon">

                        <img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title()?>">

                    </div>

                </div>

            </div>

            <div class="col-md-7">

                <div class="single-services-card fadeInRight wow animated" data-wow-delay="200ms">

                    <a href="<?php the_permalink();?>"><h3 class="text-start"><?php the_title()?></h3></a>

                    <h5 class="text-start"><?=$coolers_managers_position;?></h5>

                        <?php the_content();?>

                </div>

            </div>

        </div>

        <?php $number = $number + 100; endwhile; wp_reset_query();?>



    </div>

</div>

<!-- End services Area -->

<?php endif;endif;?>

<?php 

    if (get_option('directors_hide'.$lang ) != '1')  : 

	$number = 300;

    $post_in = get_option('directors'.$lang);

	$directores = albargasy_get_directors_with_post_in(3, $post_in);

	if($directores->have_posts()) : 

?>

<!-- Start services Area -->

<div class="services-area management-page-area ">

    <div class="container">

        <div class="row">

        	<?php 

		        while($directores->have_posts()) : $directores->the_post();

		        $coolers_managers_position = get_post_meta( get_the_ID(), 'coolers_managers_position', true );

		    ?>

            <div class="col-md-4">

                <div class="single-services-card fadeInUp wow animated" data-wow-delay="<?=$number?>ms">

                    <div class="services-icon management">

                        <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">

                    </div>

                    <a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>

                    <h5><?=$coolers_managers_position;?></h5>

                </div>

            </div>

            <?php $number = $number + 100; endwhile; wp_reset_query();?>

        </div>

    </div>

</div>

<!-- End services Area -->

<?php endif;endif;?>

</section>

<?php get_footer()?>