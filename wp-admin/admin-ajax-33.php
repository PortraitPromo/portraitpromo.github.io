
jQuery("#portfolio_filter_wrapper").imagesLoaded().done( function( instance ) {
	setTimeout(function(){
	    jQuery("#portfolio_filter_wrapper").children(".element").children(".gallery_type").each(function(){
	        jQuery(this).addClass("fade-in");
	    });
	    
	    jQuery(window).trigger('hwparallax.reconfigure');
    }, 500);
});
	if(jQuery('#tg_portfolio_filterable_link').val()!=1)
	{
		jQuery('#portfolio_wall_filters_portfolio_filter_wrapper li a, #portfolio_wall_filters li a').click(function(){
		  	var selector = jQuery(this).attr('data-filter');
		  	
		  	jQuery('#portfolio_wall_filters_portfolio_filter_wrapper li a, #portfolio_wall_filters li a').removeClass('active');
		  	jQuery(this).addClass('active');

		  	jQuery('#portfolio_filter_wrapper').addClass('loading');
		  	
		  	jQuery.ajax({
		        url: 'https://themes.themegoods.com/photography/demo3/wp-admin/admin-ajax.php',
		        type:'POST',
		        data: 'action=photography_portfolio_mixed_grid&cat='+selector+'&items=-1&layout=contain&current_page_id=4800&tg_security='+tgAjax.ajax_nonce, 
		        success: function(html)
		        {
		        	jQuery('#portfolio_filter_wrapper').html(html);
					
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
					
					jQuery('#portfolio_filter_wrapper').removeClass('loading');
					jQuery(window).trigger('hwparallax.reconfigure');
		        }
		    });
		  	
		  	return false;
		});
	}
