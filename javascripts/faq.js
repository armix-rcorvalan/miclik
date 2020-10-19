jQuery(document).ready(function($) {

	jQuery('.accordion__item-title').click(function(event) {
		if ( jQuery(this).parent('.accordion__item').hasClass('accordion__item--active') ) {
			jQuery(this).parent('.accordion__item').removeClass('accordion__item--active');
		} else {
			jQuery(this).parent('.accordion__item').addClass('accordion__item--active');
		}
	});

});