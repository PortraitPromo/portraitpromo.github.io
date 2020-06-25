jQuery(function($){
    	$.supersized({
    	
    		    		//Functionality
    		slideshow               :   1,		//Slideshow on/off
    		autoplay				:	0,		//Slideshow starts playing automatically
    		start_slide             :   1,		//Start slide (0 is random)
    		random					: 	0,		//Randomize slide order (Ignores start slide)
    		slide_interval          :   9000,	//Length between transitions
    		    		transition              :   1, 		//0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
    		transition_speed		:	800,	//Speed of transition
    		new_window				:	1,		//Image links open in new window/tab
    		pause_hover             :   1,		//Pause slideshow on hover
    		keyboard_nav            :   1,		//Keyboard navigation on/off
    		performance				:	1,		//0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
    		image_protect			:	0,		//Disables image dragging and right click with Javascript

    		//Size & Position
    		min_width		        :   0,		//Min width allowed (in pixels)
    		min_height		        :   0,		//Min height allowed (in pixels)
    		vertical_center         :   1,		//Vertically center background
    		horizontal_center       :   1,		//Horizontally center background
    		    		fit_portrait         	:   0,		//Portrait images will not exceed browser height
    		fit_landscape			:   0,		//Landscape images will not exceed browser width
    		fit_always				: 	0,
    		
    		//Components
    		navigation              :   0,		//Slideshow controls on/off
    		thumbnail_navigation    :  	0,		//Thumbnail navigation
    		slide_counter           :   0,		//Display slide numbers
    		slide_captions          :   0,		//Slide caption (Pull from "title" in slides array)
    		progress_bar			:	0,
    		slides 					:  	[		//Slideshow Images

    	{image : 'https://themes.themegoods.com/photography/demo3/wp-content/uploads/2017/10/camila-cordeiro-114286.jpg', title: '<div id="gallery_caption" class="caption_alt"><div class="full_caption_alt">Culture &amp; Traditional</div><h2>Relax, Recharge and Reflect. Sometimes it’s OK to do nothing</h2><a href="https://themes.themegoods.com/photography/demo3/product/vadim-sherbakov/" class="button ghost"><i class="fa fa-shopping-cart marginright"></i>Purchase</a></div>'},{image : 'https://themes.themegoods.com/photography/demo3/wp-content/uploads/2017/10/guy-bowden-95257.jpg', title: '<div id="gallery_caption" class="caption_alt"><div class="full_caption_alt">Landscape Photography</div><h2>When we are no longer able to change a situation - we are challenged to change ourselves</h2><a href="https://themes.themegoods.com/photography/demo3/product/hidden-people/" class="button ghost"><i class="fa fa-shopping-cart marginright"></i>Purchase</a></div>'},{image : 'https://themes.themegoods.com/photography/demo3/wp-content/uploads/2017/10/sam-ferrara-136526.jpg', title: '<div id="gallery_caption" class="caption_alt"><div class="full_caption_alt">Landscape Photography</div><h2>Hitchhiking down one of the highest roads in the world</h2><a href="https://themes.themegoods.com/photography/demo3/product/happy-time/" class="button ghost"><i class="fa fa-shopping-cart marginright"></i>Purchase</a></div>'},{image : 'https://themes.themegoods.com/photography/demo3/wp-content/uploads/2017/10/jonatan-pie-234237.jpg', title: '<div id="gallery_caption" class="caption_alt"><div class="full_caption_alt">Lighting &amp; Exposure</div><h2>We love life, not because we are used to living but because we are used to loving</h2><a href="https://themes.themegoods.com/photography/demo3/product/the-beatles-running/" class="button ghost"><i class="fa fa-shopping-cart marginright"></i>Purchase</a></div>'},{image : 'https://themes.themegoods.com/photography/demo3/wp-content/uploads/2017/10/alexander-mils-139941.jpg', title: '<div id="gallery_caption" class="caption_alt"><div class="full_caption_alt">Portrait Photography</div><h2>The future belongs to those who believe in the beauty of their dreams</h2><a href="https://themes.themegoods.com/photography/demo3/product/relax-time/" class="button ghost"><i class="fa fa-shopping-cart marginright"></i>Purchase</a></div>'},{image : 'https://themes.themegoods.com/photography/demo3/wp-content/uploads/2017/10/andrew-preble-199410.jpg', title: '<div id="gallery_caption" class="caption_alt"><div class="full_caption_alt">Life Photography</div><h2>Keep love in your heart. A life without it is like a sunless garden when the flowers are dead</h2><a href="https://themes.themegoods.com/photography/demo3/product/sunset-at-beach/" class="button ghost"><i class="fa fa-shopping-cart marginright"></i>Purchase</a></div>'}						]
    									
    	}); 
    });

jQuery(document).ready(function(){ 
	jQuery('html[data-style=fullscreen]').touchwipe({
		wipeLeft: function(){ 
	    	api.prevSlide();
	  	},
	   	wipeRight: function(){ 
	       	api.nextSlide();
	   	}
	});
	
	var isDisableDragging = jQuery('#pp_enable_dragging').val();
	
	if(isDisableDragging!='')
	{
		jQuery("img").mousedown(function(){
		    return false;
		});
	}
});
