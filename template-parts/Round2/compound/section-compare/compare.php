<section id="compare">
	<?php 
		$compare = get_field('compare_common');
		$title = $compare['title'];
		$title_mb = $compare['title_mb'];
		$other_software = $compare['other_software'];
	?>
	<div class="container">
		<h2 class="headline">
			<?php if(!isMobileDevice()): ?>
				<?php echo $title ?>
			<?php else: ?>
				<?php echo $title_mb ?>
			<?php endif; ?>
		</h2>
		<div class="affiliate-container">
			<?php 
				foreach($other_software as $item){
					$link = $item['title'];
					$image = $item['image'];
			?>
				<a href="<?php echo $link['url'] ?>" class="affiliate-item">
					<?php echo wp_get_attachment_image($image,'full',false) ?>
					<h4 class="affiliate-name">
						<?php echo $link['title'] ?>
					</h4>
				</a>
			<?php
				}
			?>
		</div>
	</div>
</section>