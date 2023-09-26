jQuery(function ($) {
    'use strict';
	// Mean Menu
	$('.mean-menu').meanmenu({
		meanScreenWidth: "991"
	}); 
	// Others Option For Responsive JS
	$(".others-option-for-responsive .dot-menu").on("click", function(){
		$(".others-option-for-responsive .container .container").toggleClass("active");
	});
	// Header Sticky
	$(window).on('scroll',function() {
		if ($(this).scrollTop() > 245){  
			$('.navbar-area').addClass("is-sticky");
		}
		else{
			$('.navbar-area').removeClass("is-sticky");
		}
	});
	$(".navbar-nav li").on("click", function() {
        $(this).siblings().removeClass('active');
        $(this).addClass("active");
    });
    $('li.dropdown').on('click', function() {
	    var $el = $(this);
	    if ($el.hasClass('open')) {
	        var $a = $el.children('a.dropdown-toggle');
	        if ($a.length && $a.attr('href')) {
	            location.href = $a.attr('href');
	        }
	    }
	});
		// Experts Slider
	$('.products-slider').owlCarousel({
		loop: true,
		margin: 20,
		nav: false,
		dots: true,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		navText: [
			"<i class='bx bxs-left-arrow'></i>" ,
            "<i class='bx bxs-right-arrow'></i>" ,
        ],  
		responsivee:{
			0:{ 
				items:1
			},
			570:{
				items:2
			},
			768:{
				items:2
			},
			992:{
				items:3
			},
			1200:{
				items:4
			}
		}
	});


	$('.products-page-slider').owlCarousel({
		loop: true,
		margin: 20,
		nav: true,
		dots: true,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		navText: [
			"<i class='bx bxs-left-arrow'></i>" ,
            "<i class='bx bxs-right-arrow'></i>" ,
        ],  
		responsivee:{
			0:{ 
				items:1
			},
			570:{
				items:2
			},
			768:{
				items:2
			},
			992:{
				items:3
			},
			1200:{
				items:4
			}
		}
	});

	/* product left start */
	if($(".product-left").length){
		var productSlider = new Swiper('.product-slider', {
			spaceBetween: 0,
			centeredSlides: false,
			loop:true,
			direction: 'horizontal',
			loopedSlides: 3,
			resizeObserver:true,
		});
		var productThumbs = new Swiper('.product-thumbs', {
			spaceBetween: 20,
			centeredSlides: true,
			loop: true,
			slideToClickedSlide: true,
			direction: 'horizontal',
			slidesPerView: 3,
			loopedSlides: 3,
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
		});
		productSlider.controller.control = productThumbs;
		productThumbs.controller.control = productSlider;
	}
	/* 	product left end */
	new WOW().init();
	// Go to Top
	$(function(){
		// Scroll Event
		$(window).on('scroll', function(){
			var scrolled = $(window).scrollTop();
			if (scrolled > 100) $('.go-top').addClass('active');
			if (scrolled < 100) $('.go-top').removeClass('active'); 
		});  
		// Click Event
		$('.go-top').on('click', function() {
			$("html, body").animate({ scrollTop: "0" },  100);
		});
	});
	// Preloader
	jQuery(window).on('load', function() {
		$('.loader-wrapper').addClass('preloader-deactivate');
	}) 
  	// Fancybox Config
	if (typeof fancybox !== "undefined") {
		$('[data-fancybox="gallery"]').fancybox({
		  buttons: [
		    "slideShow",
		    "thumbs",
		    "zoom",
		    "fullScreen",
		    "share",
		    "close"
		  ],
		  loop: true,
		  protect: true
		})
	};
}(jQuery));
