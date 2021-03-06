var scroller=jQuery.browser.webkit ? "body": "html";

/* modernize */
function modernize() {
	// placeholder 
	if(!Modernizr.input.placeholder){
		$('[placeholder]').each(function() {
			$(this).watermark($(this).attr('placeholder'));
		});
	}
}

/* scrollUp */
function scrollUp(block,targetBlock) {
	$(block).click(function(e){
		var target = $(targetBlock).offset().top;
		$(scroller).animate({scrollTop:target},800);
		return false;
		e.preventDefault();
	});
}

/* input only Number  */
function inputNumber(block) {	
	$('input', block).keypress(function(e) {
		if (e.which >= 47 && e.which <= 57 ){}
		else return false;
	});
	
	$('input', block).keyup(function() {
		$inputNum = $(this);
		if ($inputNum.val == '' || $inputNum.val() == 0) {
			$inputNum.val('1'); 
		}
	});
}
function slickInit(){
	if ($('.slider-back').length){
		$('.slider-back').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  arrows: false,
		  fade: true,
		  autoplay: true,
  		  autoplaySpeed: 5000,
		});
	}
	if ($('.slider').length){
		$('.slider').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  arrows: true,
		  fade: true,
		  autoplay: true,
  		  autoplaySpeed: 5000
		});
	}
	if ($('.slider-for').length){
		$('.slider-for').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  arrows: true,
		  fade: true,
		  asNavFor: '.slider-nav'
		});
		$('.slider-nav').slick({
		  slidesToShow: 3,
		  slidesToScroll: 1,
		  asNavFor: '.slider-for',
		  dots: false,
		  centerMode: true,
		  centerPadding:'0px',
		  focusOnSelect: true
		});
	}
}

function galleryLink(){
	$('.gallery-link').fancybox({
		padding: [0,0,0,0],
		openEffect: 'elastic',
		closeEffect: 'elastic',
		prevEffect: 'fade',
		nextEffect: 'fade',
		openSpeed: 350,
		closeSpeed: 350,
		nextSpeed: 500,
		prevSpeed: 500,
		mouseWheel: true,
		 tpl: {
			wrap: '<div class="fancybox-wrap gallerypopup" tabIndex="-1"><div class="fancybox-skin"><div class="fancybox-outer"><div class="fancybox-inner"></div></div></div></div>',
		}
	});
}

function expandTool(){
	$('.expand-subject').slideUp(0);
	$('.expand-tool').click(function(e){
		$(this).siblings('.expand-subject').stop().slideToggle();
		$(this).parent().toggleClass('active');
		e.preventDefault();
	})
}

function navbartoggle(){
	$('.navbar-toggle').click(function(){
		var navbar = $('.navbar-collapse');
		if($(this).is('.active')){
			$(this).removeClass('active');
			navbar.stop().slideUp().removeClass('active');
		}
		else{
			$(this).addClass('active');
			navbar.stop().slideDown().addClass('active');
		}
		return false;
	});
}

function tableResponsive(){
	$('table').wrap('<div class="table-wrap"></div>');
}

$(document).ready(function(){
	modernize();
	navbartoggle();
	slickInit();
	tableResponsive();
	$('.footer_placeholder').height($('.footer').outerHeight());
	$("select").selectBox();
});

$(window).resize(function(){
	$('.footer_placeholder').height($('.footer').outerHeight());
})