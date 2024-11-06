<?php 
echo do_shortcode('[sc_banner_desktop]');
get_template_part('template-parts/Round5/components/section-campaign/campaign');
echo '<section id="simple">';
if (have_rows('bespoke')) {
	while (have_rows('bespoke')) {
		the_row();
		get_template_part('template-parts/Round5/components/section-feature/feature');
	}
}
echo '</section>';

echo '<section id="advanced">';
if (have_rows('customizable_db')) {
	while (have_rows('customizable_db')) {
		the_row();
		get_template_part('template-parts/Round5/components/section-feature/feature');
	}
}
echo '</section>';

get_template_part('template-parts/Round5/components/section-further/further');
get_template_part('template-parts/Round1/homepage/section-most-entrusted/most-entrusted');
if (have_rows('get_started_db')) {
	while (have_rows('get_started_db')) {
		the_row();
		get_template_part('template-parts/compound/get-started/get-started');
	}
}