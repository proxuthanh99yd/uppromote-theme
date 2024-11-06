<div class="fashion-brands__wrapper">
	<div class="swiper fashion-brands-swiper">
		<div class="swiper-wrapper">
			<?php if (have_rows('fashion_brands_items')) :
				while (have_rows('fashion_brands_items')) : the_row(); ?>
			<div class="swiper-slide">
				<div class="fashion-brands__item">
					<span class="fashion-brands__item-logo">
						<?php echo wp_get_attachment_image(get_sub_field('logo'), 'full', true); ?>
					</span>
					<div class="fashion-brands__item-wrapper">
						<div class="fashion-brands__item-left">
							<p class="fashion-brands__item-title">
								<?php echo get_sub_field('title') ?>
							</p>
							<div class="section-description fashion-brands__item-description">
								<?php echo get_sub_field('description') ?>
							</div>
							<a class="section-link-btn fashion-brands__item-link"
								href="<?php echo get_sub_field('link')['url'] ?>"><?php echo get_sub_field('link')['title'] ?>
								<?php echo wp_get_attachment_image(30542, 'full', true); ?>
							</a>
						</div>
						<div class="fashion-brands__item-right">
							<?php echo wp_get_attachment_image(get_sub_field('image'), 'medium_large', true); ?>
						</div>
					</div>
					<span class="fashion-brands__item-linear"></span>
				</div>
			</div>
			<?php endwhile;
			endif;  ?>
		</div>
	</div>
	<div class="fashion-brands-pagination">
		<div class="swiper-pagination"></div>
	</div>
</div>