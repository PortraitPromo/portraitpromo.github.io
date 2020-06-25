jQuery("#1592523952419301432").imagesLoaded().done( function( instance ) {
	setTimeout(function(){
	    jQuery("#1592523952419301432").children(".element").children(".gallery_type").each(function(){
	        jQuery(this).addClass("fade-in");
	    });
    }, 500);
    
    jQuery(window).trigger('hwparallax.reconfigure');
});