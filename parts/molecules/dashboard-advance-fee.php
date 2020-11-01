<form class="dc">
	<div class="dc__inner">
		<div class="dc__row">
			<div class="dc__col-6">
				
				<a href="" class="dc-back"><img src="images/icon-back.svg"> Detalle del préstamo #9635</a>
				
				<h2 class="dc-title">Adelantar cuota</h2>

				<div class="dc-loans-item">
					<span class="dc-loans-item__left">
						<span class="dc-loans-item__text">2/6/20</span>
						<span class="dc-loans-item__title">Préstamo #9635</span>
					</span>
					<span class="dc-loans-item__right">
						<span class="dc-loans-item__text">Monto solicitado</span>
						<span class="dc-loans-item__title">$50.000</span>
					</span>
				</div>

				<div class="dc-full-loan">
					<div class="input-group dc-full-loan__input">
						<div class="input-control">
							<div class="input-checkbox">
								<input type="checkbox" id="full-loan">
								<label for="full-loan">Pagar préstamo completo</label>
							</div>
						</div>
					</div>
					<div class="dc-full-loan__amount">
						$40.000
					</div>
				</div>

				<div class="dc-pay-fee">
					<div class="dc-pay-fee__accordion dc-pay-fee__accordion--active">
						<a href="#" class="dc-pay-fee__accordion-title">
							<span class="dc-pay-fee__accordion-text">Pagar cuotas</span>
						</a>
						<div class="dc-pay-fee__accordion-content">
							
							<div class="table table--style-2">
								
								<table>
									<thead>
										<tr>
											<th></th>
											<th></th>
											<th>Vencimiento*</th>
											<th class="table__grow-1">Estado</th>
											<th class="table__right">Monto</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td></td>
											<td>Cuota 1</td>
											<td>3/5/20</td>
											<td><span class="badge"><img src="images/icon-badge-paid.svg">Pagada</span></td>
											<td class="table__right">$20.000</td>
										</tr>
										<tr>
											<td>
												<div class="input-checkbox">
													<input type="checkbox">
												</div>
											</td>
											<td>Cuota 2</td>
											<td>3/5/20</td>
											<td></td>
											<td class="table__right">$20.000</td>
										</tr>
										<tr>
											<td>
												<div class="input-checkbox">
													<input type="checkbox">
												</div>
											</td>
											<td>Cuota 3</td>
											<td>3/5/20</td>
											<td></td>
											<td class="table__right">$20.000</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="4"></td>
											<td class="table__total">Total a pagar <span class="table__total-amount">$20.000</span></td>
										</tr>
									</tfoot>
								</table>
								
							</div>

						</div>
					</div>
				</div>

				<div class="dc-pay-gateway">
					<div class="dc-pay-gateway__title">Elegir medio de pago</div>
					<div class="dc-pay-gateway__items">
					<?php for ($i=1; $i <= 4 ; $i++) : ?>
						<div class="dc-pay-gateway__item">
							<input name="dc-pay-gateway" type="radio" id="dc-pay-gateway-<?php echo $i; ?>" class="dc-pay-gateway__item-input">
							<label type="radio" for="dc-pay-gateway-<?php echo $i; ?>"  class="dc-pay-gateway__item-label">
								<span class="dc-pay-gateway__item-circle"></span>
								<img src="images/pay-gateway-<?php echo $i; ?>.png" src="dc-pay-gateway__item-image">
							</label>
						</div>
						<?php endfor;  ?>
					</div>
				</div>

				<div class="dc__submit">
					<button class="dc-button-1">Pagar</button>
				</div>

			</div>
		</div>
	</div>
</form>