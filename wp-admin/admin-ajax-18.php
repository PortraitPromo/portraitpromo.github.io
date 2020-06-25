function loadGalleryImage15925218551565911737()
{
	if(jQuery('#15925218551565911737_status').val() == 0)
	{
		var currentOffset = parseInt(jQuery('#15925218551565911737_offset').val());
		jQuery('#15925218551565911737_loading').addClass('visible');
	
		jQuery.ajax({
	        url: 'https://themes.themegoods.com/photography/demo3/wp-admin/admin-ajax.php',
	        type:'POST',
	        data: 'action=photography_gallery_grid&gallery_id=302&items=9&offset='+currentOffset+'&columns=3&type=grid&tg_security='+tgAjax.ajax_nonce, 
	        success: function(html)
	        {
	        	jQuery('#15925218551565911737_offset').val(parseInt(currentOffset+9));
	        
				            jQuery('#15925218551565911737').append(html);
	            
	            jQuery('#15925218551565911737').imagesLoaded().done( function( instance ) {
		            setTimeout(function(){
						jQuery('#15925218551565911737').children('.element').children('.gallery_type').each(function(){
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
				
				jQuery('#15925218551565911737_loading').removeClass('visible');
	        }
	    });
	}
}

jQuery(window).load(function(){ 
	jQuery(document).ajaxStart(function() {
	  	jQuery('#15925218551565911737_status').val(1);
	});
	
	jQuery(document).ajaxStop(function() {
	  	jQuery('#15925218551565911737_status').val(0);
	});

	if (jQuery(document).height() <= jQuery(window).height())
	{
        var currentOffset = parseInt(jQuery('#15925218551565911737_offset').val());
		var total = parseInt(jQuery('#15925218551565911737_total').val());
		
		if (currentOffset > total)
	    {
	        return false;
	    }
	    else
	    {
	        loadGalleryImage15925218551565911737();
	    }
    }

	jQuery(window).on('scroll', function() {
		var currentOffset = parseInt(jQuery('#15925218551565911737_offset').val());
		var total = parseInt(jQuery('#15925218551565911737_total').val());
		var wrapperHeight = jQuery(this).height();
		
		if(jQuery(window).height() > 1000)
		{
		    var targetOffset = parseInt(jQuery('#15925218551565911737').offset().top/2);
		}
		else
		{
		    var targetOffset = jQuery('#15925218551565911737').offset().top;
		}

	
	    if(jQuery(window).scrollTop() > targetOffset)
	    {
	    	if (currentOffset >= total)
	    	{
	    		return false;
	    	}
	    	else
	    	{
	    		loadGalleryImage15925218551565911737();
	    	}
	    }
	});
});