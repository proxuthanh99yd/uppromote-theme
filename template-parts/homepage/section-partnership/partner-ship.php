<section id="partnership">
    <?php $title_partnership = get_field('title_partnership_home') ?>
    <h2 class="title__linear__gradient">
        <?php echo $title_partnership ?>
    </h2>
    <div class="container">
        <?php
        $program_home = get_field('program_home');
        $subtitle = $program_home['sub_title'];
        $title = $program_home['title'];
        $description = $program_home['description'];
        $customize_programs = $program_home['customize_programs'];
        $image_right_side = $program_home['image_right_side'];
        ?>
        <div class="box__infor__partnership">
            <div class="tag__partnership"><?php echo $subtitle ?></div>
            <h3 class="title__partnership">
                <?php echo $title ?>
            </h3>
            <p class="description__partnership">
                <?php echo $description ?>
            </p>
            <?php
            foreach ($customize_programs as $item) {
                $content = $item['content'];
            ?>
                <div class="box__check__partnership">
                    <img src="/wp-content/uploads/2024/08/imgCheck.svg" alt="" class="img__check__partnership">
                    <span class="title__check__partnership"><?php echo $content ?></span>
                </div>
            <?php
            }
            ?>
            <button class="btn__item__partnership">
                Discover our robust tracking
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                    <path d="M2.46094 12.922H19.4609M19.4609 12.922L13.4609 6.922M19.4609 12.922L13.4609 18.922" stroke="#1313C1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
    </div>
    <div class="container partner__networks">
        <?php
        $recruitment_partner_home = get_field('recruitment_partner_home');
        $image_left_side = $recruitment_partner_home['image_left_side'];
        $sub_title = $recruitment_partner_home['sub_title'];
        $title = $recruitment_partner_home['title'];
        $description = $recruitment_partner_home['description'];
        $networks_supports = $recruitment_partner_home['networks_supports'];
        ?>
        <div class="box__img__network">
            <?php echo wp_get_attachment_image(image_left_side['ID'], 'full', false) ?>
        </div>
        <div class="box__infor__partnership">
            <div class="tag__partnership"><?php echo $sub_title ?></div>
            <h3 class="title__partnership">
                <?php echo $title ?>
            </h3>
            <p class="description__partnership">
                <?php echo $description ?>
            </p>
            <?php
            foreach ($networks_supports as $item) {
                $text = $item['text'];
                $image = $item['image'];
            ?>
                <div class="box__check__partnership">
                    <img src="/wp-content/uploads/2024/08/imgCheck.svg" alt="" class="img__check__partnership">
                    <span class="title__check__partnership"><?php echo $text ?></span>
                </div>
            <?php
            }
            ?>
            <button class="btn__item__partnership">
                Discover our robust tracking
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                    <path d="M2.46094 12.922H19.4609M19.4609 12.922L13.4609 6.922M19.4609 12.922L13.4609 18.922" stroke="#1313C1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
    </div>
    <div class="container">
        <?php 
            $management_home = get_field('management_home');
            $sub_title = $management_home['sub_title'];
            $title = $management_home['title'];
            $description = $management_home['description'];
            $features_manage = $management_home['features_manage'];
            $image_right_side = $management_home['image_right_side'];
        ?>
        <div class="box__infor__partnership">
            <div class="tag__partnership"><?php echo $sub_title ?></div>
            <h3 class="title__partnership">
                <?php echo $title ?>
            </h3>
            <p class="description__partnership">
                <?php echo $description ?>
            </p>
            <?php 
            foreach ($features_manage as $item) {
                $text = $item['text'];
            ?>
                <div class="box__check__partnership">
                    <img src="/wp-content/uploads/2024/08/imgCheck.svg" alt="" class="img__check__partnership">
                    <span class="title__check__partnership"><?php echo $text ?></span>
                </div>
            <?php
            }
            ?>
            <button class="btn__item__partnership">
                Discover our robust tracking
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                    <path d="M2.46094 12.922H19.4609M19.4609 12.922L13.4609 6.922M19.4609 12.922L13.4609 18.922" stroke="#1313C1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
        <div class="box__img__manage">
            <?php echo wp_get_attachment_image(image_right_side['ID'], 'full', false) ?>
        </div>
    </div>
    <div class="container partner__tracking">
        <?php 
            $tracking_analytics_home = get_field('tracking_analytics_home');
            $sub_title = $tracking_analytics_home['sub_title'];
            $title = $tracking_analytics_home['title'];
            $description = $tracking_analytics_home['description']; 
            $image_left_side = $tracking_analytics_home['image_left_side'];
            $list_features = $tracking_analytics_home['list_features'];
        ?>
        <div class="box__img__tracking">
            <?php echo wp_get_attachment_image(image_left_side['ID'], 'full', false) ?>
        </div>
        <div class="box__infor__partnership">
            <div class="tag__partnership"><?php echo $sub_title ?></div>
            <h3 class="title__partnership">
                <?php echo $title ?>
            </h3>
            <p class="description__partnership">
                <?php echo $description ?>
            </p>
            <?php foreach ($list_features as $item): ?>
                <div class="box__check__partnership">
                <img src="/wp-content/uploads/2024/08/imgCheck.svg" alt="" class="img__check__partnership">
                    <span class="title__check__partnership"><?php echo $item['text'] ?></span>
                </div>
            <?php endforeach; ?>
            <button class="btn__item__partnership">
                Track performance with UpPromote
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                    <path d="M2.46094 12.922H19.4609M19.4609 12.922L13.4609 6.922M19.4609 12.922L13.4609 18.922" stroke="#1313C1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
    </div>
    <div class="container">
        <div class="box__infor__partnership">
            <?php 
                $payment_home = get_field('payment_home');
                $sub_title = $payment_home['sub_title'];
                $title = $payment_home['title'];
                $description = $payment_home['description'];
                $image_right_side = $payment_home['image_right_side'];
                $payments_features = $payment_home['payments_features'];
            ?>
            <div class="tag__partnership"><?php echo $sub_title ?></div>
            <h3 class="title__partnership"><?php echo $title ?></h3>
            <p class="description__partnership">
                <?php echo $description ?>
            </p>
            <?php foreach ($payments_features as $item): ?>
                <div class="box__check__partnership">
                <img src="/wp-content/uploads/2024/08/imgCheck.svg" alt="" class="img__check__partnership">
                <span class="title__check__partnership">Fixed commission for predicting affiliate cost</span>
            </div>
            <?php endforeach; ?>
            <button class="btn__item__partnership">
                Setup payout at ease
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                    <path d="M2.46094 12.922H19.4609M19.4609 12.922L13.4609 6.922M19.4609 12.922L13.4609 18.922" stroke="#1313C1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
        <div class="box__img__payment">
            <?php echo wp_get_attachment_image(image_right_side['ID'], 'full', false) ?>
        </div>
    </div>
    <div class="box__btn__partnership">
        <button class="btn-xl btn-primary btn__view">
            View features in full
        </button>
        <button class="btn-xl btn-ghost btn__pricing">
            Compare UpPromote's pricing
        </button>
    </div>
</section>