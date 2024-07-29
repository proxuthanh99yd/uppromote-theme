<section class="uppromote-plan">
    <div class="headline">
        <h2 style="--linear-gradient: linear-gradient(90deg, #2871FF 35.11%, #F73D3D 70.97%);" class="font-size-H2-pc headline__title ">Get the perfect <strong>UpPromote’s plan</strong> to your store
        </h2>
        <p class="font-size-sub1 headline__description ">Discover the ideal UpPromote plan tailored for your store's
            needs to maximize
            your affiliate marketing efforts and drive success for your e-business. </p>
    </div>
    <div class="pricing-plan__wrapper">
        <?php for ($i = 0; $i < 4; $i++) : ?>
            <div class="pricing-plan <?php echo $i == 0 ? 'pricing-plan--popular' : '' ?>">
                <?php if ($i == 0) : ?>
                    <span class="badge-popular"><span>MOST POPULAR</span>
                        <img src="<?php echo get_theme_file_uri('/assets/icons/Rectangle-34626456.svg') ?>" alt="">
                    </span>
                <?php endif; ?>
                <img class="pricing-plan__vector" src="<?php echo $i == 0 ? get_theme_file_uri('/assets/icons/group-48100350.svg') : get_theme_file_uri('/assets/icons/Pricing.svg'); ?>" alt="vector">
                <div class="pricing-plan__background"></div>
                <div class="pricing-plan__header">
                    <span class="pricing-plan__price">Free</span>
                    <span class="pricing-plan__period">/month</span>
                </div>
                <div class="pricing-plan__body">
                    <h2 class="font-size-H4 pricing-plan__title">Start</h2>
                    <p class="font-size-sub2 pricing-plan__description">
                        Get an easy start with affiliate marketing.
                    </p>
                </div>
                <div class="pricing-plan__footer">
                    <a href="#" class="<?php echo $i == 0 ? 'btn-primary' : 'btn-ghost' ?> btn-lg font-size-sub1 pricing-plan__button">View
                        plan</a>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</section>