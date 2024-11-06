<?php 
echo do_shortcode('[sc_banner_desktop]');
get_template_part('template-parts/Round5/components/section-campaign/campaign');
get_template_part('template-parts/Round5/page-smart-commisision/section-winbig/winbig');
echo '<section id="simple">';
if (have_rows('simple')) {
	while (have_rows('simple')) {
		the_row();
		get_template_part('template-parts/Round5/components/section-feature/feature');
	}
}
echo '</section>';

echo '<section id="advanced">';
if (have_rows('advanced_cms')) {
	while (have_rows('advanced_cms')) {
		the_row();
		get_template_part('template-parts/Round5/components/section-feature/feature');
	}
}
echo '</section>';

get_template_part('template-parts/Round5/components/section-further/further');
get_template_part('template-parts/Round1/homepage/section-most-entrusted/most-entrusted');
if (have_rows('get_started_cms')) {
	while (have_rows('get_started_cms')) {
		the_row();
		get_template_part('template-parts/compound/get-started/get-started');
	}
}