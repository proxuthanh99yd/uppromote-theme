<section class="support-at-every-step">
	<?php 
		$step = get_field('step_feature');
		$title = $step['title'];
	?>
    <?= wp_get_attachment_image(32778, 'full', false, ['class' => 'bg-pc']) ?>
    <?= wp_get_attachment_image(32777, 'full', false, ['class' => 'bg-mb']) ?>
    <div class="section-container content-support-at-all">
        <h2 class="headline"><?= $title ?></h2>
        <div class="nav-support-at-all">
            <a href="#program-setup">Program setup</a>
            <a href="#affiliate-recruitment">Affiliate recruitment</a>
            <a href="#affiliate-management">Affiliate management</a>
            <a href="#trackings-analytics">Trackings & analytics</a>
            <a href="#payment">Payment</a>
        </div>
    </div>
   <div class="pin-nav-sticky-all-step">
	    <div class='section-container nav-sticky-all-step'>
        <div class="item-nav-sticky">
            <span class="number-nav">01</span>
            <span>Program setup</span>
        </div>
        <div class="item-nav-sticky">
            <span class="number-nav">02</span>
            <span>Affiliate recruitment</span>
        </div>
        <div class="item-nav-sticky">
            <span class="number-nav">03</span>
            <span>Affiliate management</span>
        </div>
        <div class="item-nav-sticky">
            <span class="number-nav">04</span>
            <span>Trackings & analytics</span>
        </div>
        <div class="item-nav-sticky">
            <span class="number-nav">05</span>
            <span>Payment</span>
        </div>
    </div>
	</div>
</section>