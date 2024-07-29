<section class="get-started">
    <img class="get-started__background"
        src="<?php echo get_theme_file_uri('/assets/icons/get-started-background.svg') ?>" alt="">
    <div class="get-started__wrapper get-started__wrapper--left">
        <h2 class="font-size-H2-pc get-started__title">Get started with affiliate marketing</h2>
        <p class="font-size-sub1">Install now and build affiliate campaigns with ease.</p>
        <a href="#" class="btn btn-primary btn-lg get-started__button">Get started</a>
    </div>
    <div class="get-started__wrapper get-started__wrapper--right">
        <?php for ($i = 30128; $i <= 30131; $i++) : ?>
        <?php echo wp_get_attachment_image($i, 'full', true, ['class' => 'get-started__image']) ?>
        <?php endfor ?>
    </div>
</section>