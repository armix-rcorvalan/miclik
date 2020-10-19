<?php
require 'posts-item-content.php';
$posts_item = $posts_item_content[$post_id];
?>
<div class="posts-item-hz <?php echo $class; ?>">
	<div class="posts-item-hz__wrapper">
		<img src="images/posts-item-<?php echo $post_id; ?>.jpg" class="posts-item-hz__image">
		<div class="posts-item-hz__content">
			<div class="posts-item-hz__text" data-mh="posts-item-hz__text">
				<h3 class="posts-item-hz__title title-4"><?php echo $posts_item['title']; ?></h3>
				<p class="posts-item-hz__excerpt text-2"><?php echo $posts_item['excerpt']; ?></p>
			</div>
			<div class="posts-item-hz__button-wrapper">
				<a href="#" class="posts-item-hz__read-more button-2">Leer más...</a>
			</div>
		</div>
	</div>
</div>
<?php unset( $class ); ?>