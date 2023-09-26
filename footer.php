<?php
    if ( empty(pll_current_language()) )
        $lang = '_'.pll_default_language(); 
    else
        $lang = '_'.pll_current_language();
?>
<!-- Start Footer Area -->
<div class="footer-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6" data-cue="slideInUp">
                <div class="footer-widget">
                    <a href="<?php bloginfo('url');?>">
                        <img src="<?=get_option('coolers_footer_logo_img');?>" class="black-logo" alt="<?php bloginfo('name');?>">
                    </a>
                    <p>
                        <?=get_option('coolers_location'.$lang);?>
                    </p>
                    <ul class="follow-list">
                    	<?php $instagram = get_option('coolers_insta');
                    		if (!empty($instagram)) : 
                    	?>
                        <li>
                            <a href="<?=$instagram?>" target="_blank">
                                <i class='bx bxl-instagram'></i>
                            </a>
                        </li>
                    	<?php endif;?>
                    	<?php $facebook = get_option('coolers_fb');
                    		if (!empty($facebook)) : 
                    	?>
                        <li>
                            <a href="<?=$facebook;?>" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <?php endif;?>
                    	<?php $twitter = get_option('coolers_twitter');
                    		if (!empty($twitter)) : 
                    	?>
                        <li>
                            <a href="<?=$twitter;?>" target="_blank">
                                <i class='bx bxl-twitter' ></i>
                            </a>
                        </li>
                        <?php endif;?>
                    	<?php $youtube = get_option('coolers_youtube');
                    		if (!empty($youtube)) : 
                    	?>
                        <li>
                            <a href="<?=$youtube;?>" target="_blank">
                                <i class='bx bxl-youtube' ></i>
                            </a>
                        </li>
                    	<?php endif;?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6" data-cue="slideInUp">
                <div class="footer-widget footer-widget-link2">
                    <h2><?php _e('Company', 'coolers')?></h2>
                    <?php if ( is_active_sidebar('first_sidebar') ) : ?>
                      	<?php dynamic_sidebar('first_sidebar'); ?>
                  	<?php endif; ?>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6" data-cue="slideInUp">
                <div class="footer-widget">
                    <h2>Subscribe Our Newsletter</h2>
                    <div class="touch-content">
                        <p>Keep Up On Our Always Evolving Products Features And Technology. Enter Your E-Mail And Subscribe To Our Newsletter</p>
                    </div>
                    <div class="subscribe-from">
                        <form class="newsletter-form" data-toggle="validator">
                            <input type="email" class="form-control" placeholder="Your Email" name="EMAIL" required autocomplete="off">
                            <button class="default-btn" type="submit">
                                Subscribe
                            </button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Footer Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class='bx bxs-chevrons-up'></i>
    <i class='bx bxs-chevrons-up'></i>
</div>
<!-- End Go Top Area -->
<?php wp_footer()?>