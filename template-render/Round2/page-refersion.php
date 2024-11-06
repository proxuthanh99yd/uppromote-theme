<?php 
	if (have_rows('banner_refersion')) {
		while (have_rows('banner_refersion')) {
			the_row();
			echo do_shortcode('[sc_banner_r2]');
		}
	}
	if (have_rows('uppromote_table_compare_refersion')) {
		while (have_rows('uppromote_table_compare_refersion')) {
			the_row();
			echo do_shortcode('[sc_table]');
		}
	}

// section why choose up
	if (have_rows('why_choose_refersion')) {
		while (have_rows('why_choose_refersion')) {
			the_row();
			get_template_part('template-parts/Round2/compound/section-why-uppromote/why-uppromote');
		}
	}
// section switch
	if (have_rows('switch_to_uprefersion')) {
		while (have_rows('switch_to_uprefersion')) {
			the_row();
			get_template_part('template-parts/Round2/compound/section-switch/switch-to-uppromote');
		}
	}
	
	if (have_rows('outstanding_numbers_refersion')) {
		while (have_rows('outstanding_numbers_refersion')) {
			the_row();
			echo do_shortcode('[sc_number_outstanding]');
		}
	}
	if (have_rows('compare_refersion')) {
		while (have_rows('compare_refersion')) {
			the_row();
			get_template_part('template-parts/Round2/compound/section-compare/compare');
		}
	}
	
	if (have_rows('top_rcm_and_favor_refersion')) {
		while (have_rows('top_rcm_and_favor_refersion')) {
			the_row();
			get_template_part('template-parts/Round1/homepage/section-most-entrusted/most-entrusted');
		}
	}
	if (have_rows('get_started_refersion')) {
		while (have_rows('get_started_refersion')) {
			the_row();
			echo do_shortcode('[sc_get_started]');
		}
	}

