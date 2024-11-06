<section id="clients">
	<?php 
		$client_use_influen = get_field('client_use_influen');
		$heading = $client_use_influen['heading'];
		$uppromote_item= $client_use_influen['uppromote_item'];
	?>
	<div class="clients__background">
		<?php echo wp_get_attachment_image(31218,'full',false) ?>
	</div>
	<div class="container">
	  <h2 class="headline">
		<?php echo $heading ?>
	  </h2>

	  <div class="clients__content">
		<?php 
			foreach($uppromote_item as $item){
				$thumb = $item['thumb'];	
				$link = $item['link'];	
				$sub_title = $item['sub_title'];	
				$percentage = $item['percentage'];	
				$title = $item['title'];
		?>
		  <a href="<?php echo $link['url'] ?>" target="_blank" class="clients__card__item">
			  <div class="overlay-top"></div>
			  <div class="overlay-center"></div>
			  <div class="clients__card__item--header">
				  <?php echo wp_get_attachment_image($thumb,'full',false,array('class' => 'clients__img__branch')) ?>
				<p class="clients__item__title"><?php echo $link['title'] ?></p>
				  <img class="image_row" src="/wp-content/uploads/2024/08/icarrow45deg.svg" alt="" />
				  <img class="clients__item__arrow" src="/wp-content/uploads/2024/08/icarrow45deg.svg" alt="" />
			  </div>
			  <span class="clients__card__item--content"
				><?php echo $sub_title ?></span
			  >
			  <div class="clients__card__item--footer">
				<div class="card__item__footer">
				  <img src="/wp-content/uploads/2024/08/icarrowlineargreen.svg" alt="" />
				  <span class="card__item__footer--number"><?php echo $percentage ?></span>
				  <span class="card__item__footer--descripton"
					><?php echo $title ?></span
				  >
				</div>
			  </div>
			</a>
		<?php
			}  
		?>
	  </div>
	</div>
  </section>