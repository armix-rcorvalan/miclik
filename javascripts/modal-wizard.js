jQuery(document).ready(function($) {

	jQuery('.modal-wizard__close').click(function(event) {
		jQuery(this).closest('.modal-wizard').fadeOut();
		return false;
	});

	jQuery('.modal-trigger').click(function(event) {
		var current_modal_id = jQuery(this).data('modal-id');
		jQuery('#modal-wizard-'+current_modal_id).fadeIn();
		return false;
	});

});