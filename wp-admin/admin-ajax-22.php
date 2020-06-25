function loadGalleryImage1592523875654623421()
{
	if(jQuery('#1592523875654623421_status').val() == 0)
	{
		var currentOffset = parseInt(jQuery('#1592523875654623421_offset').val());
		jQuery('#1592523875654623421_loading').addClass('visible');
	
		jQuery.ajax({
	        url: 'https://themes.themegoods.com/photography/demo3/wp-admin/admin-ajax.php',
	        type:'POST',
	        data: 'action=photography_gallery_grid&gallery_id=263&items=4&offset='+currentOffset+'&columns=2&type=grid&tg_security='+tgAjax.ajax_nonce, 
	        success: function(html)
	        {
	        	jQuery('#1592523875654623421_offset').val(parseInt(currentOffset+4));
	        
				            jQuery('#1592523875654623421').append(html);
	            
	            jQuery('#1592523875654623421').imagesLoaded().done( function( instance ) {
		            setTimeout(function(){
						jQuery('#1592523875654623421').children('.element').children('.gallery_type').each(function(){
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
				
				jQuery('#1592523875654623421_loading').removeClass('visible');
	        }
	    });
	}
}

jQuery(window).load(function(){ 
	jQuery(document).ajaxStart(function() {
	  	jQuery('#1592523875654623421_status').val(1);
	});
	
	jQuery(document).ajaxStop(function() {
	  	jQuery('#1592523875654623421_status').val(0);
	});

	if (jQuery(document).height() <= jQuery(window).height())
	{
        var currentOffset = parseInt(jQuery('#1592523875654623421_offset').val());
		var total = parseInt(jQuery('#1592523875654623421_total').val());
		
		if (currentOffset > total)
	    {
	        return false;
	    }
	    else
	    {
	        loadGalleryImage1592523875654623421();
	    }
    }

	jQuery(window).on('scroll', function() {
		var currentOffset = parseInt(jQuery('#1592523875654623421_offset').val());
		var total = parseInt(jQuery('#1592523875654623421_total').val());
		var wrapperHeight = jQuery(this).height();
		
		if(jQuery(window).height() > 1000)
		{
		    var targetOffset = parseInt(jQuery('#1592523875654623421').offset().top/2);
		}
		else
		{
		    var targetOffset = jQuery('#1592523875654623421').offset().top;
		}

	
	    if(jQuery(window).scrollTop() > targetOffset)
	    {
	    	if (currentOffset >= total)
	    	{
	    		return false;
	    	}
	    	else
	    	{
	    		loadGalleryImage1592523875654623421();
	    	}
	    }
	});
});