<section id="banner">
	<?php 
		$banner = get_field('banner_r4');
		$background = $banner['background'];
		$background_mb = $banner['background_mobile'];
		$heading = $banner['heading'];
		$title = $banner['title'];
		$content = $banner['content'];
		$linkedin = $banner['linkedin_link'];
		$email = $banner['email'];
	?>
	<?php if(isMobileDevice()): ?>
		<?php echo wp_get_attachment_image($background_mb,'full',false,['class' => 'banner__img']) ?>
	<?php else: ?>
		<?php echo wp_get_attachment_image($background,'full',false,['class' => 'banner__img']) ?>
	<?php endif; ?>
	<div class="banner__content">
		<h1 class="heading"><?php echo $heading ?></h1>
		<p class="sub__heading">
			<?php echo $title ?>
		</p>
		<p class="desc"><?php echo $content ?></p>
		<p class="title">
			Connect with Stephen
		</p>
		<div class="social">
			<a href="<?php echo $linkedin ?>">
				<img src="/wp-content/uploads/2024/09/SVG.svg" alt="">
			</a>
			<a href="mailto:<?php echo $email ?>">
				<img src="/wp-content/uploads/2024/09/ion_mail-outline.svg" alt="">
			</a>
		</div>
	</div>
</section>