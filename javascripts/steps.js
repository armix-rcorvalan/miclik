jQuery(document).ready(function($) {

	var current_step = 11;

	jQuery('.wizard-next').click(function(event) {
		
		switch (current_step) {
			case 11:
				jQuery('.step--current').removeClass('step--current');
				jQuery('.step--12').addClass('step--current');
				current_step = 12;
				break;
			case 12:
				jQuery('.step--current').removeClass('step--current');
				jQuery('.step--2').addClass('step--current');

				jQuery('.counter__circle--1').removeClass('counter__circle--current').addClass('counter__circle--done');
				jQuery('.counter__circle--2').addClass('counter__circle--current');
				current_step = 2;
				break;
			case 2:
				jQuery('.step--current').removeClass('step--current');
				jQuery('.step--3').addClass('step--current');

				jQuery('.counter__circle--2').removeClass('counter__circle--current').addClass('counter__circle--done');
				jQuery('.counter__circle--3').addClass('counter__circle--current');
				current_step = 3;
				break;
			case 3:
				jQuery('.step--current').removeClass('step--current');
				jQuery('.step--41').addClass('step--current');

				jQuery('.counter__circle--3').removeClass('counter__circle--current').addClass('counter__circle--done');
				jQuery('.counter__circle--4').addClass('counter__circle--current');
				current_step = 41;
				break;
			case 41:
				jQuery('.step--current').removeClass('step--current');
				jQuery('.step--42').addClass('step--current');
				current_step = 42;
				break;
			case 42:
				jQuery('.step--current').removeClass('step--current');
				jQuery('.step--5').addClass('step--current');

				jQuery('.counter__circle--4').removeClass('counter__circle--current').addClass('counter__circle--done');
				jQuery('.counter__circle--5').addClass('counter__circle--current');
				current_step = 5;
				break;
			case 5:
				jQuery('.step--current').removeClass('step--current');
				jQuery('.step--finish').addClass('step--current');

				jQuery('.wizard__content-counter').hide();
				break;
		}

	});
});