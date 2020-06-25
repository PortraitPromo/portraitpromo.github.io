jQuery("#15925218551565911737").imagesLoaded().done( function( instance ) {
	setTimeout(function(){
	    jQuery("#15925218551565911737").children(".element").children(".gallery_type").each(function(){
	        jQuery(this).addClass("fade-in");
	    });
    }, 500);
    
    jQuery(window).trigger('hwparallax.reconfigure');
});