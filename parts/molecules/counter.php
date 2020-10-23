<!--
counter__circle--done
counter__circle--current
-->
<div class="counter <?php echo $class; ?>">
	<div class="counter__circle counter__circle--1 counter__circle--current">
		<div class="counter__number">1</div>
		<img src="images/icon-check.svg" class="counter__check">
	</div>
	<div class="counter__line"></div>
	<div class="counter__circle counter__circle--2">
		<div class="counter__number">2</div>
		<img src="images/icon-check.svg" class="counter__check">
	</div>
	<div class="counter__line"></div>
	<div class="counter__circle counter__circle--3">
		<div class="counter__number">3</div>
		<img src="images/icon-check.svg" class="counter__check">
	</div>
	<div class="counter__line"></div>
	<div class="counter__circle counter__circle--4">
		<div class="counter__number">4</div>
		<img src="images/icon-check.svg" class="counter__check">
	</div>
	<div class="counter__line"></div>
	<div class="counter__circle counter__circle--5">
		<div class="counter__number">5</div>
		<img src="images/icon-check.svg" class="counter__check">
	</div>
</div>
<?php unset($class); ?>