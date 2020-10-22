$(document).ready(function ($) {
	"use strict";
	dl_backtotop();
	dl_category();
	dl_menumobile();
	dl_tab();	
	dl_lazyloadImage();			
	dl_owl();

	$('.product-box .time').each(function(e){
		dl_countDown($(this));
	})
	$('#nav-mobile .fa').click(function(e){		
		e.preventDefault();
		$(this).parent().parent().toggleClass('open');
	});
	$('.button-mobile').click(function(e){			
		$('.section_tab_product .tabs-title').slideToggle('fast');
	});
	$('.menu-bar').click(function(e){
		e.preventDefault();
		$('#nav-mobile').toggleClass('open');
		$('.menu-offcanvas').toggleClass('open');
	});
	$('.menuclose').click(function(e){
		$('#nav-mobile').removeClass('open');
		$('.menu-offcanvas').removeClass('open');
	})

	$('.open-filters').click(function(e){
		$(this).toggleClass('open');
		$('.dqdt-sidebar').toggleClass('open');
		$('#nav-mobile').removeClass('open');
	});
	$('footer .footer-widget h3').click(function(e){		
		e.preventDefault();
		$(this).parent().toggleClass('active');
	});


});

$(document).on('click','.overlay, .close-popup, .btn-continue, .fancybox-close', function() {   
	setTimeout(function(){
		$('.loading').removeClass('loaded-content');
	},500);
	return false;
})


/********************************************************
# LazyLoad
********************************************************/
function dl_lazyloadImage() {
	var i = $("[data-lazyload]");
	i.length > 0 && i.each(function() {
		var i = $(this), e = i.attr("data-lazyload");
		i.appear(function() {
			i.removeAttr("height").attr("src", e);
		}, {
			accX: 0,
			accY: 120
		}, "easeInCubic");
	});
	var e = $("[data-lazyload2]");
	e.length > 0 && e.each(function() {
		var i = $(this), e = i.attr("data-lazyload2");
		i.appear(function() {
			i.css("background-image", "url(" + e + ")");
		}, {
			accX: 0,
			accY: 120
		}, "easeInCubic");
	});
} window.dl_lazyloadImage=dl_lazyloadImage;

/********************************************************
# SHOW NOITICE
********************************************************/
function dl_showNoitice(selector) {
	$(selector).animate({right: '0'}, 500);
	setTimeout(function() {
		$(selector).animate({right: '-300px'}, 500);
	}, 3500);
}  window.dl_showNoitice=dl_showNoitice;

/********************************************************
# SHOW LOADING
********************************************************/
function dl_showLoading(selector) {
	var loading = $('.loader').html();
	$(selector).addClass("loading").append(loading); 
}  window.dl_showLoading=dl_showLoading;

/********************************************************
# HIDE LOADING
********************************************************/
function dl_hideLoading(selector) {
	$(selector).removeClass("loading"); 
	$(selector + ' .loading-icon').remove();
}  window.dl_hideLoading=dl_hideLoading;

/********************************************************
# SHOW POPUP
********************************************************/
function dl_showPopup(selector) {
	$(selector).addClass('active');
}  window.dl_showPopup=dl_showPopup;

/********************************************************
# HIDE POPUP
********************************************************/
function dl_hidePopup(selector) {
	$(selector).removeClass('active');
}  window.dl_hidePopup=dl_hidePopup;

/********************************************************
# CONVERT VIETNAMESE
********************************************************/
function dl_convertVietnamese(str) { 
	str= str.toLowerCase();
	str= str.replace(/Ă |Ă¡|áº¡|áº£|Ă£|Ă¢|áº§|áº¥|áº­|áº©|áº«|Äƒ|áº±|áº¯|áº·|áº³|áºµ/g,"a"); 
	str= str.replace(/Ă¨|Ă©|áº¹|áº»|áº½|Ăª|á»|áº¿|á»‡|á»ƒ|á»…/g,"e"); 
	str= str.replace(/Ă¬|Ă­|á»‹|á»‰|Ä©/g,"i"); 
	str= str.replace(/Ă²|Ă³|á»|á»|Ăµ|Ă´|á»“|á»‘|á»™|á»•|á»—|Æ¡|á»|á»›|á»£|á»Ÿ|á»¡/g,"o"); 
	str= str.replace(/Ă¹|Ăº|á»¥|á»§|Å©|Æ°|á»«|á»©|á»±|á»­|á»¯/g,"u"); 
	str= str.replace(/á»³|Ă½|á»µ|á»·|á»¹/g,"y"); 
	str= str.replace(/Ä‘/g,"d"); 
	str= str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g,"-");
	str= str.replace(/-+-/g,"-");
	str= str.replace(/^\-+|\-+$/g,""); 
	return str; 
} window.dl_convertVietnamese=dl_convertVietnamese;


