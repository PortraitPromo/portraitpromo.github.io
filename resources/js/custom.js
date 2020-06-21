/*-----------------------------------------------------------------
[Legal Notice]

Copyright (c) LifeInSYS
Website Template by LifeInSYS
http://lifeinsys.com
-------------------------------------------------------------------*/

/*------------------------------------------------------------------
  1. preloader
  2. navigation
	2.1. page scroll
	2.2. spy navigation
	2.3. close mobile menu
	2.4. highlight navigation
	2.5. collapse navigation
  3. animate elements
  4. facts counter
  5. forms
	5.1. contact form
  6. slick slider
	6.1. slick testimonials slideshow, slick fullscreen slideshow
	6.2. slick fullscreen slideshow ZOOM/FADE
	6.3. slick fullscreen slider TYPED text
  7. YouTube player
  8. owl carousel
	8.1. owl news carousel
  9. magnificPopup
	9.1. magnificPopup projects gallery
  10. swiper slider
	10.1. swiper parallax slider
	10.2. swiper thumbnail slider horizontal thumbs
  11. typed text
-----------------------------------------------------------------*/

$(function() {
	"use strict";
	
	$(window).on("load", function() {
		// 1. preloader
		$("#preloader").fadeOut(600);
		$(".preloader-bg").delay(400).fadeOut(600);
	});
	
	// 2. navigation
	// 2.1. page scroll
	$(".page-scroll").on("click", function(e) {
		var $anchor = $(this);
		$("html, body").stop().animate({
			scrollTop: $($anchor.attr("href")).offset().top - 65
		}, 1500, 'easeInOutExpo');
		e.preventDefault();
	});
	// 2.2. spy navigation
	$("body").scrollspy({
		target: ".navbar",
		// offset: 70
		offset: 80
	});
	// 2.3. close mobile menu
	$(".navbar-collapse ul li a").on("click", function() {
		$(".navbar-toggle:visible").click();
	});
	// 2.4. highlight navigation
	$(".link-underline-menu").on("click", function() {
		$(".link-underline-menu").removeClass("active");
		$(this).addClass("active");
	});
	



	// 2.5. collapse navigation
	if ($(".navbar").offset().top > 50) {
		$(".navbar-bg-switch").addClass("main-navigation-bg");

	} else {
		$(".navbar-bg-switch").removeClass("main-navigation-bg");
	}
	// 3. animate elements
	if ($(this).scrollTop() > 10) {
		$(".border-top").addClass("top-position-primary");
		$(".main-navigation-bg").addClass("main-navigation-bg-position-primary");
		$(".navbar-collapse").addClass("navbar-collapse-position-primary");
		$(".logo").addClass("logo-home-call");
		$(".main-navigation").addClass("main-navigation-home-call");
		$("h1.home-page-title").addClass("home-page-title-hide").removeClass("home-page-title-show");
		$("h2.home-page-subtitle").addClass("home-page-subtitle-hide").removeClass("home-page-subtitle-show");
		$(".scroll-indicator-wrapper").addClass("scroll-indicator-wrapper-position-secondary");
		$(".to-top-arrow").addClass("show");
	} else {
		$(".border-top").removeClass("top-position-primary");
		$(".main-navigation-bg").removeClass("main-navigation-bg-position-primary");
		$(".navbar-collapse").removeClass("navbar-collapse-position-primary");
		$(".logo").removeClass("logo-home-call");
		$(".main-navigation").removeClass("main-navigation-home-call");
		$("h1.home-page-title").removeClass("home-page-title-hide").addClass("home-page-title-show");
		$("h2.home-page-subtitle").removeClass("home-page-subtitle-hide").addClass("home-page-subtitle-show");
		$(".scroll-indicator-wrapper").removeClass("scroll-indicator-wrapper-position-secondary");
		$(".to-top-arrow").removeClass("show");
	}
	
	$(window).on("scroll", function() {
		// 2.5. collapse navigation
		if ($(".navbar").offset().top > 50) {
			$(".navbar-bg-switch").addClass("main-navigation-bg");

		} else {
			$(".navbar-bg-switch").removeClass("main-navigation-bg");
		}
		// 3. animate elements
		if ($(this).scrollTop() > 10) {
			$(".border-top").addClass("top-position-primary");
			$(".main-navigation-bg").addClass("main-navigation-bg-position-primary");
			$(".navbar-collapse").addClass("navbar-collapse-position-primary");
			$(".logo").addClass("logo-home-call");
			$(".main-navigation").addClass("main-navigation-home-call");
			$("h1.home-page-title").addClass("home-page-title-hide").removeClass("home-page-title-show");
			$("h2.home-page-subtitle").addClass("home-page-subtitle-hide").removeClass("home-page-subtitle-show");
			$(".scroll-indicator-wrapper").addClass("scroll-indicator-wrapper-position-secondary");
			$(".to-top-arrow").addClass("show");
		} else {
			$(".border-top").removeClass("top-position-primary");
			$(".main-navigation-bg").removeClass("main-navigation-bg-position-primary");
			$(".navbar-collapse").removeClass("navbar-collapse-position-primary");
			$(".logo").removeClass("logo-home-call");
			$(".main-navigation").removeClass("main-navigation-home-call");
			$("h1.home-page-title").removeClass("home-page-title-hide").addClass("home-page-title-show");
			$("h2.home-page-subtitle").removeClass("home-page-subtitle-hide").addClass("home-page-subtitle-show");
			$(".scroll-indicator-wrapper").removeClass("scroll-indicator-wrapper-position-secondary");
			$(".to-top-arrow").removeClass("show");
		}
	});
	// 4. facts counter
	$(".facts-counter-number").appear(function() {
		var count = $(this);
		count.countTo({
			from: 0,
			to: count.html(),
			speed: 2000,
			refreshInterval: 60
		});
	});
	
	// 5. forms
	// 5.1. contact form
	$("form#form").on("submit", function() {
		$("form#form .error").remove();
		var s = !1;
		if ($(".requiredField").each(function() {
				if ("" === jQuery.trim($(this).val())) $(this).prev("label").text(), $(this).parent().append('<span class="error">This field is required</span>'), $(this).addClass(
					"inputError"), s = !0;
				else if ($(this).hasClass("email")) {
					var r = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
					r.test(jQuery.trim($(this).val())) || ($(this).prev("label").text(), $(this).parent().append('<span class="error">Invalid email address</span>'), $(this).addClass(
						"inputError"), s = !0);
				}
			}), !s) {
			$("form#form input.submit").fadeOut("normal", function() {
				$(this).parent().append("");
			});
			var r = $(this).serialize();
			$.post($(this).attr("action"), r, function() {
				$("form#form").slideUp("fast", function() {
					$(this).before('<div class="success">Your email was sent successfully.</div>');
				});
			});
		}
		return !1;
	});
	
	// 6. slick slider
	// 6.1. slick testimonials slideshow, slick fullscreen slideshow
	$(".testimonials-slideshow, .slick-fullscreen-slideshow").slick({
		arrows: false,
		initialSlide: 0,
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		autoplay: true,
		autoplaySpeed: 4000,
		cssEase: "ease",
		speed: 1600,
		draggable: true,
		dots: false,
		pauseOnDotsHover: false,
		pauseOnFocus: false,
		pauseOnHover: false
	});
	// 6.2. slick fullscreen slideshow ZOOM/FADE
	$(".slick-fullscreen-slideshow-zoom-fade").slick({
		arrows: false,
		initialSlide: 0,
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		autoplay: true,
		autoplaySpeed: 4000,
		cssEase: "cubic-bezier(0.7, 0, 0.3, 1)",
		speed: 1600,
		draggable: true,
		dots: false,
		pauseOnDotsHover: true,
		pauseOnFocus: false,
		pauseOnHover: false
	});
	// 6.3. slick fullscreen slider TYPED text
	$(".slick-fullscreen").slick({
		arrows: false,
		initialSlide: 0,
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: false,
		autoplay: true,
		autoplaySpeed: 4000,
		cssEase: "ease",
		speed: 800,
		draggable: true,
		dots: false,
		pauseOnDotsHover: true,
		pauseOnFocus: false,
		pauseOnHover: false
	});
	
	// 7. YouTube player
	$("#bgndVideo").YTPlayer();
	
	// 8. owl carousel
	// 8.1. owl news carousel
	$("#news-carousel").owlCarousel({
		loop: true,
		center: true,
		items: 3,
		margin: 0,
		autoplay: true,
		autoplaySpeed: 1000,
		autoplayTimeout: 5000,
		smartSpeed: 450,
		nav: true,
		navText: ["<i class='owl-custom fa fa-chevron-left'></i>", "<i class='owl-custom fa fa-chevron-right'></i>"],
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 2
			},
			1170: {
				items: 3
			}
		}
	});
	
	// 9. magnificPopup
	// 9.1. magnificPopup projects gallery
	$(".popup-photo").magnificPopup({
		type: "image",
		gallery: {
			enabled: true,
			tPrev: "",
			tNext: "",
			tCounter: "%curr% / %total%"
		},
		removalDelay: 100,
		mainClass: "mfp-fade",
		fixedContentPos: false
	});
	
	// 10. swiper slider
	// 10.1. swiper parallax slider
	var swiper = new Swiper(".parallax .swiper-container", {
		autoplay: 4000,
		speed: 800,
		parallax: true,
		mousewheelControl: false,
		keyboardControl: false,
		nextButton: ".swiper-button-next",
		prevButton: ".swiper-button-prev",
		paginationClickable: true
	});
	// 10.2. swiper thumbnail slider horizontal thumbs
	var swipersliderTop = new Swiper(".swiper-slider-top", {
		direction: "vertical",
		nextButton: ".swiper-button-next",
		prevButton: ".swiper-button-prev",
		autoplay: 4000,
		speed: 1600,
		spaceBetween: 0,
		centeredSlides: true,
		slidesPerView: "auto",
		touchRatio: 1,
		loop: true,
		slideToClickedSlide: true,
		mousewheelControl: false,
		keyboardControl: false
	});
	var swipersliderBottom = new Swiper(".swiper-slider-bottom", {
		direction: "horizontal",
		spaceBetween: 10,
		centeredSlides: true,
		slidesPerView: "auto",
		touchRatio: 1,
		loop: true,
		slideToClickedSlide: true,
		mousewheelControl: false,
		keyboardControl: false
	});
	swipersliderTop.params.control = swipersliderBottom;
	swipersliderBottom.params.control = swipersliderTop;
	
	var sringsAll = ["#Маркетинг", "#Креатив", "#Упаковка идей", "Созидание впечатления", "#Фотосессия", "#Social Media Marketing", "Web-разработка"],
		stringsContent = ["#Рекламные фото и ролики", "#Съемка музыкальных клипов"],
		stringsIT = ["#Разработка сайтов и приложений", "#SEO-оптимизация", "#Контент-план"],
		sringsPromo = ["Организация мероприятий", "Продюсирование бренда", ""];


	// 11. typed text
	$(".typed-title").typed({
		strings: sringsAll,
		typeSpeed: 25,
		backDelay: 3500,
		loop: true
	});
});

