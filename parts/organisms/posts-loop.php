<div class="posts-loop">
	<div class="posts-loop__inner global-inner">
		<div class="posts-loop__list posts-layout">
			<?php 
			for ( $i=1; $i <= 6 ; $i++ ) 
			{ 
				$class = 'posts-loop__item';
				$post_id = $i; 
				require TD . '/parts/molecules/posts-item.php';
			}
			?>
		</div>
		<nav class="posts-loop__pagination pagination">
			<ul class="pagination__list">
				<li class="pagination__item pagination__item--arrow-disabled">
					<span class="pagination__link"><</span>
				</li>
				<li class="pagination__item pagination__item--current">
					<span class="pagination__link">1</span>
				</li>
				<?php for ($i=2; $i <= 4; $i++) : ?>
				<li class="pagination__item">
					<a href="#" class="pagination__link"><?php echo $i; ?></a>
				</li>
				<?php endfor; ?>
				<li class="pagination__item pagination__item--arrow">
					<a href="#" class="pagination__link">></a>
				</li>
			</ul>
		</nav>
	</div>
</div>