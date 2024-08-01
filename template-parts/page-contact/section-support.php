<?php
$support = get_field('contact_section_support');
$socials = get_field('section_support_socials')['option_footer_socials'] ?? [];
?>
<div class="support">
    <?php foreach ($support as $item) : ?>
        <div class="support__item">
            <h3 class="font-size-H4 support__title"><?php echo $item['section_support_title']; ?></h3>
            <div class="support__content">
                <?php echo $item['section_support_content']; ?>
            </div>
        </div>
    <?php endforeach; ?>
    <div class="support__item">
        <h3 class="font-size-H4 support__title support__title--social">Follow us on social media</h3>
        <div class="support__social-media">
            <?php foreach ($socials as $item) : ?>
                <a href="<?php echo $item['link']['url'] ?? "#";  ?>" class="support__social-item">
                    <div class="support__social-item-bg"></div>
                    <?php echo wp_get_attachment_image($item['icon'] ?? '', 'full', true, ['class' => 'support__social-item-img']); ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</div>