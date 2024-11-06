<?php
echo do_shortcode('[sc_banner_desktop]');
get_template_part('template-parts/Round5/page-featurepage/support-at-every-step/index');
get_template_part('template-parts/Round5/page-featurepage/program-setup/index');
get_template_part('template-parts/Round5/page-featurepage/affiliate-recruitment/index');
get_template_part('template-parts/Round5/page-featurepage/affiliate_management/index');
get_template_part('template-parts/Round5/page-featurepage/tracking-analytics/index');
get_template_part('template-parts/Round5/page-featurepage/payment/index');
echo do_shortcode('[sc_pricing_plan]');
get_template_part('template-parts/Round1/homepage/section-most-entrusted/most-entrusted');
if (have_rows('get_started_feature')) {
	while (have_rows('get_started_feature')) {
		the_row();
		get_template_part('template-parts/compound/get-started/get-started');
	}
}
?>