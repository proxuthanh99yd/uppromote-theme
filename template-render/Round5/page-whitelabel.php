<?php 
echo do_shortcode('[sc_banner_desktop]');
get_template_part('template-parts/Round5/components/section-campaign/campaign');

echo '<section id="white_label_feature">';
if (have_rows('features_wl')) {
	while (have_rows('features_wl')) {
		the_row();
		get_template_part('template-parts/Round5/components/section-feature/feature');
	}
}
echo '</section>';

get_template_part('template-parts/Round1/homepage/section-most-entrusted/most-entrusted');
if (have_rows('get_started_wl')) {
	while (have_rows('get_started_wl')) {
		the_row();
		get_template_part('template-parts/compound/get-started/get-started');
	}
}