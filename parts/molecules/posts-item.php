<?php
require 'posts-item-content.php';
$posts_item = $posts_item_content[$post_id];
?>
<div class="posts-item <?php echo $class; ?>">
	<img src="images/posts-item-<?php echo $post_id; ?>.jpg" class="posts-item__image">
	<div class="posts-item__content">
		<div class="posts-item__date">22 | 6 | 20</div>
		<div class="posts-item__text" data-mh="posts-item__text">
			<h3 class="posts-item__title title-4"><?php echo $posts_item['title']; ?></h3>
			<p class="posts-item__excerpt text-2"><?php echo $posts_item['excerpt']; ?></p>
		</div>
		<div class="posts-item__button-wrapper">
			<a href="#" class="posts-item__read-more button-2">Leer más...</a>
		</div>
	</div>
</div>
<?php unset( $class ); ?>