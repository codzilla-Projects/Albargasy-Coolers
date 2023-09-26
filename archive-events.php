<?php 
	/**
	** Template Name: Events Template
	**/
	get_header();
	if ( empty(pll_current_language()) )
        $lang = '_'.pll_default_language(); 
    else
        $lang = '_'.pll_current_language();
?>
<?php 
    $no = get_option('posts_per_page');
    $events = albargasy_get_events($no);
    if($events->have_posts()) :
?>
<!-- Start Single products Area -->
<div class="products-area media-center media-center-2 techincal maintenance bg-pattern bg-pattern-white">
    <div class="container">
        <div class="section-title">
            <h2><?php wp_title( '', true, 'right' );?></h2>
        </div>
        <div class="row">
        	<?php while($events->have_posts()) : $events->the_post();?>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="gallery-item">
                    <a href="<?php the_permalink();?>">
                        <img src="<?php the_post_thumbnail_url();?>">
                    </a>
                    <div class="gallery-description">
                        <p><?php the_title();?></p>
                        <a class="gallery-link" href="<?php the_permalink();?>">
                            <i class='bx bx-chevrons-right'></i>
                        </a>
                    </div>
                </div>
            </div>
        	<?php endwhile; wp_reset_query();?>
        </div>
        <div class="row">
	        <nav class="page-pagination">
	            <?php    
	                $args = array(
	                   'format'             => '?paged=%#%',
	                   'current'            => max( 1, get_query_var('paged') ),
	                   'total'              => $events->max_num_pages,
	                   'show_all'           => false,
	                   'end_size'           => 1,
	                   'mid_size'           => 2,
	                   'prev_next'          => true,
	                   'next_text'          => '<i class="bx bx-chevron-right"></i>',
	                   'prev_text'          => '<i class="bx bx-chevron-left"></i>',
	                   'type'               => 'list',
	                  );
	            ?>
	            <?php echo paginate_links($args); ?>       
	        </nav>
	    </div>
    </div>
</div>
<!-- End Single products Area -->
<?php endif;?>
<?php get_footer()?>