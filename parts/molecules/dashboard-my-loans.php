<div class="dc">
	<div class="dc__inner">
		<div class="dc__row">
			<div class="dc__col-6">
				
				<h2 class="dc-title">Mis préstamos</h2>

				<div class="dc-tabs">
					
					<ul class="dc-tabs__menu">
						<li class="dc-tabs__menu-item dc-tabs__menu-item--active" data-content-id="1">
							<a href="" class="dc-tabs__menu-link">Activos</a>
						</li>
						<li class="dc-tabs__menu-item" data-content-id="2">
							<a href="" class="dc-tabs__menu-link">Anteriores</a>
						</li>
					</ul>

					<div class="dc-tabs__content">
						<div class="dc-tabs__content-item dc-tabs__content-item--active" id="dc-tabs__content-item-1">
							<ul class="dc-my-loans-list">
								<li class="dc-my-loans-list__item">
									<a href="" class="dc-my-loans-list__link">
										<span class="dc-my-loans-list__link-left">
											<span class="dc-my-loans-list__link-text">2/6/20</span>
											<span class="dc-my-loans-list__link-title">Préstamo #9635</span>
										</span>
										<span class="dc-my-loans-list__link-right">
											<span class="dc-my-loans-list__link-text">Monto solicitado</span>
											<span class="dc-my-loans-list__link-title">$50.000</span>
										</span>
										<span class="dc-my-loans-list__arrow">
											<img src="images/icon-arrow-right-green.svg">
										</span>
									</a>
								</li>
							</ul>
						</div>
						<div class="dc-tabs__content-item" id="dc-tabs__content-item-2">
							<ul class="dc-my-loans-list">
								<?php for ($i=6; $i > 0; $i--) : ?>
								<li class="dc-my-loans-list__item">
									<a href="" class="dc-my-loans-list__link">
										<span class="dc-my-loans-list__link-left">
											<span class="dc-my-loans-list__link-text">2/6/20</span>
											<span class="dc-my-loans-list__link-title">Préstamo #000<?php echo $i; ?></span>
										</span>
										<span class="dc-my-loans-list__link-right">
											<span class="dc-my-loans-list__link-text">Monto solicitado</span>
											<span class="dc-my-loans-list__link-title">$50.000</span>
										</span>
										<span class="dc-my-loans-list__arrow">
											<img src="images/icon-arrow-right-green.svg" class="dc-my-loans-list__arrow--icon">
										</span>
									</a>
								</li>
								<?php endfor; ?>
							</ul>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>
</div>