jQuery("#portfolio_filter_wrapper").imagesLoaded().done( function( instance ) {
	setTimeout(function(){
		jQuery('#portfolio_filter_wrapper').masonry({
		  itemSelector: '.element',
		  columnWidth: '.element',
		  gutter: 30,
		  percentPosition: true,
		  transitionDuration: 0,
		});

	    jQuery("#portfolio_filter_wrapper").children(".element").children(".gallery_type").each(function(){
	        jQuery(this).addClass("fade-in");
	    });
	    
	    jQuery(window).trigger('hwparallax.reconfigure');
	}, 500);
});
	if(jQuery('#tg_portfolio_filterable_link').val()!=1)
	{
		jQuery('#portfolio_wall_filters_portfolio_filter_wrapper li a, #portfolio_wall_filters li a').click(function(){
			jQuery(document.body).css({'cursor' : 'wait'});
		  	var selector = jQuery(this).attr('data-filter');
		  	
		  	jQuery('#portfolio_wall_filters_portfolio_filter_wrapper li a, #portfolio_wall_filters li a').removeClass('active');
		  	jQuery(this).addClass('active');

		  	jQuery('#portfolio_filter_wrapper').addClass('loading');
		  	
		  	jQuery.ajax({
		        url: 'https://themes.themegoods.com/photography/demo3/wp-admin/admin-ajax.php',
		        type:'POST',
		        data: 'action=photography_portfolio_grid&cat='+selector+'&items=-1&columns=2&type=masonry&layout=wide&current_page_id=707&tg_security='+tgAjax.ajax_nonce, 
		        success: function(html)
		        {
			        jQuery('#portfolio_filter_wrapper').masonry('destroy');
		        	jQuery('#portfolio_filter_wrapper').html(html);
		        	
		        	jQuery("#portfolio_filter_wrapper").imagesLoaded().done( function( instance ) {
			        	setTimeout(function(){
				        	jQuery('#portfolio_filter_wrapper').masonry({
							  itemSelector: '.element',
							  columnWidth: '.element',
							  gutter: 30,
							  percentPosition: true,
							  transitionDuration: 0,
							});
							
							jQuery("#portfolio_filter_wrapper").children(".element").children(".gallery_type").each(function(){
						        jQuery(this).addClass("fade-in");
						    });
						    
						    jQuery(window).trigger('hwparallax.reconfigure');
						    jQuery('#portfolio_filter_wrapper').removeClass('loading');
						    jQuery(document.body).css({'cursor' : 'default'});
						    
						    jQuery(window).trigger('hwparallax.reconfigure');
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
		        }
		    });
		  	
		  	return false;
		});
	}
