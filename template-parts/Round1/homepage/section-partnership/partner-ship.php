<section id="partnership">
    <?php $title_partnership = get_field('title_partnership_home') ?>
    <h2 class="title__linear__gradient headline">
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
		$link = $program_home['button_link'];
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
            <a href="<?php echo $link['url'] ?>" class="btn__item__partnership section-link-btn feature__link">
                <?php echo $link['title'] ?>
                <?php echo wp_get_attachment_image(30542, 'full', true); ?>
            </a>
        </div>
		
		<div class="box__image__program">
			<div class='program__overlay'>
				
			</div>
				<?php echo wp_get_attachment_image($image_right_side['ID'],'full',false) ?>		
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
			$link = $recruitment_partner_home['button_link'];
        ?>
        <div class="box__img__network">
            <?php echo wp_get_attachment_image($image_left_side['ID'], 'full', false) ?>
			<div class="network_overlay_top"></div>
			<div class="network_overlay_bot"></div>
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
            ?>
                <div class="box__check__partnership">
                    <img src="/wp-content/uploads/2024/08/imgCheck.svg" alt="" class="img__check__partnership">
                    <span class="title__check__partnership"><?php echo $text ?></span>
                </div>
            <?php
            }
            ?>
            <a href="<?php echo $link['url'] ?>" class="btn__item__partnership section-link-btn feature__link">
                <?php echo $link['title'] ?>
                <?php echo wp_get_attachment_image(30542, 'full', true); ?>
            </a>
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
		 	$link = $management_home['button_link'];
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
            <a href="<?php echo $link['url'] ?>" class="btn__item__partnership section-link-btn feature__link">
                <?php echo $link['title'] ?>
                <?php echo wp_get_attachment_image(30542, 'full', true); ?>
            </a>
        </div>
        <div class="box__img__manage">
			<?php echo wp_get_attachment_image($image_right_side, 'full', false) ?>
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
			$link = $tracking_analytics_home['button_link'];
        ?>
        <div class="box__img__tracking">
            <?php echo wp_get_attachment_image($image_left_side['ID'], 'full', false) ?>
			<div class="tracking__overlay">
				
			</div>
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
            <a href="<?php echo $link['url'] ?>" class="btn__item__partnership section-link-btn feature__link">
                <?php echo $link['title'] ?>
                <?php echo wp_get_attachment_image(30542, 'full', true); ?>
            </a>
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
				$link = $payment_home['button_link'];
				$btn_view = $payment_home['button_view_feature'];
				$btn_compare = $payment_home['button_compare'];
            ?>
            <div class="tag__partnership"><?php echo $sub_title ?></div>
            <h3 class="title__partnership"><?php echo $title ?></h3>
            <p class="description__partnership">
                <?php echo $description ?>
            </p>
            <?php foreach ($payments_features as $item): ?>
                <div class="box__check__partnership">
                <img src="/wp-content/uploads/2024/08/imgCheck.svg" alt="" class="img__check__partnership">
                <span class="title__check__partnership"><?php echo $item['text'] ?></span>
            </div>
            <?php endforeach; ?>
            <a href="<?php echo $link['url'] ?>" class="btn__item__partnership section-link-btn feature__link">
                <?php echo $link['title'] ?>
                <?php echo wp_get_attachment_image(30542, 'full', true); ?>
            </a>
        </div>
        <div class="box__img__payment">
            <?php echo wp_get_attachment_image($image_right_side['ID'], 'full', false) ?>
			<div class="payment__overlay">
				
			</div>
        </div>
    </div>
    <div class="box__btn__partnership">
		<?php 
			$payment_home = get_field('payment_home');
			$btn_view = $payment_home['button_view_feature'];
			$btn_compare = $payment_home['button_compare'];
         ?>
        <a href="<?php echo $btn_view['url'] ?>" class="btn-xl btn-primary btn__view">
            <?php echo $btn_view['title'] ?>
        </a>
        <a href="<?php echo $btn_compare['url'] ?>" class="btn-xl btn-ghost btn__pricing">
            <?php echo $btn_compare['title'] ?>
        </a>
    </div>
</section>