<section id="alternative">
	<?php 
		$best_alternative = get_field('best_alternative');
		$title = $best_alternative['title'];
		$description = $best_alternative['description'];
		$list = $best_alternative['list_best_alternative'];
	?>
	<div class="container">
		<h2 class="headline"><?= $title ?></h2>
		<p class="desc">
			<?= $description ?> 
		</p>
		<div class="affiliate-container">
			<?php foreach($list as $item): ?>
				<a class="affiliate-item" href="<?= $item['link']['url'] ?>">
					<?= wp_get_attachment_image($item['image'],'full',false) ?>
					<h4 class="affiliate-name">
						<?= $item['link']['title'] ?>
					</h4>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>