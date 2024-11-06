<section id="smart__commission">
	<?php 
		$smart_commission = get_field('smart_commission');
		$logo = $smart_commission['logo'];
		$title = $smart_commission['title'];
		$subtitle = $smart_commission['subtitle'];
		$button_read = $smart_commission['button_read'];
		$models = $smart_commission['models'];
		$image = $smart_commission['image'];
		$sub_title_image = $smart_commission['sub_title_image'];
		$title_image = $smart_commission['title_image'];
	?>
	<?php if(isMobileDevice()): ?>
		<?= wp_get_attachment_image(32881,'full',false,['class' => 'background']) ?>
	<?php else: ?>
		<?= wp_get_attachment_image(32490,'full',false,['class' => 'background']) ?>
	<?php endif; ?>
	<div class="container">
		<div class="content__left">
			<?= wp_get_attachment_image($logo,'full',false,['class' => 'logo']) ?>
			<h3 class="title"><?= $title ?></h3>
			<span class="subtitle"><?= $subtitle ?></span>
			<ul class="list__commission">
				<?php foreach($models as $item): ?>
					<div class="commission__item">
						<img class="icon" src="/wp-content/uploads/2024/08/imgCheck.svg" alt="">
						<p><?= $item['content'] ?></p>
					</div>
				<?php endforeach; ?>
			</ul>
			<a href="<?= $button_read['url'] ?>" class="section-link-btn">
				<span><?= $button_read['title'] ?></span>
				<img src="/wp-content/uploads/2024/08/Arrow_Left_MD.svg" alt="">
			</a>
		</div>
		<div class="content__right">
			<div class="overlay"></div>
			<?= wp_get_attachment_image($image,'full',false,['class' => 'image']) ?>
			<span class="subtitle"><?= $sub_title_image ?></span>
			<p class="desc"><?= $title_image ?></p>
		</div>
	</div>
</section>