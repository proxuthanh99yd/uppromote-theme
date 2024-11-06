<section id="album_mb">
	<?php 
	 	$about = get_field('about_stephen_r4');
		$title = $about['title'];
		$image = $about['gallery_mobile'];
	?>
	<h2><?php echo $title ?></h2>
	<div class="swiper mySwiper gallery_swiper">
		<div class="swiper-wrapper">
			<?php foreach($image as $item): ?>
				<div class="swiper-slide">
					<?php echo wp_get_attachment_image($item,'full',false) ?>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	<div class="swiper-pagination"></div>
</section>