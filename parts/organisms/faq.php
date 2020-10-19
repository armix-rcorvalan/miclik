<?php

$faq_1 = array(
	'¿Qué es Miclik?',
	'¿Cómo hago para obtener un préstamo?',
	'¿Qué requisitos tengo que cumplir para obtener un préstamo?',
	'¿Cómo puedo pagar las cuotas?',
	'¿Qué pasa si no pago las cuotas?',
	'¿Qué puedo hacer si no llego pagar las cuotas en tiempo y forma?',
	'¿Qué es el puntaje crediticio?'
);

$faq_2 = array(
	'¿Cuánto dinero puedo solicitar?',
	'¿Cuál es el plazo de devolución?',
	'¿Cómo determinan cuanto me pueden prestar?',
	'¿Cuánto tiempo tarda en ser aprobado un préstamo?',
);

$faq_3 = array(
	'¿Por qué no pude acceder un préstamo?',
	'¿Puedo volver a solicitar un préstamo si ya fui rechazo?',
	'¿Qué pasa si no pago las cuotas?'
);

$faq_4 = array(
	'¿Dónde se me acredita el dinero?',
	'¿En cuánto tiempo tengo depositado el dinero?',
);

?>

<div class="faq">
	<div class="faq__search-form">
		<input type="search" class="faq__search-form-input input-search" placeholder="Buscar">
	</div>
	<div class="faq__questions-featured">
		<div class="faq__inner global-inner">
			<div class="faq__title title-5">Lo más preguntado</div>
			<div class="faq__accordion accordion">
				<?php foreach ($faq_1 as $key => $title) : ?>
				<div class="accordion__item <?php if ( $key === 0 ) : ?>accordion__item--active<?php endif; ?>">
					<a href="#" class="accordion__item-title"><?php echo $title; ?></a>
					<div class="accordion__item-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<div class="faq__questions">
		<div class="faq__inner global-inner">
			<div class="faq__title title-5">Montos y plazos</div>
			<div class="faq__accordion accordion">
				<?php foreach ($faq_2 as $key => $title) : ?>
				<div class="accordion__item <?php if ( $key === 0 ) : ?>accordion__item--active<?php endif; ?>">
					<a href="#" class="accordion__item-title"><?php echo $title; ?></a>
					<div class="accordion__item-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
				</div>
				<?php endforeach; ?>
			</div>
			<div class="faq__title title-5">Resultados</div>
			<div class="faq__accordion accordion">
				<?php foreach ($faq_3 as $key => $title) : ?>
				<div class="accordion__item">
					<a href="#" class="accordion__item-title"><?php echo $title; ?></a>
					<div class="accordion__item-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
				</div>
				<?php endforeach; ?>
			</div>
			<div class="faq__title title-5">Depósito</div>
			<div class="faq__accordion accordion">
				<?php foreach ($faq_4 as $key => $title) : ?>
				<div class="accordion__item">
					<a href="#" class="accordion__item-title"><?php echo $title; ?></a>
					<div class="accordion__item-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>