/********************************************************
# SIDEBAR CATEOGRY
********************************************************/
function dl_category(){
	$('.nav-category .fa-angle-down').click(function(e){
		$(this).parent().toggleClass('active');
	});
} window.dl_category=dl_category;

/********************************************************
# MENU MOBILE
********************************************************/
function dl_menumobile(){
	$('.menu-bar').click(function(e){
		e.preventDefault();
		$('#nav').toggleClass('open');
		$('.dqdt-sidebar').removeClass('open');
		$('#open-filters').removeClass('open');
	});
	$('#nav .fa').click(function(e){		
		e.preventDefault();
		$(this).parent().parent().toggleClass('open');
	});
} window.dl_menumobile=dl_menumobile;

/********************************************************
# ACCORDION
********************************************************/
function dl_accordion(){
	$('.accordion .nav-link').click(function(e){
		e.preventDefault;
		$(this).parent().toggleClass('active');
	})
} window.dl_accordion=dl_accordion;

/********************************************************
# OWL CAROUSEL
********************************************************/
function dl_owl() { 
	$('.owl-carousel:not(.not-aweowl)').each( function(){
		var xss_item = $(this).attr('data-xss-items');
		var xs_item = $(this).attr('data-xs-items');		
		var sm_item = $(this).attr('data-sm-items');
		var md_item = $(this).attr('data-md-items');
		var lg_item = $(this).attr('data-lg-items');
		var lgg_item = $(this).attr('data-lgg-items');
		var margin=$(this).attr('data-margin');
		var dot=$(this).attr('data-dot');
		var nav=$(this).attr('data-nav');
		if (typeof margin !== typeof undefined && margin !== false) {    
		} else{
			margin = 30;
		}
		if (typeof xss_item !== typeof undefined && xss_item !== false) {    
		} else{
			xss_item = 1;
		}
		if (typeof xs_item !== typeof undefined && xs_item !== false) {    
		} else{
			xs_item = 1;
		}
		if (typeof sm_item !== typeof undefined && sm_item !== false) {    

		} else{
			sm_item = 3;
		}	
		if (typeof md_item !== typeof undefined && md_item !== false) {    
		} else{
			md_item = 3;
		}
		if (typeof lg_item !== typeof undefined && lg_item !== false) {    
		} else{
			lg_item = 4;
		}
		if (typeof lgg_item !== typeof undefined && lg_item !== false) {    
		} else{
			lgg_item = lg_item;
		}
		if (typeof dot !== typeof undefined && dot !== true) {   
			dot = dot;
		} else{
			dot = false;
		}
		if (typeof nav !== typeof undefined && nav !== true) {   
			nav = nav;
		} else{
			nav = false;
		}
		$(this).owlCarousel({
			loop:false,
			margin:Number(margin),
			responsiveClass:true,
			dots:dot,
			autoHeight: false,
			nav:nav,
			navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
			responsive:{
				0:{
					items:Number(xss_item)				
				},
				543:{
					items:Number(xs_item)				
				},
				768:{
					items:Number(sm_item)				
				},
				992:{
					items:Number(md_item)				
				},
				1200:{
					items:Number(lg_item)				
				},
				1770:{
					items:Number(lgg_item)				
				}
			}
		})
	})
} window.dl_owl=dl_owl;

/********************************************************
# BACKTOTOP
********************************************************/
function dl_backtotop() { 
	if ($('.back-to-top').length) {
		var scrollTrigger = 100, // px
			backToTop = function () {
				var scrollTop = $(window).scrollTop();
				if (scrollTop > scrollTrigger) {
					$('.back-to-top').addClass('show');
				} else {
					$('.back-to-top').removeClass('show');
				}
			};
		backToTop();
		$(window).on('scroll', function () {
			backToTop();
		});
		$('.back-to-top').on('click', function (e) {
			e.preventDefault();
			$('html,body').animate({
				scrollTop: 0
			}, 700);
		});
	}
} window.dl_backtotop=dl_backtotop;

