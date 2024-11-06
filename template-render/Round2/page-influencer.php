<?php 
	if (have_rows('banner_influencer')) {
		while (have_rows('banner_influencer')) {
			the_row();
			echo do_shortcode('[sc_banner_desktop]');
		}
	}
	echo do_shortcode('[sc_logo_carousel]');
	get_template_part('template-parts/Round2/page-influence/section-handle/handle');
	get_template_part('template-parts/Round2/page-influence/section-solutions/solutions');
// 	get_template_part('template-parts/Round2/page-influence/section-simplify/simplify');
	if (have_rows('features_influencer')) {
		while (have_rows('features_influencer')) {
			the_row();
			echo do_shortcode('[sc_feature_r1]');
		}
	}
	get_template_part('template-parts/Round2/page-influence/section-client/client');
	echo do_shortcode('[sc_pricing_plan]');
	echo '<section id="faqs">';
		if (have_rows('faqs_influencer')) {
			while (have_rows('faqs_influencer')) {
				the_row();
				echo do_shortcode('[sc_faqs]');
			}
		}
	echo '</section>';
	if (have_rows('get_started_influence')) {
		while (have_rows('get_started_influence')) {
			the_row();
			echo do_shortcode('[sc_get_started]');
		}
	}	
	

