<section id="feature-table">
	<?php 
		$table = get_field('uppromote_compare_table');
		$heading = $table['heading'];
		$description = $table['description'];
		$title_compare_1 = $table['title_compare_1'];
		$title_compare_2 = $table['title_compare_2'];
		$detail_info = $table['detail_info'];
		$button = $table['view_full_button'];
	?> 
<!-- 	<img class="feature-table__background" src="https://s-test.okhub-tech.com/wp-content/uploads/2024/08/Comparison-table.png" alt=""> -->
	
	<?php if(isMobileDevice()): ?>
		<?php echo wp_get_attachment_image(31658,'full',false,array('class' => 'feature-table__background')) ?>
	<?php else: ?>
		<?php echo wp_get_attachment_image(31005,'full',false,array('class' => 'feature-table__background')) ?>
	<?php endif; ?>
	
	<div class="container">
		<h2 class="headline"><?php echo $heading ?></h2>
		<div class="desc"><?php echo $description ?></div>
	</div>
	<div class="comparison-table">
		<div class="comparation-table__head">
			<span></span>
			<span><?php echo $title_compare_1 ?></span>
			<span><?php echo $title_compare_2 ?></span>
		</div>

		<div class="comparation-table__body">
			<?php 
			foreach($detail_info as $item){
				$label = $item['label'];			
				$col2 = $item['column2'];			
				$col3 = $item['column3'];		
				?>
				<div class="comparation-detail">
					<div class="feature">
						<p class="label"><?php echo $label; ?></p>
					</div>
					<div class="box__information">
						<div class="infomation">
							<?php 
							if (!empty($col2['group_radio'])) {
								$radio_value = $col2['group_radio']; 
								if ($radio_value == 'green') {
									 echo wp_get_attachment_image(31004,'full',false);
								} elseif ($radio_value == 'red') {
									 echo wp_get_attachment_image(31154,'full',false);
								}
							}

							if (!empty($col2['text'])) {
								echo $col2['text'];
							}
							?>
						</div>
						
						<div class="infomation">
							<?php 
							if (!empty($col3['group_radio_3'])) {
								$radio_value = $col3['group_radio_3']; 
								if ($radio_value == 'green') {
									 echo wp_get_attachment_image(31004,'full',false);
								} elseif ($radio_value == 'red') { 
									 echo wp_get_attachment_image(31154,'full',false);
								}
							}

							if (!empty($col3['text'])) { 
								echo $col3['text'];
							}
							?>
						</div>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>

	<a href="<?php echo $button['url'] ?>" class="btn-primary btn-xl btn-view">
		<?php echo $button['title'] ?>
	</a>
</section>