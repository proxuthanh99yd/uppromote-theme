<?php 
	if (have_rows('banner_fashion')) {
		while (have_rows('banner_fashion')) {
			the_row();
			echo do_shortcode('[sc_banner_desktop]');
		}
	}
    get_template_part('/template-parts/Round3/page-fashion/section-empowerd/empowerd');
    get_template_part('/template-parts/Round3/page-fashion/setion-story/fashion-story');
    get_template_part('/template-parts/Round3/page-fashion/section-fashion-brands/fashion-brands');
	echo do_shortcode('[sc_pricing_plan]');
	if (have_rows('customer_think__fashion')) {
		while (have_rows('customer_think__fashion')) {
			the_row();
			get_template_part('template-parts/Round1/homepage/section-most-entrusted/most-entrusted');
		}
	}
	if (have_rows('get_started_fashion')) {
		while (have_rows('get_started_fashion')) {
			the_row();
			echo do_shortcode('[sc_get_started]');
		}
	}
	
