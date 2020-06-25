jQuery("#15925216091028456989").imagesLoaded().done( function( instance ) {
	setTimeout(function(){
		jQuery('#15925216091028456989').masonry({
		  itemSelector: '.element',
		  columnWidth: '.element',
		  gutter: 0,
		  percentPosition: true,
		  transitionDuration: 0,
		});

	    jQuery("#15925216091028456989").children(".element").children(".gallery_type").each(function(){
	        jQuery(this).addClass("fade-in");
	    });
	    
	    jQuery(window).trigger('hwparallax.reconfigure');
	}, 500);
});
