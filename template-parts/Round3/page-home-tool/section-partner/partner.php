<section id="partner">
	<?php 
		$partner = get_field('partner_hometool');
		$title = $partner['title'];
		$images = $partner['image'];
		$duplicatedImage = array_merge($images, $images);
	?>
	<div class="container__partner container">
		<h4 class="title"><?= $title ?></h4>
		<?php if(!isMobileDevice()): ?>
			<div class="gallery">
				<?php foreach($images as $img): ?>    
					<?= wp_get_attachment_image($img, 'full', false) ?>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
		<?php if(isMobileDevice()): ?>
			<div class="container__gallery">
				<div class="gallery">
					<?php foreach($duplicatedImage as $img): ?>    
						<?= wp_get_attachment_image($img, 'full', false) ?>
					<?php endforeach; ?>
				</div>
				<div class="gallery">
					<?php foreach($duplicatedImage as $img): ?>    
						<?= wp_get_attachment_image($img, 'full', false) ?>
					<?php endforeach; ?>	
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>