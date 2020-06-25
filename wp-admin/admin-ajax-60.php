
jQuery(document).ready(function() {
	jQuery('form#contact_form_15925239621240332610').submit(function() {
		jQuery('form#contact_form_15925239621240332610 .error').remove();
		var hasError = false;
		jQuery('.required_field').each(function() {
			if(jQuery.trim(jQuery(this).val()) == '') {
				var labelText = jQuery(this).prev('label').text();
				jQuery('#reponse_msg_15925239621240332610 ul').append('<li class="error">Please enter '+labelText+'</li>');
				hasError = true;
			} else if(jQuery(this).hasClass('email')) {
				var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,13})?$/;
				if(!emailReg.test(jQuery.trim(jQuery(this).val()))) {
					var labelText = jQuery(this).prev('label').text();
					jQuery('#reponse_msg_15925239621240332610 ul').append('<li class="error">Please enter valid '+labelText+'</li>');
					hasError = true;
				}
			}
		});
		if(!hasError) {
			var contactData = jQuery('#contact_form_15925239621240332610').serialize();

			 			jQuery('#contact_submit_btn15925239621240332610').fadeOut('normal', function() {
				jQuery(this).parent().append('<i class="fa fa-circle-o-notch fa-spin"></i>');
			});
 			
 			jQuery.ajax({
			    type: 'POST',
			    url: 'https://themes.themegoods.com/photography/demo3/wp-admin/admin-ajax.php?action=photography_contact_mailer',
			    data: contactData+'&tg_security='+tgAjax.ajax_nonce,
			    success: function(results){
			    	jQuery('#contact_form_15925239621240332610').hide();
			    	jQuery('#reponse_msg_15925239621240332610').html(results);
			    }
			});
 					}
		
		return false;
		
	});
});