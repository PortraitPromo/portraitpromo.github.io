jQuery("#15925238562134023703").imagesLoaded().done( function( instance ) {
	setTimeout(function(){
		jQuery('#15925238562134023703').masonry({
		  itemSelector: '.element',
		  columnWidth: '.element',
		  gutter: 0,
		  percentPosition: true,
		  transitionDuration: 0,
		});

	    jQuery("#15925238562134023703").children(".element").children(".gallery_type").each(function(){
	        jQuery(this).addClass("fade-in");
	    });
	    
	    jQuery(window).trigger('hwparallax.reconfigure');
	}, 500);
});
