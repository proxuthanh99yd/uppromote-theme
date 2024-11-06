<section id="technology">
	<?php 
		$integration_tech = get_field('integration_tech');
		$title = $integration_tech['title'];
		$description = $integration_tech['description'];
		$background = $integration_tech['background'];
	?>
	<?php if(!isMobileDevice()): ?>	
    	<?php echo wp_get_attachment_image($background['ID'], 'full', false, array('class' => 'background__technology')) ?>
	<?php endif; ?>

	<?php if(isMobileDevice()): ?>
		<?php echo wp_get_attachment_image(30831, 'full', false, array('class' => 'background__technology--mb')) ?>
	<?php endif; ?>
    <div class="container box__technology">
        <h2 class="title__linear__gradient headline">
            <?php echo $title ?>
        </h2>
        <p class="description__technology">
            <?php echo $description ?>
        </p>
        <button class="btn-xl btn-secondary btn__explore">
            Explore UpPromote's integrations
        </button>
        <div id="get__started">
			<?php if(!isMobileDevice()): ?>	
				<?php echo wp_get_attachment_image(30409,'full',false,array('class' => 'banner__started')) ?>
			<?php endif; ?>
            
			<?php if(isMobileDevice()): ?>	
				<?php echo wp_get_attachment_image(30832,'full',false,array('class' => 'banner__started--mb')) ?>
			<?php endif; ?>
            <div class="box__started">
                <h2>
                    Get started with<br />
                    UpPromote today!
                </h2>
                <p>Install now and build affiliate campaigns with ease.</p>
                <a href="/" class="btn-lg btn-primary"> Start for free </a>
            </div>
        </div>
    </div>
</section>