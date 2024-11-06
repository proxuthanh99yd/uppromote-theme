<section id="explore__customer">
	<?php
		$data = get_field('story_fashion');
		$explore_beau = $data['explore_beau'];
	?>
<div class="container">
	<div class="explore__tab">
		<?php 
			foreach($explore_beau as $index => $item){
				$thumb = $item['avatar'];
				$name = $item['name'];
				$sub_title = $item['sub_title'];
				$active = ($index === 0) ? 'active' : '' 
		?>
			<div class="explore__tab-item <?= $active ?>">
				<?= wp_get_attachment_image($thumb,'full',false) ?>
				<div>
					<h4 class="explore__tab-title">
						<?= $name ?>
					</h4>
					<p class="desc">
						<?= $sub_title ?>
					</p>
				</div>
			</div>
		<?php
			}
		?>
	</div>

	<div class="explore__content">
		<?php 
			foreach($explore_beau as $index => $item){
				$name = $item['name'];
				$sub_title = $item['sub_title'];
				$bgPc = $item['image_pc_'];
				$bgMb = $item['image_mb'];
				$desc= $item['description'];
				$link = $item['link'];
				$active = ($index === 0) ? 'active' : '' 
		?>
			<div class="explore__content__item <?= $active ?>">
				<?php if(isMobileDevice()): ?>
					<?= wp_get_attachment_image($bgMb,'full',false,['class' => 'explore__content__bg']) ?>
				<?php else: ?>
					<?= wp_get_attachment_image($bgPc,'full',false,['class' => 'explore__content__bg']) ?>
				<?php endif; ?>
				<div class="content">
					<?= wp_get_attachment_image(32046,'full',false) ?>
					<div class="description">
						<?= $desc ?>
					</div>
					<div class="info">
						<h4 class="name"><?= $name ?></h4>
						<p class="sub_title"><?= $sub_title ?></p>
					</div>
					<div class="read__story">
						<a class="section-link-btn" href="<?= $link['url'] ?>">
							<span><?= $link['title'] ?></span>
							<?= wp_get_attachment_image(31981,'full',false) ?>
						</a>
					</div>
				</div>

			</div>
		<?php
			}
		?>
	</div>
</div>
</section>