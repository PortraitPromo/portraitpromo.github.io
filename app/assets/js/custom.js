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

$(window).on("load", function() {
	switch(location.search.substr(1).split('&')[0]){
		case "contact":
		case "explorer":
			break;
		default:
			if(location.search!=''){history.pushState(null, null, location.pathname)}
			// 1. preloader
			$("#preloader").fadeOut(600);
			$(".preloader-bg").delay(400).fadeOut(600);
	}
});
//12. TEMPLATER
$('#launcher').load('/launcher.html');
$('header').load('/header.html');
$('footer').load('/footer.html');
$('#portfolio').load('/portfolio.html');
$('#contact-info').load('/contact.html #contact-info');