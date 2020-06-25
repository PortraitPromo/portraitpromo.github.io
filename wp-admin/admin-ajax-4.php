jQuery("#1592523811862473115").imagesLoaded().done( function( instance ) {
	setTimeout(function(){
		jQuery('#1592523811862473115').masonry({
		  itemSelector: '.element',
		  columnWidth: '.element',
		  gutter: 0,
		  percentPosition: true,
		  transitionDuration: 0,
		});

	    jQuery("#1592523811862473115").children(".element").children(".gallery_type").each(function(){
	        jQuery(this).addClass("fade-in");
	    });
	    
	    jQuery(window).trigger('hwparallax.reconfigure');
	}, 500);
});
