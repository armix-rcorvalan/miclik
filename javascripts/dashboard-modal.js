jQuery(document).ready(function($) {

	jQuery('.dashboard-modal__close').click(function(event) {
		jQuery(this).closest('.dashboard-modal').fadeOut();
		return false;
	});

});