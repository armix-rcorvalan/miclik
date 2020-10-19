jQuery(document).ready(function($) {
	jQuery('.how-work-questions__menu-link').click(function(event) {
		var current_id = jQuery(this).data('id');

		jQuery('.how-work-questions__menu-item').removeClass('how-work-questions__menu-item--active');
		jQuery(this).parent('.how-work-questions__menu-item').addClass('how-work-questions__menu-item--active');

		jQuery('.how-work-questions__content').hide();
		jQuery('#how-work-questions__content-'+current_id).fadeIn(300);
	});
});