
 jQuery(document).ready(function($){

	$(".toggle-menu").on('click', function(){
		$('.nav, .overlay').toggle();
	})
	$(".overlay").on('click', function(){
		$('.nav, .overlay').hide();
	})
	
	$(window).on('scroll', function(){
		if($(window).scrollTop() > 0){
			$('.head').addClass('scrolling')
		}else{
			$('.head').removeClass('scrolling')
		}
	})
	$('.nav_list a, #header .batton a').on('click', function(event){
		event.preventDefault()
	})
	$('.nav_list .item1 a, #header .batton a').on('click', function(event){
		$("html, body").animate({"scrollTop": $('.phone-program').offset().top  },"slow");
	})
	$('.nav_list .item2 a').on('click', function(event){
		$("html, body").animate({"scrollTop": $('.charging').offset().top  },"slow");
	})
	$('.nav_list .item3 a').on('click', function(event){
		$("html, body").animate({"scrollTop": $('.foods').offset().top  },"slow");
	})
	$('.nav_list .item4 a').on('click', function(event){
		$("html, body").animate({"scrollTop": $('#footer').offset().top  },"slow");
	})
	
	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {};
	
	
	$(".animation_1").animated("fadeInRightBig", "fadeOutRightBig");
	$(".animation_2").animated("fadeInLeftBig", "fadeOutLeftBig");
	
	$('#main .video-block a').on('click', function(event){
		event.preventDefault();
		$('.video-block .hidden').fadeIn();
		$(this).hide()
	})
	$('#main .foods a').on('click', function(event){
		event.preventDefault();
		$('.foods .hidden').fadeIn();
		$(this).hide()
	})
	$('#main .news a').on('click', function(event){
		event.preventDefault();
		$('.news .hidden').fadeIn();
		$(this).hide()
	})
	


});
