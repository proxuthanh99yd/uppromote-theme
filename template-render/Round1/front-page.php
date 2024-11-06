<?php 
	if (have_rows('banner_homepage')) {
		while (have_rows('banner_homepage')) {
			the_row();
			echo do_shortcode('[sc_banner_desktop]');
		}
	}
	echo do_shortcode('[sc_logo_carousel]');
//     get_template_part('/template-parts/compound/slide-partner/slide-partner');
	
	if (have_rows('most_entrusted_homepage')) {
		while (have_rows('most_entrusted_homepage')) {
			the_row();
			get_template_part('/template-parts/Round1/homepage/section-most-entrusted/most-entrusted');
		}
	}

	if (have_rows('outstanding_numbers_home')) {
		while (have_rows('outstanding_numbers_home')) {
			the_row();
			echo do_shortcode('[sc_number_outstanding]');
		}
	}
    get_template_part('/template-parts/Round1/homepage/section-multi-purpose/multi-purpose');

	if (have_rows('feature_homepage')) {
		while (have_rows('feature_homepage')) {
			the_row();
			echo do_shortcode('[sc_feature_r1]');
		}
	}
	
//     get_template_part('/template-parts/Round1/homepage/section-partnership/partner-ship');
    get_template_part('/template-parts/Round1/homepage/section-intergrations/technology');
