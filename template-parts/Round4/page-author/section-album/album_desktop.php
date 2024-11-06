<section id="album__about">
	<?php 
	 	$about = get_field('about_stephen_r4');
		$title = $about['title'];
		$col1 = $about['column_image_1'];
		$col2 = $about['column_image_2'];
		$col3 = $about['column_image_3'];
	?>
	<div class="container">
		<h2><?php echo $title ?></h2>
		<div class="album__about_col1">
			<?php foreach($col1 as $image): ?>
				<?php echo wp_get_attachment_image($image,'full',false) ?>
			<?php endforeach; ?>
		</div>
		<div class="album__about_col2">
			<?php foreach($col2 as $image): ?>
				<?php echo wp_get_attachment_image($image,'full',false) ?>
			<?php endforeach; ?>
		</div>
		<div class="album__about_col3">
			<?php foreach($col3 as $image): ?>
				<?php echo wp_get_attachment_image($image,'full',false) ?>
			<?php endforeach; ?>
		</div>
	</div>
</section>