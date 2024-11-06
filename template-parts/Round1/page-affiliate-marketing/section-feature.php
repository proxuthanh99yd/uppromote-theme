 <section class="feature">
     <div class="container font-size-H2--semi feature__headline">
         <h2 class="headline">
			 <?php echo get_field('page_affiliate_marketing_feature_heading'); ?>
		 </h2>
     </div>
     <?php $page_affiliate_marketing_features_items = get_field('page_affiliate_marketing_features_items'); ?>
     <?php if (array_key_exists(0, $page_affiliate_marketing_features_items)) :
            $program = $page_affiliate_marketing_features_items[0]; ?>
     <div class="container feature__container">
         <div class="feature__left">
             <span class="badge badge--azure-blue-light"><?php echo $program['sub_heading'] ?></span>
             <h3 class="section-title feature__title">
                 <?php echo $program['heading'] ?>
             </h3>
             <div class="section-description feature__description">
                 <?php echo $program['content'] ?>
             </div>
             <a class="section-link-btn feature__link"
                 href="<?php echo $program['button_link']['url'] ?>"><?php echo $program['button_link']['title'] ?>
                 <?php echo wp_get_attachment_image(30542, 'full', true); ?></a>
         </div>
         <div class="feature__right">
             <?php echo wp_get_attachment_image($program['feature_image'], 'full', true); ?>
         </div>
     </div>
     <?php endif; ?>
     <?php if (array_key_exists(1, $page_affiliate_marketing_features_items)) :
            $program = $page_affiliate_marketing_features_items[1]; ?>
     <div class="container feature__container recruitment__container--reverse">
         <div class="feature__left">
             <span class="badge badge--azure-blue-light"><?php echo $program['sub_heading'] ?></span>
             <h3 class="section-title feature__title">
                 <?php echo $program['heading'] ?>
             </h3>
             <div class="section-description feature__description">
                 <?php echo $program['content'] ?>
             </div>
             <a class="section-link-btn feature__link"
                 href="<?php echo $program['button_link']['url'] ?>"><?php echo $program['button_link']['title'] ?>
                 <?php echo wp_get_attachment_image(30542, 'full', true); ?></a>
         </div>
         <div class="feature__right ">
             <?php echo wp_get_attachment_image($program['feature_image'], 'full', true); ?>
         </div>
     </div>
     <?php endif; ?>
     <?php if (array_key_exists(2, $page_affiliate_marketing_features_items)) :
            $program = $page_affiliate_marketing_features_items[2]; ?>
     <div class="container feature__container management__container">
         <div class="feature__left">
             <span class="badge badge--azure-blue-light"><?php echo $program['sub_heading'] ?></span>
             <h3 class="section-title feature__title">
                 <?php echo $program['heading'] ?>
             </h3>
             <div class="section-description feature__description">
                 <?php echo $program['content'] ?>
             </div>
             <a class="section-link-btn feature__link"
                 href="<?php echo $program['button_link']['url'] ?>"><?php echo $program['button_link']['title'] ?>
                 <?php echo wp_get_attachment_image(30542, 'full', true); ?></a>
         </div>
         <div class="feature__right ">
             <?php echo wp_get_attachment_image($program['feature_image'], 'full', true); ?>
         </div>
     </div>
     <?php endif; ?>
     <?php if (array_key_exists(3, $page_affiliate_marketing_features_items)) :
            $program = $page_affiliate_marketing_features_items[3]; ?>
     <div class="container feature__container tracking__container">
         <div class="feature__left">
             <span class="badge badge--azure-blue-light"><?php echo $program['sub_heading'] ?></span>
             <h3 class="section-title feature__title">
                 <?php echo $program['heading'] ?>
             </h3>
             <div class="section-description feature__description">
                 <?php echo $program['content'] ?>
             </div>
             <a class="section-link-btn feature__link"
                 href="<?php echo $program['button_link']['url'] ?>"><?php echo $program['button_link']['title'] ?>
                 <?php echo wp_get_attachment_image(30542, 'full', true); ?></a>
         </div>
         <div class="feature__right ">
             <?php echo wp_get_attachment_image($program['feature_image'], 'full', true); ?>
         </div>
     </div>
     <?php endif; ?>
     <?php
        $page_affiliate_marketing_view_full_button = get_field('page_affiliate_marketing_view_full_button');
        $page_affiliate_marketing_compare_button = get_field('page_affiliate_marketing_compare_button');
        ?>
     <div class="feature__button">
         <a class="btn-xl btn-primary feature__button-view" href="<?php echo $page_affiliate_marketing_view_full_button['url'] ?>">
             <?php echo $page_affiliate_marketing_view_full_button['title'] ?></a>
         <a class="btn-xl btn-ghost feature__button-compare" href="<?php echo $page_affiliate_marketing_compare_button['url'] ?>">
             <?php echo $page_affiliate_marketing_compare_button['title'] ?></a>
     </div>
 </section>