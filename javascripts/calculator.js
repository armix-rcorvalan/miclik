jQuery(document).ready(function($) {

	jQuery('.input-range__input').jRange({
		from: 0,
		to: 100,
		step: 1,
		showLabels: false,
		showScale: false,
	});

	jQuery('.input-range__input').change(function(){
		jQuery(this).closest('.input-range').find('.input-range__value').html(jQuery(this).val());
	}); 

});