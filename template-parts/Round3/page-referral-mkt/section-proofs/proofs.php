<section id="proofs">
	<?php 
		$proof = get_field('proofs_ref');
		$title = $proof['title'];
		$list = $proof['list'];
	?>
<!-- 	<img src="https://uppromote-dev.okhub-tech.com/wp-content/uploads/2024/10/BG.webp" alt="" class="background"> -->
	<?= wp_get_attachment_image(32265,'full',false,['class' => 'background']) ?>
	<div class="container">
		<h2 class="headline title"><?= $title ?></h2>
		<div class="proof__group">
			<?php foreach($list as $item): ?>
				<div class="proof__item">
					<?php if(!isMobileDevice()): ?>
						<?= wp_get_attachment_image(32267,'full',false) ?>
					<?php else: ?>
						<?= wp_get_attachment_image(32268,'full',false) ?>
					<?php endif; ?>
					<span class="quantity"><?= $item['number'] ?></span>
					<span class="subtitle"><?= $item['text'] ?></span>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>