<?php
get_header();
get_template_part('template-parts/page-contact/section', 'banner');

?>
<section class="section-container support-form">
    <?php get_template_part('template-parts/page-contact/section', 'support'); ?>
    <?php echo do_shortcode('[contact-form-7 id="fa61263" title="Contact form"]'); ?>
</section>

<?php
get_footer();
