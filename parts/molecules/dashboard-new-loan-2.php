<form class="dc">
	<div class="dc__inner">
		<div class="dc__row">
			<div class="dc__col-3">

				<div class="dc-counter">
					<?php $step = 2; require TD . '/parts/molecules/dashboard-counter.php'; ?>
				</div>
				
				<div class="step__heading">
					<div class="step__title">Elegí tus preferencias de pago</div>
				</div>

				<div class="dc__form-group">

					<div class="input-group">
						<div class="input-label">Se depositarán en tu cuenta bancaria registrada</div>
						<div class="dc-tip-2">Banco Galicia <br> CBU 2012345678453658456124</div>
					</div>

					<div class="input-group">
						<div class="input-label">¿Qué día del mes preferís que te debitemos?</div>
						<div class="input-control">
							<div class="input-radio">
								<input type="radio" name="pagarlo" value="pagarlo_1" id="pagarlo_1" checked>
								<label for="pagarlo_1">Primer día hábil</label>
							</div>
							<div class="input-radio">
								<input type="radio" name="pagarlo" value="pagarlo_2" id="pagarlo_2" checked>
								<label for="pagarlo_2">Quinto día hábil</label>
							</div>
							<div class="input-radio">
								<input type="radio" name="pagarlo" value="pagarlo_3" id="pagarlo_3" checked>
								<label for="pagarlo_3">Décimo día hábil</label>
							</div>
						</div>
					</div>

					<div class="input-group">
						<div class="input-label">Conocé cuáles serían los vencimientos</div>

						<div class="dc-table">
						
							<div class="table">
								<table>
									<tbody>
										<tr>
											<td>3/5/20</td>
											<td class="table__grow-1">Cuota 1</td>
											<td>$20.000</td>
										</tr>
										<tr>
											<td>3/6/20</td>
											<td>Cuota 2</td>
											<td>$20.000</td>
										</tr>
										<tr>
											<td>3/7/20</td>
											<td>Cuota 3</td>
											<td>$20.000</td>
										</tr>
									</tbody>
								</table>
							</div>

						</div>
					</div>
					
					<div class="input-group">
						<small class="input-help">Las cuotas se debitarán de la misma cuenta bancaria donde depositaremos el dinero. <a href="#">Conocé más opciones.</a></small>
					</div>

				</div>

				<div class="dc__submit">
					<button type="submit" class="dc-button-1">Continuar</button>
				</div>

			</div>
		</div>
	</div>
</form>