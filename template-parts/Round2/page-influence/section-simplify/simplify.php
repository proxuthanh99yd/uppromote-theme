<section id='simplify'>
	<?php if(!isMobileDevice()): ?>
		<?php echo wp_get_attachment_image(31277,'full',false,array('class' => 'simplify-background')) ?>
	<?php endif; ?>
	<?php 
		$simplify = get_field('segment_influencers_influ');
		$title = $simplify['simplify_influencer_title'];
		$features = $simplify['features_items'];
	?>
	<div class="container">
		<h2 class="headline">
			<?php echo $title ?>
		</h2>
	</div>
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
	</div>
	
</section>