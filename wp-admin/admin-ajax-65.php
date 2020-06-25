					  
jQuery(document).ready(function(){ 
	var $canvas = jQuery('#kenburns');

    $canvas.attr('width', jQuery(window).width());
    $canvas.attr('height', jQuery(window).height());

    var kb = $canvas.kenburned({
        images : [
        	    		'https://themes.themegoods.com/photography/demo3/wp-content/uploads/2017/10/andrea-sonda-275985-1.jpg'
	    ,	    		'https://themes.themegoods.com/photography/demo3/wp-content/uploads/2017/10/averie-woodard-319828.jpg'
	    ,	    		'https://themes.themegoods.com/photography/demo3/wp-content/uploads/2017/10/guy-bowden-95257.jpg'
	    ,	    		'https://themes.themegoods.com/photography/demo3/wp-content/uploads/2017/10/chris-b-229247.jpg'
	            ],
        frames_per_second: 100,
	    display_time: 7000,
	    zoom: 1.2,
	    fade_time: 1000,
    });
    
    jQuery(window).resize(function() {
		jQuery('#kenburns').remove();
		jQuery('#kenburns_overlay').remove();
		
		jQuery('body #wrapper').append('<canvas id="kenburns"></canvas>');
		jQuery('body #wrapper').append('<div id="kenburns_overlay"></div>');
	
	  	var $canvas = jQuery('#kenburns');

	    $canvas.attr('width', jQuery(window).width());
	    $canvas.attr('height', jQuery(window).height());
	
	    var kb = $canvas.kenburned({
	        images : [
	        		    		'https://themes.themegoods.com/photography/demo3/wp-content/uploads/2017/10/andrea-sonda-275985-1.jpg'
		    ,		    		'https://themes.themegoods.com/photography/demo3/wp-content/uploads/2017/10/averie-woodard-319828.jpg'
		    ,		    		'https://themes.themegoods.com/photography/demo3/wp-content/uploads/2017/10/guy-bowden-95257.jpg'
		    ,		    		'https://themes.themegoods.com/photography/demo3/wp-content/uploads/2017/10/chris-b-229247.jpg'
		    	        ],
	        frames_per_second: 100,
		    display_time: 7000,
		    zoom: 1.2,
		    fade_time: 1000,
	    });
	});
    
    jQuery('#kb-prevslide ').click(function(ev) {
        ev.preventDefault();
        kb.prevSlide();
    });

    jQuery('#kb-nextslide').click(function(ev) {
        ev.preventDefault();
        kb.nextSlide();
    });
		
});