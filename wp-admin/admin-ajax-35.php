function loadPortfolioImage15925239111208180870()
{
	if(jQuery('#15925239111208180870_status').val() == 0)
	{
		var currentOffset = parseInt(jQuery('#15925239111208180870_offset').val());
		jQuery('#15925239111208180870_loading').addClass('visible');
	
		jQuery.ajax({
	        url: 'https://themes.themegoods.com/photography/demo3/wp-admin/admin-ajax.php',
	        type:'POST',
	        data: 'action=photography_portfolio_grid&cat=&items=12&items_ini=6&offset='+currentOffset+'&columns=3&type=grid&order=ASC&order_by=menu_order&layout=contain&current_page_id=650&tg_security='+tgAjax.ajax_nonce, 
	        success: function(html)
	        {
	        	jQuery('#15925239111208180870_offset').val(parseInt(currentOffset+6));
	        	
	            var htmlObj = jQuery(html);
				
				jQuery('#15925239111208180870').append(htmlObj).imagesLoaded().done( function( instance ) {
					setTimeout(function(){
						jQuery('#15925239111208180870').masonry('appended',htmlObj, true);
						
						jQuery('#15925239111208180870').children('.element').children('.gallery_type').each(function(){
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
				
				jQuery('#15925239111208180870_loading').removeClass('visible');
	        }
	    });
	}
}

jQuery(window).load(function(){ 
	jQuery("#15925239111208180870").imagesLoaded().done( function( instance ) {
		setTimeout(function(){
			jQuery('#15925239111208180870').masonry({
			  itemSelector: '.element',
			  columnWidth: '.element',
			  gutter: 30,
			  percentPosition: true,
			  transitionDuration: 0,
			});
			
		    jQuery("#15925239111208180870").children(".element").children(".gallery_type").each(function(){
		        jQuery(this).addClass("fade-in");
		    });
		}, 500);
	});
	
	jQuery(document).ajaxStart(function() {
	  	jQuery('#15925239111208180870_status').val(1);
	});
	
	jQuery(document).ajaxStop(function() {
	  	jQuery('#15925239111208180870_status').val(0);
	});

	if (jQuery(document).height() <= jQuery(window).height())
	{
        var currentOffset = parseInt(jQuery('#15925239111208180870_offset').val());
		var total = parseInt(jQuery('#15925239111208180870_total').val());
		
		if (currentOffset > total)
	    {
	        return false;
	    }
	    else
	    {
	        loadPortfolioImage15925239111208180870();
	    }
    }

	jQuery(window).on('scroll', function() {
		var currentOffset = parseInt(jQuery('#15925239111208180870_offset').val());
		var total = parseInt(jQuery('#15925239111208180870_total').val());
		var wrapperHeight = jQuery(this).height();
		
		if(jQuery(window).height() > 1000)
		{
		    var targetOffset = parseInt(jQuery('#15925239111208180870').offset().top/2);
		}
		else
		{
		    var targetOffset = jQuery('#15925239111208180870').offset().top;
		}
	
	    if(jQuery(window).scrollTop() > targetOffset)
	    {
	    	if (currentOffset >= total)
	    	{
	    		return false;
	    	}
	    	else
	    	{
	    		loadPortfolioImage15925239111208180870();
	    	}
	    }
	});
	
	if(jQuery('#tg_portfolio_filterable_link').val()!=1)
	{
		jQuery('#portfolio_wall_filters_15925239111208180870 li a, #portfolio_wall_filters li a').click(function(){
		  	var selector = jQuery(this).attr('data-filter');
		  	
		  	jQuery('#portfolio_wall_filters_15925239111208180870 li a, #portfolio_wall_filters li a').removeClass('active');
		  	jQuery(this).addClass('active');

		  	jQuery('#15925239111208180870').addClass('loading');
		  	
		  	jQuery.ajax({
		        url: 'https://themes.themegoods.com/photography/demo3/wp-admin/admin-ajax.php',
		        type:'POST',
		        data: 'action=photography_portfolio_grid&cat='+selector+'&items=-1&columns=3&type=grid&layout=contain&current_page_id=650&tg_security='+tgAjax.ajax_nonce, 
		        success: function(html)
		        {
			        jQuery('#15925239111208180870').masonry('destroy');
		        	jQuery('#15925239111208180870').html(html);
		        	
		        	jQuery("#15925239111208180870").imagesLoaded().done( function( instance ) {
			        	jQuery('#15925239111208180870').masonry({
						  itemSelector: '.element',
						  columnWidth: '.element',
						  gutter: 30,
						  percentPosition: true,
						  transitionDuration: 0,
						});
						
						jQuery("#15925239111208180870").children(".element").children(".gallery_type").each(function(){
					        jQuery(this).addClass("fade-in");
					    });
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
					
					jQuery('#15925239111208180870').removeClass('loading');
					jQuery('#15925239111208180870_total').val(0);
					
					setTimeout(function(){
						jQuery(window).scroll();
					}, 2000);
		        }
		    });
		  	
		  	return false;
		});
	}
});