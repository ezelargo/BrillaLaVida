/*
Author       : Theme_Ocean.
Template Name: Bornomala - Kindergarten & School HTML Template
Version      : 1.0
*/
(function($) {
	'use strict';
	
	jQuery(document).on('ready', function(){
	
		/*PRELOADER JS*/
		$(window).on('load', function() { 
			$('.status').fadeOut();
			$('.preloader').delay(350).fadeOut('slow'); 
		}); 
		/*END PRELOADER JS*/

		/*START MENU JS*/
			$('a.page-scroll').on('click', function(e){
				var anchor = $(this);
				$('html, body').stop().animate({
					scrollTop: $(anchor.attr('href')).offset().top - 50
				}, 1500);
				e.preventDefault();
			});		

			$(window).on('scroll', function() {
			  if ($(this).scrollTop() > 100) {
				$('.menu-top').addClass('menu-shrink');
			  } else {
				$('.menu-top').removeClass('menu-shrink');
			  }
			});		
			
			$(document).on('click','.navbar-collapse.in',function(e) {
			if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
				$(this).collapse('hide');
			}
			});				
		/*END MENU JS*/ 

		/* START PORTFOLIO JS */
			jQuery('.grid').mixitup({
			targetSelector: '.mix',
			});
			$('.image-popup').magnificPopup({
				type: 'image',
				closeOnContentClick: true,
				mainClass: 'mfp-img-mobile',
				image: {
					verticalFit: true
				}
			});
		/* END PORTFOLIO JS */

		/* START COUNTDOWN JS*/
		$('.timer').counterUp({
			delay: 50,
			time: 3000
		});		
		/* END COUNTDOWN JS */

		/*START SLIDER JS*/
			$('.carousel').carousel({
				interval:8000,
				pause:'false',
			});
		/*END SLIDER JS*/	

		/*Event JS*/
		$('.event-carousel').owlCarousel({
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
		  items : 2,
		  itemsDesktop : [1199,2],
		  itemsDesktopSmall : [979,2],
			itemsTablet : [768,1],
			itemsMobile	: [479,1],		  
		}); 
    
		/*Testimonials JS*/
		$('#testimonial__carousel').owlCarousel({
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
		  items : 1,
		  itemsDesktop : [1199,1],
		  itemsDesktopSmall : [979,1],
			itemsTablet : [768,1],
			itemsMobile	: [479,1],		  
		}); 
			
	}); 			
	
	/*START WOW ANIMATION JS*/
	  new WOW().init();	
	/*END WOW ANIMATION JS*/	
	
				
})(jQuery);


  

