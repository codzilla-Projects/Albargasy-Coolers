<?php
    get_header(); 
    if (have_posts()) : while (have_posts()) : the_post(); $page_id = get_the_ID();?>
    <section class="about-us-content pt-100 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="single-about-us-content">
                        <p>
                            <?php the_content();?>
                        </p>                     
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile;endif; ?>
<?php get_footer();?>