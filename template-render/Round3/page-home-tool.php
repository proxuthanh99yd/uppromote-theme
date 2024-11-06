<?php 
	if (have_rows('banner_hometool')) {
		while (have_rows('banner_hometool')) {
			the_row();
			echo do_shortcode('[sc_banner_desktop]');
		}
	}
    get_template_part('/template-parts/Round3/page-home-tool/section-partner/partner');
    get_template_part('/template-parts/Round3/page-home-tool/section-simplify/simplify');
    get_template_part('/template-parts/Round3/page-home-tool/section-story/story');
	echo do_shortcode('[sc_pricing_plan]');
	if (have_rows('customer_think_hometool')) {
		while (have_rows('customer_think_hometool')) {
			the_row();
			get_template_part('template-parts/Round1/homepage/section-most-entrusted/most-entrusted');
		}
	}
	if (have_rows('get_started_homeandtool')) {
		while (have_rows('get_started_homeandtool')) {
			the_row();
			echo do_shortcode('[sc_get_started]');
		}
	}
	