//12. Contacts widget
// объявляем переменные
const background = $('.background');
const modal = $('.modal');
const search = $('.search-wrap');

// инициализируем фидбэк
hideFeedback(true);

// ф-ия закрытия (immediate - плавно закрыть или моментально)
function hideFeedback(immediate = false) {
  if (immediate) {
	modal.hide();
	search.hide();
	background.hide();
  } else {
	// тут можно какую-нидь анимацию скрытия поставить, но я использую стандартный fadeOut
	modal.fadeOut('fast');
	search.fadeOut('fast');
	background.fadeOut('fast');
  }
}

// ф-ия показа
function showFeedback() {
  // тут можно какую-нидь анимацию показа поставить, но я использую стандартный fadeIn
  background.fadeIn('slow');
  modal.fadeIn('slow');
}

// 
function search_open(){
	background.fadeIn('slow');
	search.fadeIn(200).find('.search-box input').focus();
}

search.hide();

// wave
$(function(){
	"use strict";
	var t=document.getElementById("wave"),
		i=t.getContext("2d"),
		n=t.width=window.innerWidth,
		e=t.height=window.innerHeight,
		r=[],
		a=0,
		o={
			count:10,
			range:{x:20,y:40},
			duration:{min:10,max:200},
			thickness:5,
			strokeColor:"#FFF",
			level:.2,
			curved:!0
		},
		s=function(t,i){
			return Math.floor(Math.random()*(i-t+1)+t)
		},
		h=function(t,i,n,e){
			return(t/=e/2)<1?n/2*t*t+i:-n/2*(--t*(t-2)-1)+i
			};

		i.lineJoin="round",
		i.lineWidth=o.thickness,
		i.strokeStyle=o.strokeColor;

		var u=function(t){
				this.anchorX=t.x,
				this.anchorY=t.y,
				this.x=t.x,
				this.y=t.y,
				this.setTarget()
			};
			u.prototype.setTarget=function(){
				this.initialX=this.x,
				this.initialY=this.y,
				this.targetX=this.anchorX+s(0,2*o.range.x)-o.range.x,
				this.targetY=this.anchorY+s(0,2*o.range.y)-o.range.y,
				this.tick=0,
				this.duration=s(o.duration.min,o.duration.max)
			},
			u.prototype.update=function(){
				var t=this.targetX-this.x,
					i=this.targetY-this.y,
					n=Math.sqrt(t*t+i*i);

				if(Math.abs(n)<=0)this.setTarget();
				else{var e=this.tick,r=this.initialY,a=this.targetY-this.initialY,o=this.duration;this.y=h(e,r,a,o),r=this.initialX,a=this.targetX-this.initialX,o=this.duration,this.x=h(e,r,a,o),this.tick++}},
			u.prototype.render=function(){i.beginPath(),i.arc(this.x,this.y,3,0,2*Math.PI,!1),i.fillStyle="#000",i.fill()};

			for(
				var c=function(){
					for(var t=r.length;t--;)r[t].update()
				},
					l=function(){
						i.beginPath();
						var t=r.length;i.moveTo(r[0].x,r[0].y);
						var a;
						for(a=0;a<t-1;a++){
							var s=(r[a].x+r[a+1].x)/2,
								h=(r[a].y+r[a+1].y)/2;
								i.quadraticCurveTo(r[a].x,r[a].y,s,h)}
								i.lineTo(-o.range.x-o.thickness,e+o.thickness),
								i.lineTo(n+o.range.x+o.thickness,e+o.thickness),
								i.closePath(),i.fillStyle="#000",i.fill(),
								i.stroke()},
								d=function(){i.clearRect(0,0,n,e)},
								f=function(){window.requestAnimFrame(f,t),a++,d(),c(),l()},
								g=o.count+2,
								m=(n+2*o.range.x)/(o.count-1);
								g--;)
				r.push(new u({x:m*(g-1)-o.range.x,y:e-e*o.level}));
				window.requestAnimFrame=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||function(t){window.setTimeout(t,1e3/60)},f()
});

