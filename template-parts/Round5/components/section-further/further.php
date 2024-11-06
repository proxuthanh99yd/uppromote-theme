<section id="further">
	<?php 
		$further = get_field('futhers_custom');
		$title = $further['title'];
		$list = $further['furthers'];
	?>
	<div class="container">
		<h2 class="headline">
			<?= $title ?>
		</h2>
		<div class="further__group">
			<?php foreach($list as $item): ?>
				<div class="further__item">
					<?= wp_get_attachment_image($item['icon'],'full',false,['class' => 'further__img']) ?>
					<span class="title"><?= $item['title'] ?></span>
					<p class="desc"><?= $item['description'] ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>