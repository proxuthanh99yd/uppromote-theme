<section id="why-uppromote">
	<?php 
		$why_up = get_field('why_uppromote_common');
		$heading = $why_up['heading'];
		$button_compare = $why_up['button_compare'];
		$why_choose = $why_up['why_choose'];
	?>
	<div class="container">
		<h2 class="headline"><?php echo $heading ?></h2>
		<div class="reason-container">
			<?php 
				foreach($why_choose as $item){
					$image = $item['image'];
					$title = $item['title'];
					$description = $item['description'];
			?>
				<div class="reason-item">
					<div class="deco-top"></div>
					<div class="deco-bot"></div>
					<div class="image">
						<?php echo wp_get_attachment_image($image,'full',false) ?>
					</div>
					<div class="content_item">
						<h3 class="reason-item__title">
							<?php echo $title ?>
						</h3>
						<p class="reason-item__desc"><?php echo $description ?></p>
					</div>
				</div>
			<?php
				}
			?>
		</div>
	</div>
	<a href="<?php echo $button_compare['url'] ?>" class="btn-primary btn-xl btn-compare">
		<?php echo $button_compare['title'] ?>
	</a>
</section>