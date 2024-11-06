<section id="affiliate__mkt">
	<?php 
		$aff_mkt = get_field('affiliate_marketing_gt');
		$title = $aff_mkt['title'];
		$desc = $aff_mkt['desc'];
		$data_list = $aff_mkt['data_list'];
	?>
	<div class="container">
		<div class="content__left">
			<h2 class="headline">
				<?= $title ?>
			</h2>
			<div class="desc">
				<?= $desc ?>
			</div>
		</div>

		<div class="content__right">
			<?php foreach($data_list as $item): ?>
				<div class="feature__item">
					<span class="number"><?= $item['number'] ?></span>
					<span class="subtitle"><?= $item['content'] ?></span>
				</div>
			<?php endforeach; ?>
		</div>
	</div>

</section>