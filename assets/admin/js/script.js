jQuery(document).ready(function($) {
    $('.js-example-basic-multiple').select2();
    $('.coolers_header_logo_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.coolers_header_logo_img').attr('src', attachment.url);

            $('.coolers_header_logo_img_url').val(attachment.url);

        })

        .open();

    });  
    $('.coolers_pages_logo_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.coolers_pages_logo_img').attr('src', attachment.url);

            $('.coolers_pages_logo_img_url').val(attachment.url);

        })

        .open();

    });  


    $('.coolers_sticky_logo_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.coolers_sticky_logo_img').attr('src', attachment.url);

            $('.coolers_sticky_logo_img_url').val(attachment.url);

        })

        .open();

    }); 



    $('.coolers_favicon_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.coolers_favicon_img').attr('src', attachment.url);

            $('.coolers_favicon_img_url').val(attachment.url);

        })

        .open();

    }); 



    $('.coolers_footer_logo_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.coolers_footer_logo_img').attr('src', attachment.url);

            $('.coolers_footer_logo_img_url').val(attachment.url);

        })

        .open();

    });
    
    
    $('.hero_bg_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.hero_bg_img').attr('src', attachment.url);
            $('.hero_bg_img_url').val(attachment.url);
        })
        .open();
    }); 
    /************************************************************************************/
    $('.hero_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.hero_img').attr('src', attachment.url);
            $('.hero_img_url').val(attachment.url);
        })
        .open();
    });
    /************************************************************************************/
    $('.hero_pattern_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.hero_pattern_img').attr('src', attachment.url);
            $('.hero_pattern_img_url').val(attachment.url);
        })
        .open();
    });
    /************************************************************************************/
    $('.about_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.about_img').attr('src', attachment.url);
            $('.about_img_url').val(attachment.url);
        })
        .open();
    }); 

    /**************************************About Us Page*********************************/
    $('.who_we_are_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.who_we_are_img').attr('src', attachment.url);
            $('.who_we_are_img_url').val(attachment.url);
        })
        .open();
    });
    /*------------------------------------------------------------------------------*/
    $('.awards_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.awards_img').attr('src', attachment.url);
            $('.awards_img_url').val(attachment.url);
        })
        .open();
    });
    /*------------------------------------------------------------------------------*/
    $('.mission_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.mission_img').attr('src', attachment.url);
            $('.mission_img_url').val(attachment.url);
        })
        .open();
    });
    /*------------------------------------------------------------------------------*/
    $('.vision_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.vision_img').attr('src', attachment.url);
            $('.vision_img_url').val(attachment.url);
        })
        .open();
    });
    /*------------------------------------------------------------------------------*/
    $('.strategy_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.strategy_img').attr('src', attachment.url);
            $('.strategy_img_url').val(attachment.url);
        })
        .open();
    });
    /*------------------------------------------------------------------------------*/
    $('.technical_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.technical_img').attr('src', attachment.url);
            $('.technical_img_url').val(attachment.url);
        })
        .open();
    });
    /*------------------------------------------------------------------------------*/
    $('.product_maintenance_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.product_maintenance_img').attr('src', attachment.url);
            $('.product_maintenance_img_url').val(attachment.url);
        })
        .open();
    });
    /*------------------------------------------------------------------------------*/
});