function t602_init(recid){
	var t602_lastCall,
			t602_timeoutId,
			t602_interval = 100;
	$(window).scroll( function() {
		var t602_now = new Date().getTime();
		if (t602_lastCall && t602_now < (t602_lastCall + t602_interval) ) {
				clearTimeout(t602_timeoutId);
				t602_timeoutId = setTimeout(function () {
						t602_lastCall = t602_now;
						t602_setProgressBarWidth(recid);
				}, t602_interval - (t602_now - t602_lastCall) );
		} else {
				t602_lastCall = t602_now;
				t602_setProgressBarWidth(recid);
		}
	});
}

function t602_setProgressBarWidth(recid) {
	var t602_windowScrollTop = $(window).scrollTop(),
			t602_docHeight = $(document).height(),
			t602_winHeight = $(window).height();
			t602_scrollPercent = (t602_windowScrollTop / (t602_docHeight-t602_winHeight)) * 100;
	  startColor = [0,220,255]; //RGB
	  endColor = [255,32,73]; //RGB
	  currentColor = [
		Math.round(startColor[0]+(endColor[0]-startColor[0])/100*t602_scrollPercent),
		Math.round(startColor[1]+(endColor[1]-startColor[1])/100*t602_scrollPercent),
		Math.round(startColor[2]+(endColor[2]-startColor[2])/100*t602_scrollPercent)
	  ];
	$(".scroll-indicator").css('width', t602_scrollPercent + '%');
  $(".scroll-indicator").css('background', " linear-gradient(90deg, rgb("+startColor[0]+","+startColor[1]+","+startColor[2]+") 0%, rgb("+currentColor[0]+","+currentColor[1]+","+currentColor[2]+") 100%)");
}

t602_init();
t602_setProgressBarWidth();

function feedOpen(){
	$("#modal-content").html("Лента");
}
function galleryOpen(){
	$("#modal-content").html("Галерея");
}