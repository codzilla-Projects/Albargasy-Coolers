<?php
function contact_content_area_callback() {
    if ( empty(pll_current_language()) )
        $lang = '_'.pll_default_language();
    else
        $lang = '_'.pll_current_language();

    //variables
    $contact_title='contact_title'.$lang ;

    $content_title='contact_content'.$lang ;

    $first_aswan_address='contact_first_aswan_address'.$lang ;
    $seconde_aswan_address='contact_seconde_aswan_address'.$lang;
    $third_aswan_address='contact_third_aswan_address'.$lang;
    $fourth_aswan_address='contact_fourth_aswan_address'.$lang;

    $first_mobile_title='contact_first_aswan_mobile'.$lang ;
    $seconde_aswan_mobile='contact_seconde_aswan_mobile'.$lang ;

    $sz_address='contact_sz_address'.$lang ;
    $sz_tel='contact_sz_tel'.$lang ;
    $sz_mobile='contact_sz_mobile'.$lang ;
    $sz_fax='contact_sz_fax'.$lang ;


    $form_shortcode='short_code'.$lang ;

    $contact_email='contact_email'.$lang ;



    $wp_editor_settings = array(
        'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ),
        'textarea_rows'=> 5,
        'drag_drop_upload'=> true,
        'wpautop' => false,
        'media_buttons'=> true,
        'class'=>'form-control'
    );

    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ):
        foreach ( $_POST as $key => $value ):

            if ( in_array( $key ,[$content_title,$form_shortcode] ) )
                $value = stripcslashes($value);

        update_option( $key , $value );
        endforeach;

        if(!isset($_POST['contact_hide'.$lang])) delete_option('contact_hide' .$lang);
        if(!isset($_POST['address_section_hide'.$lang])) delete_option('first_address_hide' .$lang);
    endif;

