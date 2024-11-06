<?php
$option_footer_socials = get_field('option_footer_socials', 'option');
$option_header_logo = get_field('option_header_logo', 'option');
$option_header_menu = get_field('option_header_menu', 'option');
$option_descriptions = get_field('option_descriptions', 'option');
?>
<header id="header">
    <a href="/"><?php echo wp_get_attachment_image($option_header_logo, 'full', true, array('class' => 'header__logo')); ?></a>
    <div class="header__right">
		<a href="https://apps.shopify.com/affliate-by-secomapp?utm_source=3908959-impact&utm_medium=cpa&utm_campaign=website&utm_term=start-free&utm_content=navigation&irclickid=SidSDXwC9xyKU6tXQ3xOmykMUkCwu4SVfwGY1Q0&irgwc=1&partner=3908959&affpt=excluded&utm_channel=affiliates" target="_blank">Start free trial</a>
		<button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
			aria-controls="offcanvasRight">
			<?php echo wp_get_attachment_image(30908, 'full', true); ?>
		</button>
	</div>
</header>

<div style="--bs-accordion-btn-icon: url('<?php echo wp_get_attachment_image_url(30910, 'full', true); ?>')"
    class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <?php echo wp_get_attachment_image(30907, 'full', true); ?>
        <div class="offcanvas__header__right">
			<a href="https://apps.shopify.com/affliate-by-secomapp?utm_source=3908959-impact&utm_medium=cpa&utm_campaign=website&utm_term=start-free&utm_content=navigation&irclickid=SidSDXwC9xyKU6tXQ3xOmykMUkCwu4SVfwGY1Q0&irgwc=1&partner=3908959&affpt=excluded&utm_channel=affiliates" target="_blank">Start free trial</a>
			<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
            aria-label="Close"><?php echo wp_get_attachment_image(30906, 'full', true); ?></button>
		</div>
    </div>
    <div class="offcanvas-body">
        <div class="accordion accordion-flush" id="accordionFlushExample" class="accordionHeaderCustom">
            <?php if ($option_header_menu) : ?>
            <?php foreach ($option_header_menu as $key => $menu) : ?>
            <div class="accordion-item">
                <?php if (count($menu['submenu'] ? $menu['submenu'] : []) > 0) : ?>
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="font-size-body1 font-size-body1--semi accordion-button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#flush-<?php echo $key ?>" aria-expanded="false"
                        aria-controls="flush-<?php echo $key ?>">
                        <?php echo $menu['menu_link']['title']; ?>
                    </button>
                </h2>
                <div id="flush-<?php echo $key ?>" class="accordion-collapse collapse"
                    aria-labelledby="flush-<?php echo $key ?>" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="accordion accordion-flush"
                            id="accordionFlushChildren accordionFlushChildren-<?php echo $key; ?>">
                            <?php foreach ($menu['submenu'] as $child_key => $submenu) : ?>
                            <?php if ($submenu['sub_menu_col_heading'] && !empty($submenu['sub_menu_col_heading']['title'])): ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-<?php echo $key . $child_key; ?>-child">
                                    <button class="font-size-body1 font-size-body1--normal accordion-button collapsed"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse-child-<?php echo $key . $child_key; ?>"
                                        aria-expanded="false"
                                        aria-controls="flush-collapse-child-<?php echo $key . $child_key; ?>">
                                        <?php echo $submenu['sub_menu_col_heading']['title']; ?>
                                    </button>
                                </h2>
                                <div id="flush-collapse-child-<?php echo $key . $child_key; ?>"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="flush-<?php echo $key . $child_key; ?>-child"
                                    data-bs-parent="#accordionFlushChildren-<?php echo $key; ?>">
                                    <div class="accordion-body">
                                        <?php foreach ($submenu['sub_menu_cols'] as $sub_menu_col) : ?>
                                        <a class="font-size-body1 font-size-body1--regular"
                                            href="#"><?php echo $sub_menu_col['sub_menu_col_label']['title']; ?></a>
                                        <?php endforeach; ?>
										
                                    </div>
                                </div>
                            </div>
                            <?php else : ?>
                            <?php foreach ($submenu['sub_menu_cols'] as $sub_menu_col) : ?>
                            <a class="font-size-body1 font-size-body1--regular"
                                href="#"><?php echo $sub_menu_col['sub_menu_col_label']['title']; ?></a>
                            <?php endforeach; ?>
							<a class="font-size-body1 font-size-body1--regular" href="#">See all Features</a>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php else : ?>
                <a class="font-size-body1 font-size-body1--semi accordion-button accordion-button--link"
                    href="<?php echo $menu['menu_link']['url']; ?>">
                    <?php echo $menu['menu_link']['title']; ?></a>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="header__bottom">
            <a class="btn-lg btn-primary btn__free" href="#">Start for FREE </a>
        </div>
        <div class="header__bottom header__contact">
            <span class="font-size-body1 font-size-body1--semi">Contact us</span>
            <a class="font-size-body1 font-size-body1--regular"
                href="mailto:<?php echo $option_descriptions['contact_us']['url']; ?>"><?php echo $option_descriptions['contact_us']['title']; ?></a>
        </div>
        <div class="header__bottom header__socials">
            <span class="font-size-body1 font-size-body1--semi">Follow Us</span>
            <div class="header__social">
                <?php if ($option_footer_socials) : ?>
                <?php foreach ($option_footer_socials as $item) : ?>
                <a title="<?php echo $item['link']['title'] ?>" href="<?php echo $item['link']['url'] ?>"
                    class="header__social-item">
                    <?php echo wp_get_attachment_image($item['icon'], 'full', true, ['class' => 'header__social-item-img']) ?>
                </a>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>