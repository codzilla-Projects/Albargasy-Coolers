<?php 
	/**
	** Template Name: Media Center Template
	**/
	get_header(); 
	if ( empty(pll_current_language()) )
        $lang = '_'.pll_default_language(); 
    else
        $lang = '_'.pll_current_language();

?>
<?php 
    $no = get_option('posts_per_page');
    $photos = albargasy_get_photos($no);
    $photo_count = 1;
    $num = $photos->post_count;
    if($photos->have_posts()) :
?>
<!-- Start Single products Area -->
<div class="products-area media-center techincal maintenance bg-pattern bg-pattern-white">
    <div class="container">
        <div class="section-title">
            <h2><?php wp_title( '', true, 'right' );?></h2>
        </div>
        <div class="row">
        	<?php while($photos->have_posts()) : $photos->the_post();?>
            <div class="<?php if( $num == $photo_count ):?>col-xl-12 col-lg-12 col-md-12 col-sm-12 <?php else: ?>col-xl-4 col-lg-4 col-md-6 col-sm-6 <?php endif;?>">
                <div class="gallery-item">
                    <a href="<?php the_post_thumbnail_url(null,'full'); ?>" data-fancybox="gallery" data-caption="<?php the_title();?>">
                        <img src="<?php the_post_thumbnail_url(null,'large'); ?>">
                    </a>
                </div>
            </div>
        	<?php $photo_count++; endwhile; wp_reset_query();?>
        </div>
        <div class="row">
            <nav class="page-pagination">
                <?php    
                    $args = array(
                       'format'             => '?paged=%#%',
                       'current'            => max( 1, get_query_var('paged') ),
                       'total'              => $photos->max_num_pages,
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