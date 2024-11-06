<?php 
	if (have_rows('banner_beau')) {
		while (have_rows('banner_beau')) {
			the_row();
			echo do_shortcode('[sc_banner_desktop]');
		}
	}
    get_template_part('/template-parts/Round3/page-beauty-health/section-marketing/marketing');
    get_template_part('/template-parts/Round3/page-beauty-health/section-extra-profits/extra-profits');
 	get_template_part('/template-parts/Round3/page-beauty-health/section-explore/explore_customer');
	echo do_shortcode('[sc_pricing_plan]');
	if (have_rows('customers_think_beau')) {
		while (have_rows('customers_think_beau')) {
			the_row();
			get_template_part('template-parts/Round1/homepage/section-most-entrusted/most-entrusted');
		}
	}
	if (have_rows('get_started_beauty_health')) {
		while (have_rows('get_started_beauty_health')) {
			the_row();
			echo do_shortcode('[sc_get_started]');
		}
	}
	
