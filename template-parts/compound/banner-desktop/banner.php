<section id="banner">
	<?php 
		$banner = get_field('banner_component');
		$sub_title = $banner['sub_title'];
		$primary_title = $banner['primary_title'];
		$primary_title_mb = $banner['primary_title_mb'];
		$description = $banner['description'];
		$image_right_side = $banner['image_right_side'];
		$button_start_for_free = $banner['button_start_for_free'];
		$button_sign_up_here = $banner['button_sign_up_here'];
		$image = $banner['background'];
		$bg_mb = $banner['background_mb'];
	?>
	<?php if (!wp_is_mobile()): ?>
		<?php echo wp_get_attachment_image($image, 'full', false, array('class' => 'background__banner')); ?>
	<?php else: ?>
		<?php echo wp_get_attachment_image($bg_mb, 'full', false, array('class' => 'background__banner--mb')); ?>
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
                 <?php if(isMobileDevice()): ?>
					<?php echo $primary_title_mb ?>
				<?php else: ?>
					<?php echo $primary_title ?>
				<?php endif; ?>
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
			
			<div class="box__img__people--mb">
              <?php echo wp_get_attachment_image($image_right_side['ID'], 'full', false, array()); ?>
            </div>
			
            <div class="box__rating">
                <?php echo wp_get_attachment_image( 30327, 'full', false, array('class' => 'img__shopify')); ?>
                <?php echo wp_get_attachment_image( 30328, 'full', false, array('class' => 'img__star')); ?>
                <strong class="count__rating">4,9</strong>
                <span class="count__review"> 3387+ Reviews</span>
            </div>
        </div>
        <div class="box__img__people">
            <?php echo wp_get_attachment_image($image_right_side['ID'], 'full', false, array()); ?>
        </div>
    </div>
</section>