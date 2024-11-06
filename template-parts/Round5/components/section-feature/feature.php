<div id="features">
	<?php 
		$title = get_sub_field('title_pc');
		$title_mb = get_sub_field('title_mobile');
		$features = get_sub_field('feature_item_component');
		$btn_discover = get_sub_field('button_discover');
		$btn_feature = get_sub_field('button_view_features_in_full');
	?>
	<div class="container">
		<?php if($title && $title_mb): ?>
			<h2 class="headline">
				<?php if(isMobileDevice()): ?>
					<?php echo $title_mb ?>
				<?php else: ?>
					<?php echo $title ?>
				<?php endif; ?>
			</h2>
		<?php endif; ?>
	</div>
	<?php if(!isMobileDevice()): ?>
			<div class="overlay__deco_left">
			
			</div>
			<div class="overlay__deco_first">

			</div>
			<div class="overlay__deco_sec">

			</div>
		<?php endif; ?>
	<div class="container features">
		
		<?php 
			foreach($features as $index => $item){
				$heading = $item['heading'];	
				$content = $item['content'];	
				$feature_image = $item['feature_image'];	
				$button_link = $item['button_link'];	
		?>
			<div class="feature__container feature-<?php echo $index + 1 ?>">
				 <div class="feature__left">
					 <h3 class="section-title feature__title">
						 <?php echo $heading ?>
					 </h3>
					 <div class="section-description feature__description">
						 <?php echo $content ?>
					 </div>
					 <a class="section-link-btn feature__link"
						 href="<?php echo $button_link['url'] ?>"><?php echo $button_link['title'] ?>
						 <?php echo wp_get_attachment_image(30542, 'full', true); ?></a>
				 </div>
				 <div class="feature__right">
					 <?php echo wp_get_attachment_image($feature_image, 'full', true); ?>
				 </div>
			 </div>
		<?php
			}
		?>
		<?php if($btn_discover && $btn_feature): ?>
			<div class="box__btn__partnership">
				<a href="<?= $btn_feature['url'] ?>" class="btn-xl btn-primary btn__view"><?= $btn_feature['title'] ?></a>
				<a href="<?= $btn_discover['url'] ?>" class="btn-xl btn-ghost btn__pricing"><?= $btn_discover['title'] ?></a>
			</div>
		<?php endif; ?>
		
	</div>
</div>