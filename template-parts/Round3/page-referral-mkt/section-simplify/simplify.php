<section id="simplify">
	<?php 
		$simplify = get_field('simplify_mkt');
		$title = $simplify['title'];
		$image_pc = $simplify['image_pc'];
		$features = $simplify['features'];
	?>
	<div class="container">
		<h2 class="headline title"><?= $title ?></h2>
		<div class="step">
			<?= wp_get_attachment_image($image_pc['ID'],'full',false) ?>
			<div class="step__group">
				<?php foreach($features as $index => $item): ?>
					<div class="step__item">
						<span class="number">0<?= $index+1 ?></span>
						<p class="subtitle"><?= $item['description'] ?></p>
					</div>    
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<div class="overlay__left"></div>
	<div class="overlay__right"></div>
</section>