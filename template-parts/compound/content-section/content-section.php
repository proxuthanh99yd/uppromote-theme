<?php 
    // Get sub field values.
    $heading = get_sub_field('heading');
    $sub_heading = get_sub_field('sub_heading');
    $content = get_sub_field('content');
    $button_link = get_sub_field('button_link');
?>
<div class="feature__left">
    <!-- <span class="badge badge--azure-blue-light"><?php echo $sub_heading ?></span> -->
    <h3 class="section-title feature__title">
        <?php echo $heading ?>
    </h3>
    <div class="section-description feature__description">
        <?php echo $content ?>
    </div>
    <?php if($button_link): ?>
    <a class="section-link-btn feature__link" href="<?php echo $button_link['url'] ?>"><?php echo $button_link['title'] ?>
        <?php echo wp_get_attachment_image(30542, 'full', true); ?></a>
    <?php endif; ?>
</div>