					  
jQuery(document).ready(function(){ 
	var $canvas = jQuery('#kenburns');

    $canvas.attr('width', jQuery(window).width());
    $canvas.attr('height', jQuery(window).height());

    var kb = $canvas.kenburned({
        images : [
        	    		'https://themes.themegoods.com/photography/demo3/wp-content/uploads/2017/10/alexander-mils-139941.jpg'
	    ,	    		'https://themes.themegoods.com/photography/demo3/wp-content/uploads/2017/10/tom-ritson-351710.jpg'
	    ,	    		'https://themes.themegoods.com/photography/demo3/wp-content/uploads/2017/10/pexels-photo-206359.jpeg'
	    ,	    		'https://themes.themegoods.com/photography/demo3/wp-content/uploads/2017/10/black-and-red-style-fashion-lady-P3ZFS86.jpg'
	    ,	    		'https://themes.themegoods.com/photography/demo3/wp-content/uploads/2017/10/pexels-photo-481795.jpeg'
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
	        		    		'https://themes.themegoods.com/photography/demo3/wp-content/uploads/2017/10/alexander-mils-139941.jpg'
		    ,		    		'https://themes.themegoods.com/photography/demo3/wp-content/uploads/2017/10/tom-ritson-351710.jpg'
		    ,		    		'https://themes.themegoods.com/photography/demo3/wp-content/uploads/2017/10/pexels-photo-206359.jpeg'
		    ,		    		'https://themes.themegoods.com/photography/demo3/wp-content/uploads/2017/10/black-and-red-style-fashion-lady-P3ZFS86.jpg'
		    ,		    		'https://themes.themegoods.com/photography/demo3/wp-content/uploads/2017/10/pexels-photo-481795.jpeg'
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