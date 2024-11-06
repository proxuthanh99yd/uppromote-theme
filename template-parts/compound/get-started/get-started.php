<?php 
	if(!isMobileDevice()){
		$get_started = get_field('get_started');
		$heading = $get_started['option_started_with_uppromote_heading'];
		$sub_heading = $get_started['option_started_with_uppromote_sub_heading'];
		$button = $get_started['option_started_with_uppromote_start_button']['title'];
		$url = $get_started['option_started_with_uppromote_start_button']['url'];
		$gallery = $get_started['option_started_with_uppromote_image_logo'];
?>
<section class="get-started">
	<template id="get-started">
    <img class="get-started__background"
        src="<?php echo get_theme_file_uri('/assets/icons/get-started-background.svg') ?>" alt="">
    <div class="get-started__wrapper get-started__wrapper--left">
        <h2 class="font-size-H2-pc get-started__title">
            <?php echo $heading ?></h2>
        <p class="font-size-sub1"><?php echo $sub_heading ?></p>
        <a href="<?php echo $url ?>"
            class="btn btn-primary btn-lg get-started__button"><?php echo $button ?></a>
    </div>
    <div class="get-started__wrapper get-started__wrapper--right">
        <?php
        if ($gallery) :
            foreach ($gallery as $item) : ?>
        <?php echo wp_get_attachment_image($item, 'full', true, ['class' => 'get-started__image']) ?>
        <?php endforeach;
        endif;
        ?>
    </div>
	</template>
</section>
<?php
	}
?>

<?php 
	if(isMobileDevice()){
		$get_started = get_field('get_started');
		$heading = $get_started['option_started_with_uppromote_heading_mb'];
		$sub_heading = $get_started['option_started_with_uppromote_sub_heading'];
		$button = $get_started['option_started_with_uppromote_start_button']['title'];
		$url = $get_started['option_started_with_uppromote_start_button']['url'];
		$gallery = $get_started['option_started_with_uppromote_image_logo'];
?>
	<section class="get-started-mb">
<!-- 		<template id="get-started"> -->
		<div class="get__started__container">
			<img class="get-started__background-mb"
			src="<?php echo get_theme_file_uri('/assets/icons/get-started-background.svg') ?>" alt="">
			<div class="get-started__wrapper get-started__wrapper--left-mb">
				<h2 class="font-size-H2-pc get-started__title">
					<?php echo $heading ?></h2>
				<p class="font-size-sub1"><?php echo $sub_heading ?></p>
		        <a href="<?php echo $url ?>"
					class="btn btn-primary btn-lg get-started__button-mb"><?php echo $button ?></a>
			</div>
			<div class="get-started__wrapper get-started__wrapper--right-mb">
				<?php
				if ($gallery) :
					foreach ($gallery as $item) : ?>
				<?php echo wp_get_attachment_image($item, 'full', true, ['class' => 'get-started__image']) ?>
				<?php endforeach;
				endif;
				?>
			</div>
		</div>
		
<!-- 		</template> -->
	</section>

<?php
	}
?>