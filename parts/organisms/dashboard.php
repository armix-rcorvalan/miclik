<div class="dashboard">
	<div class="dashboard__header">
		<?php require 'parts/organisms/header-dashboard.php'; ?>
	</div>
	<div class="dashboard__content">
		<?php require TD . '/parts/molecules/dashboard-' . $dashboard . '.php'; ?>
	</div>
	<nav class="dashboard__menu">
		<ul class="dashboard__menu-list">
			<li class="dashboard__menu-item dashboard__menu-item--active">
				<a href="" class="dashboard__menu-link">
					<span class="dashboard__menu-icon-circle">
						<img src="images/icon-home.svg" class="dashboard__menu-icon dashboard__menu-icon--normal">
						<img src="images/icon-home-active.svg" class="dashboard__menu-icon dashboard__menu-icon--active">
					</span>
					<span class="dashboard__menu-text">Inicio</span>
				</a>
			</li>
			<li class="dashboard__menu-item">
				<a href="" class="dashboard__menu-link">
					<span class="dashboard__menu-icon-circle">
						<img src="images/icon-prestamos.svg" class="dashboard__menu-icon dashboard__menu-icon--normal">
						<img src="images/icon-prestamos-active.svg" class="dashboard__menu-icon dashboard__menu-icon--active">
					</span>
					<span class="dashboard__menu-text">Mis Préstamos</span>
				</a>
			</li>
			<li class="dashboard__menu-item">
				<a href="" class="dashboard__menu-link">
					<span class="dashboard__menu-icon-circle">
						<img src="images/icon-nuevo-prestamo.svg" class="dashboard__menu-icon dashboard__menu-icon--normal">
						<img src="images/icon-nuevo-prestamo-active.svg" class="dashboard__menu-icon dashboard__menu-icon--active">
					</span>
					<span class="dashboard__menu-text">Nuevo préstamo</span>
				</a>
			</li>
		</ul>
		<ul class="dashboard__menu-list dashboard__menu-list--exit">
			<li class="dashboard__menu-item">
				<a href="" class="dashboard__menu-link">
					<span class="dashboard__menu-icon-circle">
						<img src="images/icon-exit.svg" class="dashboard__menu-icon dashboard__menu-icon--normal">
					</span>
					<span class="dashboard__menu-text">Salir</span>
				</a>
			</li>
		</ul>
	</nav>
</div>