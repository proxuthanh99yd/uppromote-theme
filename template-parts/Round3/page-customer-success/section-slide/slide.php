<section id="holbrook">
	<?php 
		$slide = get_field('slide_story');
	?>
	<div class="swiper swiper_holbrook">
		<div class="swiper-wrapper">
			<?php foreach($slide as $item): ?>
				<div class="swiper-slide">
					<img src="/wp-content/uploads/2024/10/Gradient.png" alt="" class="background">
<!-- 					<img src="https://uppromote-dev.okhub-tech.com/wp-content/uploads/2024/10/image-1.webp" alt=""> -->
					<?php echo wp_get_attachment_image($item['background'],'full',false) ?>
					<div class="container">
						<div class="content_top">
							<h2 class="title"><?= $item['title'] ?></h2>
							<div class="content">
								<div class="content_percent">
<!-- 									<img src="https://uppromote-dev.okhub-tech.com/wp-content/uploads/2024/10/Background.png"
										alt="" class="icon"> -->
									<?= wp_get_attachment_image($item['icon'],'full',false,['class' => 'icon']) ?>
									<span><?= $item['percentage'] ?></span>
								</div>
								<span class="subtitle"><?= $item['percentage_text'] ?></span>
							</div>
						</div>
						<a href="<?= $item['link']['url'] ?>" class="section-link-btn">
							<span><?= $item['link']['title'] ?></span>
							<img src="/wp-content/uploads/2024/10/Arrow_Left_MD.svg"
								alt="">
						</a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
		<div class="progress-section container">
			<div class="default-progress" style="width: 30%;"></div>
			<div class="progress-bar">
				<div class="progress"></div>
			</div>
			<div class="images ">
				<?php foreach($slide as $index => $item){
					$class = $index === 0 ? 'active' : '';
				?>
					<?= wp_get_attachment_image($item['brand'],'full',false,['class'=>$class]) ?>					
				<?php
				} ?>
			</div>
		</div>
</section>