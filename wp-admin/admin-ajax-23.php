jQuery("#1592523877602560815").imagesLoaded().done( function( instance ) {
	setTimeout(function(){
		jQuery('#1592523877602560815').masonry({
		  itemSelector: '.element',
		  columnWidth: '.element',
		  gutter: 30,
		  percentPosition: true,
		  transitionDuration: 0,
		});

	    jQuery("#1592523877602560815").children(".element").children(".gallery_type").each(function(){
	        jQuery(this).addClass("fade-in");
	    });
	    
	    jQuery(window).trigger('hwparallax.reconfigure');
	}, 500);
});
