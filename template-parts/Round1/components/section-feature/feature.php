<section id="features">
	<?php 
		$title = get_sub_field('title');
		$title_mobile = get_sub_field('title_mobile');
		$features = get_sub_field('feature_item_r1');
		$features2 = get_sub_field('feature_item_r2');
		$button_view_features = get_sub_field('button_view_features');
		$button_discover = get_sub_field('button_discover');
		if (empty($features) && !empty($features2)) {
			$features = $features2;
		}
	?>
	<div class="container">
		<h2 class="headline title">
			<?php if(wp_is_mobile()): ?>
				<?= $title_mobile ?>
			<?php else: ?>
				<?= $title ?>
			<?php endif; ?>
		</h2>
	</div>
	<div class="features">
		<?php foreach($features as $index => $item): ?>
			<div class="feature__container feature-<?= $index + 1 ?>">
				<div class="container">
					<div class="feature__left">
						<?php if(!empty($item['subtitle'])): ?>
							<span class="feature_tag"><?= $item['sub_title'] ?></span>
						<?php endif; ?>
						<h3 class="section-title feature__title">
							<?= $item['title'] ?>
						</h3>
						<div class="section-description feature__description">
							<?= $item['description'] ?>
						</div>
						<a class="section-link-btn feature__link" href="<?= $item['button_link']['url'] ?>">
							<span><?= $item['button_link']['title'] ?></span>
							<?= wp_get_attachment_image(30542,'full',false) ?>
						</a>
					</div>
					<div class="feature__right">
						<div class="overlay">
							
						</div>
						<?= wp_get_attachment_image($item['feature_image'],'full',false) ?>
					</div>
				</div>
				 <?php if ($index === count($features) - 1 && isset($button_view_features['url'], $button_view_features['title'], $button_discover['url'], $button_discover['title'])): ?>
					<div class="box__btn__partnership">
						<a href="<?= $button_view_features['url'] ?>" class="btn-xl btn-primary btn__view"><?= $button_view_features['title'] ?></a>
						<a href="<?= $button_discover['url'] ?>" class="btn-xl btn-ghost btn__pricing"><?= $button_discover['title'] ?></a>
					</div>
				<?php endif; ?>
			</div>
		<?php endforeach; ?>
	</div>
</section>