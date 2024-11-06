<section id="simplify_mb">
	<?php 
		$simplify = get_field('simplify_mkt');
		$title = $simplify['title'];
		$image_mobile = $simplify['image_mobile'];
		$features = $simplify['features'];
	?>
	<div class="overlay"></div>
	<div class="container">
		<h2 class="headline"><?= $title ?></h2>
		<div class="simplify__step">
			<?= wp_get_attachment_image($image_mobile['ID'],'full',false) ?>
			<?php foreach($features as $item): ?>
				<div class="simplify__item">
					<span class="subtitle"><?= $item['description'] ?></span>
				</div>
			<?php endforeach; ?>
			
		</div>
	</div>
</section>