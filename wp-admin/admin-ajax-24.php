function loadGalleryImage1592523877602560815()
{
	if(jQuery('#1592523877602560815_status').val() == 0)
	{
		var currentOffset = parseInt(jQuery('#1592523877602560815_offset').val());
		jQuery('#1592523877602560815_loading').addClass('visible');
	
		jQuery.ajax({
	        url: 'https://themes.themegoods.com/photography/demo3/wp-admin/admin-ajax.php',
	        type:'POST',
	        data: 'action=photography_gallery_grid&gallery_id=302&items=10&offset='+currentOffset+'&columns=3&type=masonry&tg_security='+tgAjax.ajax_nonce, 
	        success: function(html)
	        {
	        	jQuery('#1592523877602560815_offset').val(parseInt(currentOffset+10));
	        
							var htmlObj = jQuery(html);
				
				jQuery('#1592523877602560815').append(htmlObj).imagesLoaded().done( function( instance ) {
					setTimeout(function(){
						jQuery('#1592523877602560815').masonry('appended',htmlObj, true);
						
						jQuery('#1592523877602560815').children('.element').children('.gallery_type').each(function(){
						    jQuery(this).addClass('fade-in');
					    });
				    }, 500);
				});
							
				if(jQuery('#tg_lightbox_enable').val() != '')
				{
					if(jQuery('#tg_lightbox_plugin').val() == 'modulobox')
					{
						mobx.destroy();
						mobx.init();
					}
					else
					{
						jQuery(document).setLightbox();
					}
				}
				
				jQuery('#1592523877602560815_loading').removeClass('visible');
	        }
	    });
	}
}

jQuery(window).load(function(){ 
	jQuery(document).ajaxStart(function() {
	  	jQuery('#1592523877602560815_status').val(1);
	});
	
	jQuery(document).ajaxStop(function() {
	  	jQuery('#1592523877602560815_status').val(0);
	});

	if (jQuery(document).height() <= jQuery(window).height())
	{
        var currentOffset = parseInt(jQuery('#1592523877602560815_offset').val());
		var total = parseInt(jQuery('#1592523877602560815_total').val());
		
		if (currentOffset > total)
	    {
	        return false;
	    }
	    else
	    {
	        loadGalleryImage1592523877602560815();
	    }
    }

	jQuery(window).on('scroll', function() {
		var currentOffset = parseInt(jQuery('#1592523877602560815_offset').val());
		var total = parseInt(jQuery('#1592523877602560815_total').val());
		var wrapperHeight = jQuery(this).height();
		
		if(jQuery(window).height() > 1000)
		{
		    var targetOffset = parseInt(jQuery('#1592523877602560815').offset().top/2);
		}
		else
		{
		    var targetOffset = jQuery('#1592523877602560815').offset().top;
		}

	
	    if(jQuery(window).scrollTop() > targetOffset)
	    {
	    	if (currentOffset >= total)
	    	{
	    		return false;
	    	}
	    	else
	    	{
	    		loadGalleryImage1592523877602560815();
	    	}
	    }
	});
});