jQuery("#portfolio_filter_wrapper").imagesLoaded().done( function( instance ) {
	setTimeout(function(){
	    jQuery("#portfolio_filter_wrapper").children(".element").children(".gallery_type").each(function(){
	        jQuery(this).addClass("fade-in");
	    });
    }, 500);
    
    jQuery(window).trigger('hwparallax.reconfigure');
});