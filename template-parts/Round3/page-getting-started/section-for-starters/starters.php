<section id="starter">
	<?php 
		$starter = get_field('for_starters');
		$title = $starter['title'];
		$top_picks = $starter['top-picks'];
	?>
	<div class="container">
		<h2 class="headline">
			<?= $title ?>
		</h2>
		<div class="starter__group">
			<?php foreach($top_picks as $item): ?>
				<div class="starter__item">
					<?= wp_get_attachment_image($item['icon'],'full',false,['class' => 'icon']) ?>
					<span class="title"><?= $item['title'] ?></span>
					<p class="desc">
						<?= $item['description'] ?>
					</p>
				</div>
			<?php endforeach; ?>
		</div>   
	</div>
</section>