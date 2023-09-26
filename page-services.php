<?php 

	if ( empty(pll_current_language()) )

        $lang = '_'.pll_default_language(); 

    else

        $lang = '_'.pll_current_language();

	/**

	** Template Name: Services Template

	**/

	get_header(); 

    if (get_option('services_page_hide'.$lang) != '1')  : 

    $no = get_option('posts_per_page');

    $posts_in = get_option('services_page'.$lang);

    $number = 200;

    $services = albargasy_get_services_with_select_services($no,$posts_in);

    if($services->have_posts()) :

?>

<!-- Start services Area -->

<div class="services-area services-page-area bg-pattern bg-pattern-white">

    <div class="container">

        <div class="section-title">

            <h2><?=get_option('services_title'.$lang) ?></h2>

        </div>

        <div class="row">

        	<?php 

                while($services->have_posts()) : $services->the_post();

            ?>

            <div class="col-md-4">

                <div class="single-services-card fadeInUp wow animated" data-wow-delay="<?=$number;?>ms">

                    <a href="<?php the_permalink();?>">

                        <div class="services-icon">

                            <img src="<?php the_post_thumbnail_url();?>" alt="services-1">

                        </div>

                        <h3><?php the_title();?></h3>

                           <?php the_content();?>
                    </a>

                </div>

            </div>

            <?php $number = $number + 100; endwhile; wp_reset_query();?>

        </div>

    </div>

</div>

<!-- End services Area -->

<?php endif;endif;?>

<?php get_footer()?>