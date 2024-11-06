<?php
    $most_entrusted = get_field('most_entrusted_home');
	if ($most_entrusted) {
		$title = $most_entrusted['title'];
		$description = $most_entrusted['description'];
		$slider = $most_entrusted['slider'];
	} else {
		$top_rcm_and_favor = get_field('top_rcm_and_favor');
		if ($top_rcm_and_favor) {
			$title = $top_rcm_and_favor['title'];
			$slider = $top_rcm_and_favor['slider'];
		}
	}

  ?>
<section id="most__entrusted">
	<div class="overlay__left"></div>
	<div class="overlay__right"></div>
  <h2 class="title__linear__gradient headline">
    <?php echo $title ?>
  </h2>
  <?php if(!empty($description)): ?> 
	<div class="description__most__entrusted">
    <?php echo $description ?>
  	</div>
  <?php endif; ?>
  
	<div class="most__entrusted container">
        <div class="swiper mySwiper most__entrusted__swiper">
			<div class="swiper-wrapper">
			<?php 
				foreach($slider as $slide) {
					$icon = $slide['icon'];
					$title = $slide['title'];
					$subTitle = $slide['sub_title'] ?? '';
					$location = $slide['location'] ?? '';
					$name = $slide['name'];
					$desc = $slide['description'];
			?>

			  <div class="swiper-slide">
				<div class="container_scale">
				  <div class="overlay-blue"></div>
				</div>
				<div class="container_entrusted_item">
				  <div class="most_entrusted__top">
					<?php echo wp_get_attachment_image($icon,'full',false) ?>
					<div>
					  <h4 class="name"><?php echo $name ?></h4>
					  <?php if(!empty($subTitle)): ?>
					  	<p class="subtitle"><?php echo $subTitle ?></p>
					  <?php endif; ?>
					  <?php if(!empty($location)): ?>
					  	<p class="subtitle"><?php echo $location ?></p>
					  <?php endif; ?>
					</div>
				  </div>
				  <p class="title">
					<?php echo $title ?>
				  </p>
				  <p class="desc">
					<?php echo $desc ?>
				  </p>
				</div>
			  </div>
			<?php
			 }	
			?>
			</div>
      </div>
	</div>
	<div class="swiper-pagination"></div>
</section>

