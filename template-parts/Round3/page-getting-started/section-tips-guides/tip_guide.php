<section id="blog">
	<?php 
		$blog = get_field('explore_group');
		$title = $blog['title'];
		$blogs = $blog['blogs'];
	?>
	<div class="container">
		<h2 class="headline"><?= $title ?></h2>
		<div class="blog__container">
			<?php foreach($blogs as $item): 
				$post_id = $item->ID;
				$post_title = get_the_title($post_id);
				$post_link = get_permalink($post_id);
				$post_excerpt = get_the_excerpt($post_id);
				$thumbnail_url = get_the_post_thumbnail_url($post_id) ?: '/wp-content/uploads/2024/10/Rectangle-34626452.webp';
			?>
				<a href="<?= esc_url($post_link) ?>" class="blog__item">
					<div class="image">
						<div class="overlay"></div>
						<img src="<?= esc_url($thumbnail_url) ?>" alt="<?= esc_attr($post_title) ?>" class="blog__image">
					</div>
					<p class="title"><?= esc_html($post_title) ?></p>
					<div class="blog__info_bottom">
						<div class="info_right">
							<p class="subtitle">Read more</p>
						</div>
						<img class="arrow" src="/wp-content/uploads/2024/10/Arrow-27-Stroke.png" alt="">
					</div>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>