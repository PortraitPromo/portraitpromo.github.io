
jQuery("#portfolio_mixed_filter_wrapper").imagesLoaded().done( function( instance ) {
	setTimeout(function(){
		jQuery('#portfolio_mixed_filter_wrapper').masonry({
		  itemSelector: '.element',
		  columnWidth: '.element.normal_size',
		  gutter: 0,
		  percentPosition: true,
		  transitionDuration: 0,
		});

	    jQuery("#portfolio_mixed_filter_wrapper").children(".element").children(".gallery_type").each(function(){
	        jQuery(this).addClass("fade-in");
	    });
	    
	    jQuery(window).trigger('hwparallax.reconfigure');
	}, 500);
});