/********************************************************
# Countdown
********************************************************/
function dl_countDown(selector){	
	// Set the date we're counting down to
	var dataTime = selector.attr('data-time');
	var countDownDate = new Date(dataTime).getTime();
	// Update the count down every 1 second
	var x = setInterval(function() {
		// Get todays date and time
		var now = new Date().getTime();
		// Find the distance between now an the count down date
		var distance = countDownDate - now;
		// Time calculations for days, hours, minutes and seconds
		var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		var seconds = Math.floor((distance % (1000 * 60)) / 1000);
		// Display the result in the element 
		selector.html("<div class='time-item'><h3>" 
					  + days + "<b>: </b></h3><span>ngĂ y</span></div>  <div class='time-item'><h3>"
					  + hours + "<b>: </b> </h3><span>giá»</span></div> <div class='time-item'><h3>"
					  + minutes + "<b>: </b> </h3><span>phĂºt</span></div>  <div class='time-item'><h3>"
					  + seconds + "</h3><span>giĂ¢y</span></div>"
					 );
		// If the count down is finished, write some text 
		if (distance < 0) {
			clearInterval(x);
			selector.html("Háº¿t háº¡n");
		}
	}, 1000);
}

/********************************************************
# TAB
********************************************************/
function dl_tab() {
	$(".e-tabs").each( function(){
		$(this).find('.tabs-title li:first-child').addClass('current');
		$(this).find('.tab-content').first().addClass('current');
		$(this).find('.tabs-title li').click(function(){
			if($(window).width() < 767 ){
				$('.section_tab_product .tabs-title').hide();
			}
			var tab_id = $(this).attr('data-tab');
			var url = $(this).attr('data-url');
			$(this).closest('.e-tabs').find('.tab-viewall').attr('href',url);
			$(this).closest('.e-tabs').find('.tabs-title li').removeClass('current');
			$(this).closest('.e-tabs').find('.tab-content').removeClass('current');
			$(this).addClass('current');
			$(this).closest('.e-tabs').find("."+tab_id).addClass('current');
			$(this).closest('.e-tabs').find('.section-title > a').removeClass('current');			
			$(this).closest('.e-tabs').find(".section-title > a."+tab_id).addClass('current');
		});    
	});
} window.dl_tab=dl_tab;

/********************************************************
# DROPDOWN
********************************************************/
$('.dropdown-toggle').click(function() {
	$(this).parent().toggleClass('open'); 	
}); 
$('.btn-close').click(function() {
	$(this).parents('.dropdown').toggleClass('open');
}); 

$(document).on('click','.qtyplus',function(e){
	e.preventDefault();   
	fieldName = $(this).attr('data-field'); 
	var currentVal = parseInt($('input[data-field='+fieldName+']').val());
	if (!isNaN(currentVal)) { 
		$('input[data-field='+fieldName+']').val(currentVal + 1);
	} else {
		$('input[data-field='+fieldName+']').val(0);
	}
});

$(document).on('click','.qtyminus',function(e){
	e.preventDefault(); 
	fieldName = $(this).attr('data-field');
	var currentVal = parseInt($('input[data-field='+fieldName+']').val());
	if (!isNaN(currentVal) && currentVal > 1) {          
		$('input[data-field='+fieldName+']').val(currentVal - 1);
	} else {
		$('input[data-field='+fieldName+']').val(1);
	}
});

$(document).on('click', function(event) {
	if (!$(event.target).closest('.dqdt-sidebar').length && !$(event.target).closest('#open-filters').length) {
		$('.dqdt-sidebar').removeClass('open');
		$('#open-filters').removeClass('open');
	}

	if (!$(event.target).closest('.menu-bar').length && !$(event.target).closest('.menu-offcanvas').length) {		
		$('#nav-mobile').removeClass('open');
		$('.menu-offcanvas').removeClass('open');
	}
});

window.onscroll = function() {menuSticky()};
var navbar = $("header nav");
// Get the offset position of the navbar
var sticky = 40;
// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function menuSticky() {	
	if (window.pageYOffset >= sticky) {
		navbar.addClass("sticky")
	} else {
		navbar.removeClass("sticky");
	}
}

/*
	By Osvaldas Valutis, www.osvaldas.info
	Available for use under the MIT License
*/
;
(function(e, t, n, r) {
    e.fn.doubleTapToGo = function(r) {
        if (!("ontouchstart" in t) && !navigator.msMaxTouchPoints && !navigator.userAgent.toLowerCase().match(/windows phone os 7/i)) return false;
        this.each(function() {
            var t = false;
            e(this).on("click", function(n) {
                var r = e(this);
                if (r[0] != t[0]) {
                    n.preventDefault();
                    t = r
                }
            });
            e(n).on("click touchstart MSPointerDown", function(n) {
                var r = true,
                    i = e(n.target).parents();
                for (var s = 0; s < i.length; s++)
                    if (i[s] == t[0]) r = false;
                if (r) t = false
            })
        });
        return this
    }
})(jQuery, window, document);

/*Double click go to link menu*/
var wDWs = $(window).width();
if (wDWs < 1199) {
	$('header nav .nav-item' ).doubleTapToGo();
	
}