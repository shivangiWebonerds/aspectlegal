/*-------------------------------------------------------------------------------------------------------------------------------*/
/*This is main JS file that contains custom style rules used in this template*/
/*-------------------------------------------------------------------------------------------------------------------------------*/
/* Template Name: Medison*/
/* Version: 1.0 Initial Release*/
/* Build Date: 25-02-2015*/
/* Author: Volodymyr*/
/* Copyright: (C) 2015 */
/*-------------------------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------*/
/* TABLE OF CONTENTS: */
/*--------------------------------------------------------*/
/* 01 - VARIABLES */
/* 02 - page calculations */
/* 03 - function on document ready */
/* 04 - function on page load */
/* 05 - function on page resize */
/* 06 - function on page scroll */
/* 07 - swiper sliders */
/*-------------------------------------------------------------------------------------------------------------------------------*/

$(function() {


	"use strict";

	/*================*/
	/* 01 - VARIABLES */
	/*================*/
	var swipers = [], winW, winH, _isresponsive, xsPoint = 750, smPoint = 974, mdPoint = 1182;
	
	var counter_enable = true;
	var circliful = true;
	var progressbar = true;


	/*========================*/
	/* 02 - page calculations */
	/*========================*/
	function pageCalculations(){
		winW = $(window).width();
		winH = $(window).height();
	}


	/*=================================*/
	/* 03 - function on document ready */
	/*=================================*/

	//init bootstrap popovers
	$('[data-toggle="popover"]').popover();

	//center all images inside containers
	$('.center-image').each(function(){
		var bgSrc = $(this).attr('src');
		$(this).parent().addClass('background-block').css({'background-image':'url('+bgSrc+')'});
		$(this).hide();
	});
	
	//make last title letter blue
	$('.block-header .title, .highlight').each(function(){
	  var $this = $(this);
	  var sin = $this.html();
	  if (sin.length<1) return;
	  var sout = sin.substring(0, sin.length-1)+'<span class="blue">'+sin.charAt(sin.length-1)+'</span>';
	  $this.html(sout);
	});
	
	//start counter
	$('.stat-block').viewportChecker({
		callbackFunction: function(elem, action){
				if (counter_enable){
					$('.counter').each(function () {
					  var $this = $(this);
					  jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
						duration: 1000,
						easing: 'swing',
						step: function () {
						  $this.text(Math.ceil(this.Counter));
						}
					  });
					});
					counter_enable = false;					
				};
		}
	});

	//animation blocks
	$('.post').viewportChecker({
		classToAdd: 'animated',
		offset: 100
	});	
	
	//scrollUp
	$(function () {
		$.scrollUp({
			scrollText: ''
		});
	});


	
	//circliful
	$('#myStat').viewportChecker({
		callbackFunction: function(elem, action){
			if (circliful){
				$('#myStat').circliful();
				$('#myStat2').circliful();
				$('#myStat3').circliful();
				$('#myStat4').circliful();
			};
			circliful = false;
		}
	});

	//progress-bar
	$('.progress-bar').viewportChecker({
		callbackFunction: function(elem, action){
			
			if (progressbar){			
				$('.progress-bar').each(function() {
					var me = $(this);
					var count = me.find('.count');
					var perc = me.attr("data-percentage");

					//TODO: left and right text handling

					var current_perc = 0;

					var progress = setInterval(function() {
						if (current_perc>=perc) {
							clearInterval(progress);
						} else {
							current_perc +=1;
							me.css('width', (current_perc)+'%');
						}

						count.text((current_perc)+'%');

					}, 50);

				});
			};
			progressbar = false;
		}
	});

	//video-icon
	$('.video-icon').on('click', function(){
		var video = $(this).data('video');			
		$('.popup-video').show();
		$('.popup-video .movie iframe').attr('src',video);
			return false;});
			
	$('.video-about .close-button').on('click', function(){
		$('.popup-video').hide();
		$('.popup-video .movie iframe').attr('src','');
			return false;});
			
	//blog video
	$('.blog-video').on('click', function(){
		var blog_video = $(this).attr('data-src');
		$(this).hide();
		$(this).siblings('.popup-video').show();
		$(this).siblings('.popup-video').find('.movie iframe').attr('src',blog_video);
			return false;});
			
	$('.blog-entry .close-button').on('click',function(){
		$(this).parent().parent().siblings(".blog-video").show();
		$('.popup-video').hide();
		$('.popup-video movie iframe').attr('src','');
			return false;});	

	//mobile menu
	$('#navbar .dropdown-toggle span').on('click', function(){
		if ($(this).hasClass('open')){
			$(this).removeClass('open').addClass('clouse');
			$(this).parent().siblings("ul").hide();
			$(this).parent().parent().removeClass('open');
			return false;
		
		} else {
			$(this).removeClass('clouse').addClass('open');
			$(this).parent().siblings("ul").show();
			$(this).parent().parent().addClass('open');	
			return false;			
		}
	});
	


	
	
	/*============================*/
	/* 04 - function on page load */
	/*============================*/
	$(window).load(function(){
		$('body').addClass('loaded');		
		pageCalculations();
		initSwiper();
		$('#loader-wrapper').fadeOut(500);
		$('body,html').animate({'scrollTop':'0px'},2)

		//masonry
		if ($('.masonry-container').length) {
		   var $container = $('.masonry-container').isotope({
	   
					itemSelector: '.item',
					layoutMode: 'masonry',
					masonry: {
					  columnWidth: '.grid-sizer'
					}
				  });     
		}		
	});


	/*==============================*/
	/* 05 - function on page resize */
	/*==============================*/
	function resizeCall(){
		pageCalculations();
		$('.swiper-container').each(function(){
			swipers['swiper-'+$(this).attr('id')].reInit();
		});
	}
	$(window).resize(function(){
		resizeCall();
	});
	window.addEventListener("orientationchange", function() {
		resizeCall();
	}, false);
	
	
	/*==============================*/
	/* 06 - function on page scroll */
	/*==============================*/
	$(window).scroll(function(){
		if($('body').hasClass('header-moved') && !_isresponsive) if($(window).scrollTop()>=36) $('header').addClass('fixed-top');
		else $('header').removeClass('fixed-top');
	});


	/*=====================*/
	/* 07 - swiper sliders */
	/*=====================*/
	function initSwiper(){
		var initIterator = 0;
		$('.swiper-container').each(function(){								  
			var $t = $(this);								  

			var index = 'swiper-unique-id-'+initIterator;

			$t.addClass('swiper-'+index + ' initialized').attr('id', index);
			$t.find('.pagination').addClass('pagination-'+index);

			var autoPlayVar = parseInt($t.attr('data-autoplay'),10);
			var centerVar = parseInt($t.attr('data-center'),10);
			var simVar = ($t.closest('.circle-description-slide-box').length)?false:true;
			var slidesPerViewVar = $t.attr('data-slides-per-view');
			var xsValue, smValue, mdValue, lgValue;
			if(slidesPerViewVar == 'responsive'){
				slidesPerViewVar = 1;
				xsValue = $t.attr('data-xs-slides');
				smValue = $t.attr('data-sm-slides');
				mdValue = $t.attr('data-md-slides');
				lgValue = $t.attr('data-lg-slides');
			}
			else if(slidesPerViewVar != 'auto'){
				slidesPerViewVar = parseInt(slidesPerViewVar,10);
			}
			var loopVar = parseInt($t.attr('data-loop'),10);
			var speedVar = parseInt($t.attr('data-speed'),10);
			
			var slidesPerGroup = parseInt($t.attr('data-slides-per-group'),10);
			if(!slidesPerGroup){slidesPerGroup=1;}
			
			var directionVar = $t.attr('data-direction');
			if(!directionVar){directionVar='horizontal';}

			swipers['swiper-'+index] = new Swiper('.swiper-'+index,{
				speed: speedVar,
				pagination: '.pagination-'+index,
				mode: directionVar,				
				loop: loopVar,
				paginationClickable: true,
				autoplay: autoPlayVar,
				slidesPerView: slidesPerViewVar,
				slidesPerGroup: slidesPerGroup,
				keyboardControl: true,
				calculateHeight: true,
				simulateTouch: simVar,
				centeredSlides: centerVar,
				onInit: function(swiper){
					if($t.attr('data-slides-per-view')=='responsive') updateSlidesPerView(xsValue, smValue, mdValue, lgValue, swiper);	
					if($t.find('.swiper-slide').length>swiper.params.slidesPerView) $t.removeClass('hide-pagination');
					else $t.addClass('hide-pagination');
					
					var browserWidthResize = $(window).width();
					if (browserWidthResize < 750) {
							swiper.params.slidesPerGroup=1;
					} else { 
                      swiper.params.slidesPerGroup=slidesPerGroup;
					}					
				},
				onResize: function(swiper){
					var browserWidthResize2 = $(window).width();
					if (browserWidthResize2 < 750) {
							swiper.params.slidesPerGroup=1;
					} else { 
                      swiper.params.slidesPerGroup=slidesPerGroup;
					  swiper.resizeFix(true);
					}					
				}			
			});
			swipers['swiper-'+index].reInit();
			if($t.find('.default-active').length) swipers['swiper-'+index].swipeTo($t.find('.swiper-slide').index($t.find('.default-active')), 0);

			initIterator++;
		});

	}


	function updateSlidesPerView(xsValue, smValue, mdValue, lgValue, swiper){
		if(winW>mdPoint) swiper.params.slidesPerView = lgValue;
		else if(winW>smPoint) swiper.params.slidesPerView = mdValue;
		else if(winW>xsPoint) swiper.params.slidesPerView = smValue;
		else swiper.params.slidesPerView = xsValue;
	}

	//swipers arrows
	$('.main-slider .slider-arrow.left').on('click', function(){
		swipers['swiper-'+$(this).parent().parent().attr('id')].swipePrev();
	});

	$('.main-slider .slider-arrow.right').on('click', function(){
		swipers['swiper-'+$(this).parent().parent().attr('id')].swipeNext();
	});
	
	$('.container .swiper-arrow.left').on('click', function(){
		swipers['swiper-'+$(this).parent().attr('id')].swipePrev();
	});

	$('.container .swiper-arrow.right').on('click', function(){
		swipers['swiper-'+$(this).parent().attr('id')].swipeNext();
	});

	$('.clients-arrow.left').on('click', function(){
		swipers['swiper-'+$(this).closest('.clients-wrapper').find('.swiper-container').attr('id')].swipePrev();
	});

	$('.clients-arrow.right').on('click', function(){
		swipers['swiper-'+$(this).closest('.clients-wrapper').find('.swiper-container').attr('id')].swipeNext();
	});
	
	$('.testimonials-arrow.left').on('click', function(){
		swipers['swiper-'+$(this).closest('.testimonials-wrapper').find('.swiper-container').attr('id')].swipePrev();
	});

	$('.testimonials-arrow.right').on('click', function(){
		swipers['swiper-'+$(this).closest('.testimonials-wrapper').find('.swiper-container').attr('id')].swipeNext();
	});
	
	$('.blog-wrapper .arrows .left').on('click', function(){
		swipers['swiper-'+$(this).closest('.blog-wrapper').find('.swiper-container').attr('id')].swipePrev();
	});

	$('.blog-wrapper .arrows .right').on('click', function(){
		swipers['swiper-'+$(this).closest('.blog-wrapper').find('.swiper-container').attr('id')].swipeNext();
	});
	
	$('.blog-list-wrapper .arrow.top').on('click', function(){
		swipers['swiper-'+$(this).siblings(".swiper-container").attr('id')].swipeNext();
	});
	$('.blog-list-wrapper .arrow.bottom').on('click', function(){
		swipers['swiper-'+$(this).siblings(".swiper-container").attr('id')].swipePrev();
	});	

	
	
	
});