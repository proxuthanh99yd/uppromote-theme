<section id="customer-words">
    <div class="section-container headline">
        <?php echo wp_get_attachment_image(30130, 'full', true, ['class' => 'deco-left']) ?>
        <?php echo wp_get_attachment_image(30131, 'full', true, ['class' => 'deco-bottom']) ?>
        <?php echo wp_get_attachment_image(30132, 'full', true, ['class' => 'deco-right']) ?>
<!--         <?php // echo get_field('page_affiliate_marketing_customers_words_heading') ?> -->
        <h2 class=""><?php echo get_field('customers_words_heading') ?></h2>
        <div class="review-container">
            <div class="swiper reviews-swiper">
                <div class="swiper-wrapper">
                    <?php
                    $customers_words_rates = get_field('customers_words_rates');
                    if ($customers_words_rates) :
                        foreach ($customers_words_rates as $item) :
                    ?>
                    <div class="swiper-slide review-item">
                        <?php echo wp_get_attachment_image(30126, 'full', true) ?>
                        <div class="review-item-content_top">
                            <div class="customer-info">
                                <?php echo wp_get_attachment_image($item['avatar'], 'full', true) ?>
                                <div class="info-detail">
                                    <span class="info-name"><?php echo $item['name'] ?></span>
                                    <span class="info-address"><?php echo $item['location'] ?></span>
                                </div>
                            </div>
                        </div>
                        <p class="title"><?php echo $item['time_use_app'] ?></p>
                        <p class="desc">
                            <?php echo $item['comment'] ?>
                        </p>
                        <div class="star-icons">
                            <?php
                                    for ($i = 0; $i < $item['stars']; $i++) {
                                        echo wp_get_attachment_image(30128, 'full', true);
                                    }
                                    ?>
                        </div>
                    </div>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </div>

            </div>
        </div>
        <div class="reviews-pagination"></div>
    </div>
</section>