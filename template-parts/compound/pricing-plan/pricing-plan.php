<section class="uppromote-plan">
    <div class="container uppromote-plan__inner">
        <div class="headline">
            <?php echo get_field('page_affiliate_marketing_perfect_plan_heading','option'); ?>
            <p class="font-size-caption headline__description ">
                <?php echo get_field('page_affiliate_marketing_perfect_plan_sub_heading','option'); ?></p>
        </div>
        <div class=" pricing-plan__wrapper">
            <?php
            $page_affiliate_marketing_perfect_plan_items = get_field('page_affiliate_marketing_perfect_plan_items','option');
            for ($i = 0; $i < count($page_affiliate_marketing_perfect_plan_items); $i++) : ?>
            <div
                class="pricing-plan <?php echo $page_affiliate_marketing_perfect_plan_items[$i]['most_popular'] ? 'pricing-plan--popular' : '' ?>">
                <?php if ($page_affiliate_marketing_perfect_plan_items[$i]['most_popular']) : ?>
                <span class="badge-popular"><span>MOST POPULAR</span>
					<?php 
						if (!isMobileDevice()) : ?>
						 <img src="<?php echo get_theme_file_uri('/assets/icons/Rectangle-34626456.svg') ?>" alt="">
					<?php 
					endif; 
					?>
					<?php 
						if (isMobileDevice()) : ?>
						<?php echo wp_get_attachment_image(30826,'full',false) ?>
					<?php 
					endif; 
					?>
                </span>
                <?php endif; ?>
				<?php if ($page_affiliate_marketing_perfect_plan_items[$i]['most_popular']) : ?>
					<div class="overlay-popular">
					</div>
                <?php endif; ?>
                <img class="pricing-plan__vector"
                    src="<?php echo $page_affiliate_marketing_perfect_plan_items[$i]['most_popular'] ? '/wp-content/uploads/2024/08/plan-card-item-active.jpg' : '/wp-content/uploads/2024/08/plan-card-item.jpg' ?>"
                    alt="vector">
                <div class="pricing-plan__background"></div>
                <div class="pricing-plan__header">
                    <span
                        class="pricing-plan__price"><?php echo $page_affiliate_marketing_perfect_plan_items[$i]['price'] ?></span>
                    <span
                        class="pricing-plan__period"><?php echo $page_affiliate_marketing_perfect_plan_items[$i]['time'] ?></span>
                </div>
                <div class="pricing-plan__body">
                    <h2 class="font-size-H4 pricing-plan__title">
                        <?php echo $page_affiliate_marketing_perfect_plan_items[$i]['title'] ?></h2>
                    <p class="font-size-sub1 pricing-plan__description">
                        <?php echo $page_affiliate_marketing_perfect_plan_items[$i]['content'] ?>
                    </p>
                </div>
                <div class="pricing-plan__footer">
                    <a href="<?php echo $page_affiliate_marketing_perfect_plan_items[$i]['link_redirect']['url'] ?>"
                        class="<?php echo $page_affiliate_marketing_perfect_plan_items[$i]['most_popular'] ? 'btn-primary' : 'btn-ghost' ?> btn-lg font-size-sub1 pricing-plan__button">View
                        plan</a>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>