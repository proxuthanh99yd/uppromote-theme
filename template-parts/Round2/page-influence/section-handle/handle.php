<section id="handle">
	<?php 
		$handle_influencer = get_field('handle_influencer');
		$title = $handle_influencer['title'];
		$description = $handle_influencer['description'];
		$background = $handle_influencer['background'];
		$background_mb = $handle_influencer['background_mb'];
	?>
	<div class="handle__background">
      <?php if(!isMobileDevice()): ?>
		<?php echo wp_get_attachment_image($background,'full',false) ?>
	  <?php else: ?>
		<?php echo wp_get_attachment_image($background_mb,'full',false) ?>
	  <?php endif; ?>
	</div>
	<div class="handle__content">
	  <div class="container">
		<h2 class="headline">
		  <?php echo $title ?>
		</h2>
		<div class="handle__content__description font-size-caption">
		  <p>
			<?php echo $description ?>
		  </p>
		</div>
	  </div>
	</div>
</section>