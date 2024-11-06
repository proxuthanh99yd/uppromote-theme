<section id="story">
	<?php 
		$story = get_field('story_sports');
		$title = $story['title'];
		$desc = $story['description'];
		$image = $story['image'];
		$logo= $story['logo'];
		$link = $story['link'];
	?>
	<div class="elip__left"></div>
	<div class="elip__right"></div>
	<div class="container__story">
		<img src="/wp-content/uploads/2024/10/Quote-Icon-1.svg" alt="" class="quote__icon">
		<div class="content">
			<h4 class="title"><?= $title ?></h4>
			<div class="desc">
				<?= $desc ?>
			</div>
			<a href="<?= $link['url'] ?>" class="section-link-btn">
				<span><?= $link['title'] ?></span>
				<img src="/wp-content/uploads/2024/08/Arrow_Left_MD.svg" alt="">
			</a>
		</div>
<!-- 		<img src="https://uppromote-dev.okhub-tech.com/wp-content/uploads/2024/10/image.png" alt="" class="image__deco"> -->
			<?= wp_get_attachment_image($image,'full',false,['class' => 'image__deco']) ?>
		<div class="box__background">
<!-- 			<img src="https://uppromote-dev.okhub-tech.com/wp-content/uploads/2024/10/image-385.png" alt=""> -->
			<?= wp_get_attachment_image($logo,'full',false) ?>
			<a href="<?= $link['url'] ?>" class="section-link-btn">
				<span><?= $link['title'] ?></span>
				<img src="/wp-content/uploads/2024/08/Arrow_Left_MD.svg" alt="">
			</a>
		</div>
	</div>
</section>