?>
 <div <?php if ( ICL_LANGUAGE_CODE=='ar' ){echo'dir="rtl"';} ?> class="container-fluid text-start padding-right-4">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 bg-gray mt-3 mb-3 rounded">
            <!-- Top Navigation -->
            <header class="codrops-header">
                <h1 class="text-center site-title"><span><?php _e('Contact Page Settings', 'coolers'); ?></span></h1>
            </header>
        </div>
        <br/>
        <div class="d-flex align-items-start p-0 m-0">
            <div class="nav flex-column nav-pills me-3 col-sm-3 col-md-3 col-lg-3 rounded" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true"><?php _e('Contact Settings','coolers') ?></button>
                <button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="false"><?php _e('Address','coolers') ?></button>

            </div>

            <div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent">
                <form method="POST" class = "form-horizontal form_back p-5 rounded">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">
                            <div class="form-group text-start">
                                <div class="inline-block">
                                    <?php $name = 'contact_hide'.$lang ; ?>
                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>
                                </div>
                                <label for="<?= $name ?>" class="text-white">
                                    <?php _e('Hide Section','coolers') ?>
                                </label>
                            </div>
                            <div class="row"> 
                                <div class="col-md-12">
                                    <div class="">
                                        <div class="form-group">
                                            <label for="<?= $contact_title ?>" class="col-sm-12 text-start control-label text-white">
                                                <?php _e('Contact Title','coolers') ?>
                                            </label>
                                            <div class="col-sm-12 text-start ">
                                                <input type="text" class="form-control" id="<?=$contact_title ?>" name="<?=$contact_title ?>" value="<?= get_option($contact_title) ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="">
                                        <div class="form-group text-start">
                                            <label for="<?= $content_title ?>" class="control-label text-white">
                                                <?php _e('Contact Content','coolers') ?>
                                            </label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option($content_title), $content_title,  $wp_editor_settings);  ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="">
                                        <div class="form-group">
                                            <label for="<?= $form_shortcode ?>" class="col-sm-12 text-start control-label text-white">
                                                <?php _e('Form Shortcode','coolers') ?>
                                            </label>
                                            <div class="col-sm-12 text-start ">
                                                <input type="text" class="form-control" id="<?=$form_shortcode ?>" name="<?=$form_shortcode ?>" value="<?= htmlspecialchars(get_option($form_shortcode));  ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">
                        <div class="form-group text-start">
                                            <div class="inline-block">
                                                <?php $name = 'address_section_hide'.$lang ; ?>
                                                <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>
                                            </div>
                                            <label for="<?= $name ?>" class="text-white">
                                                <?php _e('Hide Section','coolers') ?>
                                            </label>
                                        </div>
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="services">
                                        <div  class="col-sm-12 text-start control-label text-white">
                                        <?php _e('Aswan','coolers') ?>
                                        </div>
                                    

                                        <div class="form-group">
                                            <label for="<?= $first_aswan_address ?>" class="col-sm-12 text-start control-label text-white">
                                                <?php _e('First Branch Address','coolers') ?>
                                            </label>
                                            <div class="col-sm-12 text-start ">
                                                <input type="text" class="form-control" id="<?= $first_aswan_address ?>" name="<?= $first_aswan_address ?>" value="<?= get_option($first_aswan_address) ?>">
                                            </div>
                                        </div>

                                    


                                        <div class="form-group">
                                            <label for="<?= $seconde_aswan_address ?>" class="col-sm-12 text-start control-label text-white">
                                                <?php _e('Seconde Branch Address','coolers') ?>
                                            </label>
                                            <div class="col-sm-12 text-start ">
                                                <input type="text" class="form-control" id="<?= $seconde_aswan_address ?>" name="<?= $seconde_aswan_address ?>" value="<?= get_option($seconde_aswan_address) ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="<?= $third_aswan_address ?>" class="col-sm-12 text-start control-label text-white">
                                                <?php _e('Third Branch Address','coolers') ?>
                                            </label>
                                            <div class="col-sm-12 text-start ">
                                                <input type="text" class="form-control" id="<?= $third_aswan_address ?>" name="<?= $third_aswan_address ?>" value="<?= get_option($third_aswan_address) ?>">
                                            </div>
                                        </div>


                                    

                                    
                                        <div class="form-group">
                                            <label for="<?= $first_mobile_title ?>" class="col-sm-12 text-start control-label text-white">
                                                <?php _e('First Mobile','coolers') ?>
                                            </label>
                                            <div class="col-sm-12 text-start ">
                                                <input type="text" class="form-control" id="<?= $first_mobile_title ?>" name="<?= $first_mobile_title ?>" value="<?= get_option($first_mobile_title) ?>">
                                            </div>
                                        </div>
                                   

                                    
                                        <div class="form-group">
                                            <label for="<?= $seconde_aswan_mobile ?>" class="col-sm-12 text-start control-label text-white">
                                                <?php _e('Seconde Mobile','coolers') ?>
                                            </label>
                                            <div class="col-sm-12 text-start ">
                                                <input type="text" class="form-control" id="<?= $seconde_aswan_mobile ?>" name="<?= $seconde_aswan_mobile ?>" value="<?= get_option($seconde_aswan_mobile) ?>">
                                            </div>
                                        
                                </div>

                                </div>




                                </div>

                                
                                <div class="col-md-6">
                                    <div class="services">
                                            <div  class="col-sm-12 text-start control-label text-white">
                                                <?php _e('Sheikh Zayed','coolers') ?>
                                            </div>
                                        <div class="form-group">
                                            <label for="<?= $sz_address ?>" class="col-sm-12 text-start control-label text-white">
                                                <?php _e('Address','coolers') ?>
                                            </label>
                                            <div class="col-sm-12 text-start ">
                                                <input type="text" class="form-control" id="<?= $sz_address ?>" name="<?= $sz_address ?>" value="<?= get_option($sz_address) ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="<?= $sz_tel ?>" class="col-sm-12 text-start control-label text-white">
                                                <?php _e('Tel','coolers') ?>
                                            </label>
                                            <div class="col-sm-12 text-start ">
                                                <input type="text" class="form-control" id="<?= $sz_tel ?>" name="<?= $sz_tel ?>" value="<?= get_option($sz_tel) ?>">
                                            </div>
                                        </div>
                                    

                                    
                                        <div class="form-group">
                                            <label for="<?= $sz_mobile ?>" class="col-sm-12 text-start control-label text-white">
                                                <?php _e('Mobile','coolers') ?>
                                            </label>
                                            <div class="col-sm-12 text-start ">
                                                <input type="text" class="form-control" id="<?= $sz_mobile ?>" name="<?= $sz_mobile ?>" value="<?= get_option($sz_mobile) ?>">
                                            </div>
                                        </div>
                                   

                                    
                                        <div class="form-group">
                                            <label for="<?= $sz_fax ?>" class="col-sm-12 text-start control-label text-white">
                                                <?php _e('Fax','coolers') ?>
                                            </label>
                                            <div class="col-sm-12 text-start ">
                                                <input type="text" class="form-control" id="<?= $sz_fax ?>" name="<?= $sz_fax ?>" value="<?= get_option($sz_fax) ?>">
                                            </div>
                                        
                                </div>

                                </div>




                                </div>

                                <div class=""col-md-12>
                                <div class="form-group">
                                            <label for="<?= $contact_email ?>" class="col-sm-12 text-start control-label text-white">
                                                <?php _e('Email','coolers') ?>
                                            </label>
                                            <div class="col-sm-12 text-start ">
                                                <input type="text" class="form-control" id="<?= $contact_email ?>" name="<?= $contact_email ?>" value="<?= get_option($contact_email) ?>">
                                            </div>
                                        </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="submit" class="btn btn-default btn-block btn-lg w-100 mt-3 site_save_route" name="albargasy_save_<?=$lang?>" value="<?php _e('Save Settings', 'coolers') ?>">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!-- /container -->
<?php
}
