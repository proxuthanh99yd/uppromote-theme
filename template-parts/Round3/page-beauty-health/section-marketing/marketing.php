<section id="bt__marketing">
	<?php 
		$content = get_field('why_beauty_health_beau');
		$title = $content['title'];
		$desc = $content['description'];
		$anh_lon = $content['anh_lon'];
		$anh_nho = $content['anh_nho'];
	?>
    <div class="container">
        <div class="content">
            <h2 class="title">
                <?php echo $title ?>
            </h2>
            <div class="description">
                <?php echo $desc ?>
            </div>
<!--             <img src="https://uppromote-dev.okhub-tech.com/wp-content/uploads/2024/09/Group-1000003358.webp" alt="" class="decoration_left"> -->
			<?php echo wp_get_attachment_image($anh_lon,'full',false,['class' => 'decoration_left']) ?>
			<?php echo wp_get_attachment_image($anh_nho,'full',false,['class' => 'decoration_bottom']) ?>
<!--             <img src="https://uppromote-dev.okhub-tech.com/wp-content/uploads/2024/09/Frame-1618872336.webp" alt="" class="decoration_bottom"> -->
        </div>
    </div>
</section>