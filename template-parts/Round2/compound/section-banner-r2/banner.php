<section id="banner">
	<?php 
		$banner = get_field('banner_r2');
		$sub_title = $banner['sub_title'];
		$primary_title = $banner['primary_title'];
		$description = $banner['description'];
		$image_right_side = $banner['image_right_side'];
	 	$image_mb = $banner['image_mb'];
		$button_start_for_free = $banner['button_start_for_free'];
		$button_sign_up_here = $banner['button_sign_up_here'];
		$image = $banner['background'];
	?>
	<?php if (!isMobileDevice()): ?>
		<?php echo wp_get_attachment_image($image, 'full', false, array('class' => 'background__banner')); ?>
	<?php endif; ?>
	
	<?php if (!isMobileDevice()): ?>
		<div class="box__img__people">
				<?php echo wp_get_attachment_image($image_right_side['ID'], 'full', false, array()); ?>
		</div>
	<?php endif; ?>
    <div class="container banner__inner">
        <div class="container__banner">
            <div class="built__banner">
                <div class="box__diamond">
                    <?php echo wp_get_attachment_image(30324, 'full', false, array()); ?>
                </div>
                <span class="title__built font-size-sub2">
                    <?php echo $sub_title ?>
                </span>
            </div>
            <h1 class="title__banner headline">
                 <?php echo $primary_title ?>
            </h1>
            <div class="description__banner">
                <?php echo $description ?>
            </div>
            <div class="box__free__sign">
                <a href="<?php echo $button_start_for_free['url'] ?>" class="btn-lg btn-primary btn__free">
                    <?php echo $button_start_for_free['title'] ?>
                </a>
                <div class="btn__sign font-size-button">
                    Not on Shopify?<a href="<?php echo $button_sign_up_here['url'] ?>"><?php echo $button_sign_up_here['title'] ?></a>
                </div>
            </div>
			<?php if(isMobileDevice()): ?>
				<div class="box__img__people--mb">
				  <?php echo wp_get_attachment_image($image_mb, 'full', false, array()); ?>
				</div>
			<?php endif; ?>
			<?php if(!isMobileDevice()): ?>
				<div class="box__rating">
					<?php echo wp_get_attachment_image( 30327, 'full', false, array('class' => 'img__shopify')); ?>
					<?php echo wp_get_attachment_image( 30328, 'full', false, array('class' => 'img__star')); ?>
					<strong class="count__rating">4,9</strong>
					<?php echo wp_get_attachment_image( 31330, 'full', false, array('class' => 'img__capterra')); ?>
					<?php echo wp_get_attachment_image( 30328, 'full', false, array('class' => 'img__star')); ?>
					<strong class="count__rating">4,7</strong>
				</div>
			<?php endif; ?>
			<?php if(isMobileDevice()): ?>
				<div class="box__rating__mobile ">
<!-- 					<img class='background_rate' src="/wp-content/uploads/2024/09/Shopify-reviews-1.png" /> -->
					<?php echo wp_get_attachment_image(31646,'full',false,['class' => 'background_rate']) ?>
					<div class="shopify_rating">
						<?php echo wp_get_attachment_image( 31647, 'full', false, array('class' => 'img__shopify')); ?>
						<?php echo wp_get_attachment_image( 30328, 'full', false, array('class' => 'img__star')); ?>
						<strong class="count__rating">4,9</strong>
					</div>
					<div class="line">
						
					</div>
					<div class="capterra_rating">
						<?php echo wp_get_attachment_image( 31648, 'full', false, array('class' => 'img__capterra')); ?>
						<?php echo wp_get_attachment_image( 30328, 'full', false, array('class' => 'img__star')); ?>
						<strong class="count__rating">4,7</strong>
					</div>
				</div>
			<?php endif; ?>
        </div>
        
    </div>
</section>