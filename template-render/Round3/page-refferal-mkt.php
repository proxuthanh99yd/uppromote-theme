<?php

echo do_shortcode('[sc_banner_desktop]');
echo do_shortcode('[sc_logo_carousel]');
get_template_part('/template-parts/Round3/page-referral-mkt/section-proofs/proofs');
if(isMobileDevice()){
	get_template_part('/template-parts/Round3/page-referral-mkt/section-simplify/simplify_mobile');
}else{
	get_template_part('/template-parts/Round3/page-referral-mkt/section-simplify/simplify');
}
get_template_part('/template-parts/Round3/page-referral-mkt/section-intuitive/intuitive');
get_template_part('template-parts/Round1/homepage/section-most-entrusted/most-entrusted');
echo do_shortcode('[sc_pricing_plan]');
echo do_shortcode('[sc_faqs]');
if (have_rows('get_started_ref')) {
		while (have_rows('get_started_ref')) {
			the_row();
			echo do_shortcode('[sc_get_started]');
		}
	}