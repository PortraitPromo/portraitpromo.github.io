
jQuery("#159252393983077653").imagesLoaded().done( function( instance ) {
	setTimeout(function(){
		jQuery('#159252393983077653').masonry({
		  itemSelector: '.element',
		  columnWidth: '.element.normal_size',
		  gutter: 0,
		  percentPosition: true,
		  transitionDuration: 0,
		});

	    jQuery("#159252393983077653").children(".element").children(".gallery_type").each(function(){
	        jQuery(this).addClass("fade-in");
	    });
	    
	    jQuery(window).trigger('hwparallax.reconfigure');
	}, 500);
});
