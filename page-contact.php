<?php
/**
** Template Name: Contact Us Template
**/
    get_header();
    if ( empty(pll_current_language()) )
        $lang = '_'.pll_default_language();
    else
        $lang = '_'.pll_current_language();
    get_template_part('template-parts/page-breadcrumb');

    $shortCode=get_option('short_code'.$lang);

?>
<div class="contact-us-area products-area maintenance bg-pattern bg-pattern-white">
    <?php if(get_option('contact_hide'.$lang) != 1) {  ?>
    <div class="container px-10">

        <div class="section-title">

            <h2><?=get_option('contact_title'.$lang);?></h2>

        </div>

        <div class="maintenance-content">
            <img src="<?=coolers_URL;?>assets/img/pattern-green.png" class="pattern-right">
            <div class="row">
                <div class="col-lg-5">
                    <div class="single-contact-text">
                        <p>
                         <?=get_option('contact_content'.$lang);?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-form"> <?php echo do_shortcode($shortCode); ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php } ?>

</div>

<div class="contact-details bg-pattern bg-pattern-white">
    <div class="container px-10">
        <div class="row">
        <?php if(get_option('address_section_hide'.$lang) != 1) {  ?>

            <div class="col-md-6">
                <div class="contact-address">
                    <img src="<?=coolers_URL;?>assets/img/map-img.png">
                    <p>
                         <span>
                         -<?= get_option('contact_first_aswan_address'.$lang) ?>
                         </span>
                         <span>
                         -<?php echo get_option('contact_seconde_aswan_address'.$lang)?>
                         </span>

                         <span>
                         -<?= get_option('contact_third_aswan_address'.$lang) ?>
                         </span>

                         <span>
                             <strong>
                             <?php if ( empty(pll_current_language()) && pll_default_language() == 'en'){?>
                                Mobile:
                            <?php }elseif ( empty(pll_current_language()) && pll_default_language() == 'ar'){ ?>
                                موبايل:
                             <?php }elseif ( pll_current_language() == 'ar'){ ?>
                                موبايل:
                            <?php }elseif ( pll_current_language() == 'en'){ ?>
                                Mobile:
                             <?php } ?>                                  
                             <a href="tel:<?=get_option('contact_first_aswan_mobile'.$lang)?>"><?=get_option('contact_first_aswan_mobile'.$lang)?></a>
                             </strong>
                         </span>
                         <span>
                             <strong>
                             <?php if ( empty(pll_current_language()) && pll_default_language() == 'en'){?>
                                Mobile:
                            <?php }elseif ( empty(pll_current_language()) && pll_default_language() == 'ar'){ ?>
                                موبايل:
                             <?php }elseif ( pll_current_language() == 'ar'){ ?>
                                موبايل:
                            <?php }elseif ( pll_current_language() == 'en'){ ?>
                                Mobile:
                             <?php } ?>                                   
                             <a href="tel:<?= get_option('contact_seconde_aswan_mobile'.$lang) ?>"><?= get_option('contact_seconde_aswan_mobile'.$lang) ?></a>
                             </strong>
                         </span>
                     </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="contact-address">
                    <img src="<?=coolers_URL;?>assets/img/map-img.png">
                    <p>
                         <span>
                         -<?= get_option('contact_sz_address'.$lang) ?>
                         </span>


                         
                         <span>
                             <strong>
                             <?php if ( empty(pll_current_language()) && pll_default_language() == 'en'){?>
                                Tel:
                            <?php }elseif ( empty(pll_current_language()) && pll_default_language() == 'ar'){ ?>
                                هاتف:
                             <?php }elseif ( pll_current_language() == 'ar'){ ?>
                                هاتف:
                            <?php }elseif ( pll_current_language() == 'en'){ ?>
                                Tel:
                             <?php } ?>
                                 <a href="tel:<?=get_option('contact_sz_tel'.$lang)?>"><?=get_option('contact_sz_tel'.$lang)?></a>
                             </strong>
                         </span>


                         <span>
                             <strong>
                             <?php if ( empty(pll_current_language()) && pll_default_language() == 'en'){?>
                                Mobile:
                            <?php }elseif ( empty(pll_current_language()) && pll_default_language() == 'ar'){ ?>
                                موبايل:
                             <?php }elseif ( pll_current_language() == 'ar'){ ?>
                                موبايل:
                            <?php }elseif ( pll_current_language() == 'en'){ ?>
                                Mobile:
                             <?php } ?>
                                 <a href="tel:<?=get_option('contact_sz_mobile'.$lang)?>"><?=get_option('contact_sz_mobile'.$lang)?></a>
                             </strong>
                         </span>
                         <span>
                             <strong>
                             <?php if ( empty(pll_current_language()) && pll_default_language() == 'en'){?>
                                Fax:
                            <?php }elseif ( empty(pll_current_language()) && pll_default_language() == 'ar'){ ?>
                                فاكس:
                             <?php }elseif ( pll_current_language() == 'ar'){ ?>
                                فاكس:
                            <?php }else{ ?>
                                Fax:
                             <?php } ?>                                 
                             <a href="tel:<?= get_option('contact_sz_fax'.$lang) ?>"><?= get_option('contact_sz_fax'.$lang) ?></a>
                             </strong>
                         </span>
                     </p>
                </div>
            </div>
        <?php } ?>

            <div class="col-md-12">
                <div class="contact-email">
                    <img src="<?=coolers_URL;?>assets/img/email.png">
                    <a href="mailto:<?= get_option('contact_email'.$lang ) ?>">
                        <?= get_option('contact_email'.$lang ) ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer()?>
