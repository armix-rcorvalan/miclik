<?php $step = ( isset( $step ) ) ? $step : 1; ?>
<div class="counter counter--dashboard <?php echo $class; ?>">
	<div class="counter__circle counter__circle--1 <?php if ( $step > 1 ) : ?>counter__circle--done<?php endif; ?> <?php if ( $step == 1 ) : ?>counter__circle--current<?php endif; ?>">
		<div class="counter__number">1</div>
		<img src="images/icon-check.svg" class="counter__check">
	</div>
	<div class="counter__line"></div>
	<div class="counter__circle counter__circle--2 <?php if ( $step > 2 ) : ?>counter__circle--done<?php endif; ?> <?php if ( $step == 2 ) : ?>counter__circle--current<?php endif; ?>">
		<div class="counter__number">2</div>
		<img src="images/icon-check.svg" class="counter__check">
	</div>
	<div class="counter__line"></div>
	<div class="counter__circle counter__circle--3 <?php if ( $step > 3 ) : ?>counter__circle--done<?php endif; ?> <?php if ( $step == 3 ) : ?>counter__circle--current<?php endif; ?>">
		<div class="counter__number">3</div>
		<img src="images/icon-check.svg" class="counter__check">
	</div>
</div>
<?php unset($class); ?>
<?php unset($step); ?>