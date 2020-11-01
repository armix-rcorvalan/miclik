<form class="dc">
	<div class="dc__inner">
		<div class="dc__row">
			<div class="dc__col-3">

				<div class="dc-counter">
					<?php require TD . '/parts/molecules/dashboard-counter.php'; ?>
				</div>
				
				<div class="step__heading">
					<div class="step__title">¿Querés un nuevo préstamo?</div>
					<div class="step__excerpt">Podés pedir hasta $50.000 más</div>
				</div>

				<div class="dc__form-group">

					<div class="input-group">
						<div class="input-control">
							<div class="input-range">
								<div class="input-range__top">
									<span class="input-label">¿Cuánto dinero necesitás?</span>
									<span class="input-range__value-wrapper">$<span class="input-range__value">20000</span></span>
								</div>
								<div class="input-range__input-wrapper">
									<input type="number" class="input-range__input" name="" value="1000" min="1000" max="100000" />
								</div>
								<div class="input-range__bottom">
									<span class="input-range__min">$1.000</span>
									<span class="input-range__max">$100.000</span>
								</div>
							</div>
						</div>
					</div>

					<div class="input-group">
						<div class="input-label">¿En cuántas cuotas querés pagarlo?</div>
						<div class="input-control">
							<div class="input-radio">
								<input type="radio" name="cuotas" value="" id="cuotas_1" checked>
								<label for="cuotas_1">3 cuotas de $8.000</label>
							</div>
							<div class="input-radio">
								<input type="radio" name="cuotas" value="" id="cuotas_2">
								<label for="cuotas_2">6 cuotas de  $5.000</label>
							</div>
							<div class="input-radio">
								<input type="radio" name="cuotas" value="" id="cuotas_3">
								<label for="cuotas_3">9 cuotas de  $4.000</label>
							</div>
						</div>
					</div>

					<div class="input-group">

						<div class="input-label input-label--info">
							<p>Conocé el detalle del préstamo</p>
							<a href=""><img src="images/icon-info-orange.svg"></a>
						</div>

						<div class="dc-table">
						
							<div class="table">
								<table>
									<tbody>
										<tr>
											<td>TNA</td>
											<td class="table__right">35%</td>
										</tr>
										<tr>
											<td>TEA</td>
											<td class="table__right">35%</td>
										</tr>
										<tr>
											<td>CFT</td>
											<td class="table__right">35%</td>
										</tr>
										<tr>
											<td>Intereses en pesos</td>
											<td class="table__right">$4.000</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<td>Total a devolver</td>
											<td class="table__right">$24.000</td>
										</tr>
									</tfoot>
								</table>
							</div>

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