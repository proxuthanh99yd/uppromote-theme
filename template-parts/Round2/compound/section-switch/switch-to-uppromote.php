<section id="switch">
	<?php 
		$switch = get_field('switch_to_uppromote');
		$title = $switch['title'];
		$desc = $switch['description'];
		$button_link = $switch['button_link'];
		$image_pc = $switch['image'];
		$image_mb = $switch['image_mb'];
	?>
	<?php if (!isMobileDevice()): ?>
		<?php echo wp_get_attachment_image($image_pc, 'full', false, array('class' => 'background')); ?>
	<?php else: ?>
		<?php echo wp_get_attachment_image($image_mb, 'full', false, array('class' => 'background_mobile')); ?>
	<?php endif; ?>
<!-- 	<img class="background" src="https://s-test.okhub-tech.com/wp-content/uploads/2024/09/section-31-_2_-scaled.webp" alt="background" />
	<img class="background_mobile" src="https://s-test.okhub-tech.com/wp-content/uploads/2024/09/Vertical-arrow.png" alt="image" /> -->
	<div class="container">
		<div class="switch-content">
			<h2 class="headline">
				<?php echo $title ?>
			</h2>
			<p class="description">
				<?php echo $desc ?>
			</p>
		</div>
		<a href="<?php echo $button_link['url'] ?>" class="btn-secondary btn-xl btn-talk">
			 <?php echo $button_link['title'] ?>
		</a>
	</div>
</section>