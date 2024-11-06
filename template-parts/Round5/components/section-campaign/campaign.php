<section id="campaign">
	<?php 
		$campaign = get_field('campaign');
		$background = $campaign['background'];
		$title = $campaign['title'];
		$desc = $campaign['description'];
		$features = $campaign['features'];
	?>
	<?= wp_get_attachment_image($background,'full',false,['class' => 'background']) ?>
	<div class="container">
		<h2 class="headline"><?= $title ?></h2>    
		<p class="desc description__subheading">
			<?= $desc ?>
		</p>
		<div class="campaign__group">
			<?php foreach($features as $item): ?>
				<div class="campaign__box">
					<div class="campaign__item">
						<div class="campaign__item__icon">
							<?= wp_get_attachment_image($item['icon'],'full',false) ?>
						</div>
						<h5 class="campaign__item__title"><?= $item['content'] ?></h5>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>