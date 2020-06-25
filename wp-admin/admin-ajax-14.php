jQuery("#15925238481734260682").imagesLoaded().done( function( instance ) {
	setTimeout(function(){
	    jQuery("#15925238481734260682").children(".element").children(".gallery_type").each(function(){
	        jQuery(this).addClass("fade-in");
	    });
    }, 500);
    
    jQuery(window).trigger('hwparallax.reconfigure');
});