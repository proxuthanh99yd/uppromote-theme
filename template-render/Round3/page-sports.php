<?php 
	if (have_rows('banner_sports')) {
		while (have_rows('banner_sports')) {
			the_row();
			echo do_shortcode('[sc_banner_desktop]');
		}
	}
    get_template_part('/template-parts/Round3/page-sports/section-partner/partner');
    get_template_part('/template-parts/Round3/page-sports/section-turnpro/turn_pro');
    get_template_part('/template-parts/Round3/page-sports/section-story/story');
	echo do_shortcode('[sc_pricing_plan]');
	if (have_rows('customer_think_sports')) {
		while (have_rows('customer_think_sports')) {
			the_row();
			get_template_part('template-parts/Round1/homepage/section-most-entrusted/most-entrusted');
		}
	}
	if (have_rows('get_started_sports')) {
		while (have_rows('get_started_sports')) {
			the_row();
			echo do_shortcode('[sc_get_started]');
		}
	}
	
