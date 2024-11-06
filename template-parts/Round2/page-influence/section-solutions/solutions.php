<section id="solution">
	<?php 
		$management_solution_influ = get_field('management_solution_influ');
		$title = $management_solution_influ['title'];
		$solutions = $management_solution_influ['solutions'];
	?>
	<?php if(!isMobileDevice()): ?>
		<div class="solution__background">
		  <?php echo wp_get_attachment_image(31216,'full',false) ?>
		</div>
	<?php endif; ?>
	<div class="container">
	  <h2 class="headline">
		<?php echo $title ?>
	  </h2>
	  <div class="solution__content">
		<?php 
			foreach($solutions as $item){
				$image = $item['image'];
				$title = $item['title'];
				$description = $item['description'];
		?>
		  	<div class="solution__card__item">
			  <div class="card__item__img">
				<?php echo wp_get_attachment_image($image,'full',false) ?>
			  </div>
			  <div class="card__item__content">
				<h3 class="card__item__title">
				  <?php echo $title ?>
				</h3>
				<p class="card__item__description">
				  <?php echo $description ?>
				</p>
			  </div>
			</div>
		<?php  
			}  
		?>
	  </div>
	</div>
</section>