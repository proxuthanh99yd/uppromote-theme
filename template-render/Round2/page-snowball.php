<?php 
	if (have_rows('banner_snowball')) {
		while (have_rows('banner_snowball')) {
			the_row();
			echo do_shortcode('[sc_banner_r2]');
		}
	}
	if (have_rows('uppromote_table_compare_snowball')) {
		while (have_rows('uppromote_table_compare_snowball')) {
			the_row();
			echo do_shortcode('[sc_table]');
		}
	}
	if (have_rows('why_choose_snowball')) {
		while (have_rows('why_choose_snowball')) {
			the_row();
			get_template_part('template-parts/Round2/compound/section-why-uppromote/why-uppromote');
		}
	}
	// section switch
	if (have_rows('switch_to_up_snowball')) {
		while (have_rows('switch_to_up_snowball')) {
			the_row();
			get_template_part('template-parts/Round2/compound/section-switch/switch-to-uppromote');
		}
	}
	if (have_rows('outstanding_numbers_snowball')) {
		while (have_rows('outstanding_numbers_snowball')) {
			the_row();
			echo do_shortcode('[sc_number_outstanding]');
		}
	}
	if (have_rows('compare_snowball')) {
		while (have_rows('compare_snowball')) {
			the_row();
			get_template_part('template-parts/Round2/compound/section-compare/compare');
		}
	}
	if (have_rows('top_rcm_and_favor_snowball')) {
		while (have_rows('top_rcm_and_favor_snowball')) {
			the_row();
			get_template_part('template-parts/Round1/homepage/section-most-entrusted/most-entrusted');
		}
	}
	if (have_rows('get_started_snowball')) {
		while (have_rows('get_started_snowball')) {
			the_row();
			echo do_shortcode('[sc_get_started]');
		}
	}