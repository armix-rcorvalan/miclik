jQuery(document).ready(function($) {

	// Tabs
	jQuery('.dc-tabs__menu-link').click(function(event) {
		var content_id = jQuery(this).parent('.dc-tabs__menu-item').data('content-id');
		
		if ( ! jQuery(this).parent('.dc-tabs__menu-item').hasClass('dc-tabs__menu-item--active') ) {
			jQuery('.dc-tabs__menu-item').removeClass('dc-tabs__menu-item--active');
			jQuery(this).parent('.dc-tabs__menu-item').addClass('dc-tabs__menu-item--active');

			jQuery('.dc-tabs__content-item').removeClass('dc-tabs__content-item--active');
			jQuery('#dc-tabs__content-item-'+content_id).addClass('dc-tabs__content-item--active');
		}

		return false;
	});

	// Accordion
	jQuery('.dc-accordion__item-title').click(function(event) {
		if ( jQuery(this).parent('.dc-accordion__item').hasClass('dc-accordion__item--active') ) {
			jQuery(this).parent('.dc-accordion__item').removeClass('dc-accordion__item--active');
		} else {
			jQuery(this).parent('.dc-accordion__item').addClass('dc-accordion__item--active');
		}
		return false;
	});

	jQuery('.dc-pay-fee__accordion-title').click(function(event) {
		if ( jQuery(this).parent('.dc-pay-fee__accordion').hasClass('dc-pay-fee__accordion--active') ) {
			jQuery(this).parent('.dc-pay-fee__accordion').removeClass('dc-pay-fee__accordion--active');
		} else {
			jQuery(this).parent('.dc-pay-fee__accordion').addClass('dc-pay-fee__accordion--active');
		}
		return false;
	});

});