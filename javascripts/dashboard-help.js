jQuery(document).ready(function($) {
	jQuery('.dashboard-help__link').click(function(event) {
		var parent = jQuery(this).parent();

		if ( jQuery(parent).hasClass('dashboard-help--active') ) {
			jQuery(parent).removeClass('dashboard-help--active');
		} else {
			jQuery(parent).addClass('dashboard-help--active');
		}
		return false;
	});
});