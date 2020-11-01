<form class="dc">
	<div class="dc__inner">
		<div class="dc__row">
			<div class="dc__col-3">

				<div class="dc-counter">
					<?php $step = 3; require TD . '/parts/molecules/dashboard-counter.php'; ?>
				</div>
				
				<div class="step__heading">
					<div class="step__title">Ya estamos a un solo paso</div>
				</div>

				<div class="dc__form-group">
					<div class="input-group">
						<div class="input-label">Escribí tu contraseña</div>
						<div class="input-control">
							<input type="password" class="input-text" placeholder="*******">
						</div>
					</div>
				</div>

				<div class="dc__submit">
					<button type="submit" class="dc-button-1">Continuar</button>
				</div>

			</div>
		</div>
	</div>
</form>