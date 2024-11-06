<section id="empowerd">
	<?php 
		$empowerd = get_field('empowerd_fashion');
		$description = $empowerd['description'];
		$anh_lon = $empowerd['anh_lon'];
		$anh_nho = $empowerd['anh_nho'];
	?>
   <div class="container">
	<div class="content">
		<?= $description ?>
	</div>
	   <?= wp_get_attachment_image($anh_lon,'full',false,['class' => 'empowerd__img_large']) ?>
	   <?= wp_get_attachment_image($anh_nho,'full',false,['class' => 'empowerd__img_small']) ?>
   </div>
</section>