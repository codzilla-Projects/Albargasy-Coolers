<?php  
	get_header(); 
	if ( have_posts() ) : while ( have_posts() ) : the_post(); $post_id = get_the_ID();
	$coolers_managers_position = get_post_meta( get_the_ID(), 'coolers_managers_position', true );
?>
<section class="managment_page single-director bg-pattern bg-pattern-white">
    <!-- Start services Area -->
    <div class="services-area management-page-area chairman ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="single-services-card <?php if ( ICL_LANGUAGE_CODE=='ar' ): ?>fadeInRight<?php else: ?>fadeInLeft<?php endif ?> wow animated" data-wow-delay="200ms">
                        <div class="services-icon">
                            <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single-services-card fadeInRight wow animated" data-wow-delay="200ms">
                        <h3 class="text-start"><?php the_title();?></h3>
                        <h5 class="text-start"><?=$coolers_managers_position;?></h5>
                        <p>
                            <?php the_content();?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End services Area -->
</section>
<?php endwhile; endif; get_footer();?>