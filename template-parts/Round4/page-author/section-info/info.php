<section id="information">
	<?php 
		$info = get_field('infomation_r4');
		$information_detail = $info['information_detail'];
		$image = $info['image'];
	?>
	<img src="/wp-content/uploads/2024/09/Author-Stephen-_1_-scaled.webp" alt="" class="background">
	<div class="container__content container">
		<?php 
			foreach($information_detail as $item){
				$title = $item['title'];
				$content = $item['content'];
		?>
			<div class="information__content">
				<p class="title">
					<?php echo $title ?>
				</p>
				<div class="content">
					<?php echo $content ?>
				</div>
			</div>
		<?php
			}
		?>
<!-- 		<img src="/wp-content/uploads/2024/09/image-76-_2_.webp" alt="" class="image__deco"> -->
		<?php echo wp_get_attachment_image($image,'full',false,['class' => 'image__deco']) ?>
	</div>
</section>