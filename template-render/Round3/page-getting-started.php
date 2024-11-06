<?php
echo do_shortcode('[sc_banner_desktop]');
echo do_shortcode('[sc_logo_carousel]');
get_template_part('/template-parts/Round3/page-getting-started/section-aff-mkt/aff-mkt');
// if(isMobileDevice()){
	get_template_part('/template-parts/Round3/page-getting-started/section-simplify/simplify_mobile');
// }else{
	get_template_part('/template-parts/Round3/page-getting-started/section-simplify/simplify');
// }
get_template_part('/template-parts/Round3/page-getting-started/section-for-starters/starters');
get_template_part('/template-parts/Round3/page-getting-started/section-alternative/alternative');
get_template_part('template-parts/Round1/homepage/section-most-entrusted/most-entrusted');
echo do_shortcode('[sc_pricing_plan]');
get_template_part('/template-parts/Round3/page-getting-started/section-tips-guides/tip_guide');
echo do_shortcode('[sc_faqs]');
echo do_shortcode('[sc_get_started]');
