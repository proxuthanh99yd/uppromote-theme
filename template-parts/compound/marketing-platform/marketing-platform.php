<?php $platform =  get_sub_field('platform'); ?>
<section id="all-in-one">
    <div class="headline container all-in-one">
        <h2 class="headline">
            <?php echo $platform['headline']; ?>
        </h2>
        <!-- all in one item -->
        <div class="box-container">
            <?php
            if ($platform['items']) : ?>
                <?php foreach ($platform['items'] as $item) : ?>
                    <div class="all-in-one_item">
                        <div class="aio_item_title">
                            <!-- <img src="https://s-test.okhub-tech.com/wp-content/uploads/2024/07/iconAllinone.svg" alt="icon" class="image"> -->
                            <div class="icon">
                                <?php echo wp_get_attachment_image($item['heading_icon'] ?? '', 'thumbnail', true); ?>
                            </div>
                            <h4 class="title"><?php echo $item['heading']; ?></h4>
                        </div>
                        <span class="aio_subtitle">
                            <?php echo $item['heading_subtext']; ?>
                        </span>
                        <div class="aio_desc">
                            <div class="overlay"></div>
                            <?php echo wp_get_attachment_image($item['body_icon'] ?? '', 'thumbnail', true); ?>
                            <p class="desc"><?php echo $item['body_content']; ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>