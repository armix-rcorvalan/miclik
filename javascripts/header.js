jQuery(document).ready(function($) {

	jQuery('.header__menu-icon-link').click(function(event) {
		if ( jQuery('.header__menu-icon').hasClass('header__menu-icon--open') ) {
			jQuery('.header__menu-icon').removeClass('header__menu-icon--open');
			jQuery('.header__menu').removeClass('header__menu--open');
		} else {
			jQuery('.header__menu-icon').addClass('header__menu-icon--open');
			jQuery('.header__menu').addClass('header__menu--open');
		}
	});

});