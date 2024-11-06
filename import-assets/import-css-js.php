<?php

// ============================== start wp_enqueue lib =====================//
function  wp_enqueue_lib()
{
	wp_enqueue_style('font-poppins', get_theme_file_uri('/assets/fonts/Poppins/stylesheet.css'));
}
add_action('wp_enqueue_scripts', 'wp_enqueue_lib', 1000);

// ============================== end wp_enqueue lib =====================//

// ============================== wp_enqueue lib =====================//
function  wp_enqueue_local()
{
// 	wp_enqueue_style('reset', get_theme_file_uri('/assets/css/reset.css'));
// 	wp_enqueue_style('global', get_theme_file_uri('/assets/css/global.css'));
	
	// Preload the styles
	echo '<link rel="preload" href="' . get_theme_file_uri('/assets/css/reset.css') . '" as="style">';
	echo '<link rel="preload" href="' . get_theme_file_uri('/assets/css/global.css') . '" as="style">';

	// Enqueue the styles as usual
	wp_enqueue_style('reset', get_theme_file_uri('/assets/css/reset.css'));
	wp_enqueue_style('global', get_theme_file_uri('/assets/css/global.css'));

	if(isMobileDevice()){
		wp_enqueue_style('header', get_theme_file_uri('/template-parts/compound/header/assets/menu-mobile.css'));
		wp_enqueue_style('utils', get_theme_file_uri('/assets/css/utils.css'));
		wp_enqueue_style('offcanvas', get_theme_file_uri('/assets/css/offcanvas.css'));
		wp_enqueue_style('accordion', get_theme_file_uri('/assets/css/accordion.css'));
		wp_enqueue_script("offcanvas", get_theme_file_uri('/assets/bootstrap/js/src/offcanvas.js'), [], false, true);
		wp_enqueue_script("collapse", get_theme_file_uri('/assets/bootstrap/js/src/collapse.js'), [], false, true);
	}else {
		wp_enqueue_style('header', get_theme_file_uri('/template-parts/compound/header/assets/header-pc-new.css'));
	}
		wp_enqueue_style('footer', get_theme_file_uri('/template-parts/compound/footer/assets/styles.css'));
		wp_enqueue_script("header", get_theme_file_uri('/template-parts/compound/header/assets/scripts.js'), [], false, true);

// 	affiliate-marketing
	if (is_page(30136)) {
		wp_enqueue_style('banner-desktop', get_theme_file_uri('/template-parts/compound/banner-desktop/assets/style.css'));
		wp_enqueue_style('marketing-platform', get_theme_file_uri('/template-parts/compound/marketing-platform/assets/styles.css'));
		wp_enqueue_style('brands-use', get_theme_file_uri('/template-parts/compound/brands-use/assets/styles.css'));
		wp_enqueue_style('benefits-of-using', get_theme_file_uri('/template-parts/compound/benefits-of-using/assets/styles.css'));
		wp_enqueue_style('utils', get_theme_file_uri('/assets/css/utils.css'));
		wp_enqueue_style('accordion', get_theme_file_uri('/assets/css/accordion.css'));
		wp_enqueue_style('faqs', get_theme_file_uri('/template-parts/compound/faqs/assets/styles.css'));
		wp_enqueue_script("collapse", get_theme_file_uri('/assets/bootstrap/js/src/collapse.js'), [], false, true);
		wp_enqueue_style('pricing-plan', get_theme_file_uri('/template-parts/compound/pricing-plan/assets/styles.css'));
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'));
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], false, true);
		wp_enqueue_style('customer-word', get_theme_file_uri('/template-parts/compound/customers-words/assets/styles.css'));
		wp_enqueue_script('customer-word', get_theme_file_uri('/template-parts/compound/customers-words/assets/script.js'), [], false, true);
// 		wp_enqueue_style('affiliate-marketing', get_theme_file_uri('/template-parts/Round1/page-affiliate-marketing/assets/styles-pc.css'));
		wp_enqueue_style('features', get_theme_file_uri('/template-parts/Round1/components/section-feature/styles.css'));
		wp_enqueue_style('logo-carousel', get_theme_file_uri('/template-parts/compound/logo-carousel/assets/style.css'));
	}

	
// 	home page
	if(is_front_page()){
		wp_enqueue_style('banner-desktop', get_theme_file_uri('/template-parts/compound/banner-desktop/assets/style.css'));
		wp_enqueue_style('logo-carousel', get_theme_file_uri('/template-parts/compound/logo-carousel/assets/style.css'));
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/style.css'));
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/script.js'), [], false, true);
		wp_enqueue_style('number', get_theme_file_uri('/template-parts/Round1/homepage/section-number/assets/styles.css'));
		wp_enqueue_style('multi-purpose', get_theme_file_uri('/template-parts/Round1/homepage/section-multi-purpose/assets/style.css'));
		wp_enqueue_script('multi-purpose', get_theme_file_uri('/template-parts/Round1/homepage//section-multi-purpose/assets/script.js'), [], false, true);
// 		wp_enqueue_style('partner-ship', get_theme_file_uri('/template-parts/Round1/homepage/section-partnership/assets/style.css'));
		wp_enqueue_style('partner-ship', get_theme_file_uri('/template-parts/Round1/components/section-feature/styles.css'));
		wp_enqueue_style('intergrations', get_theme_file_uri('/template-parts/Round1/homepage/section-intergrations/assets/style.css'));
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'));
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], false, true);
		
	}

// 	beauty
	if(is_page(30539)){
		wp_enqueue_style('banner-desktop', get_theme_file_uri('/template-parts/compound/banner-desktop/assets/style.css'));
		wp_enqueue_style('marketing', get_theme_file_uri('/template-parts/Round3/page-beauty-health/section-marketing/assets/styles.css'));
		wp_enqueue_style('profits', get_theme_file_uri('/template-parts/Round3/page-beauty-health/section-extra-profits/assets/styles.css'));
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'));
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], false, true);
		wp_enqueue_style('explore', get_theme_file_uri('/template-parts/Round3/page-beauty-health/section-explore/assets/styles.css'));
		wp_enqueue_script('explore', get_theme_file_uri('/template-parts/Round3/page-beauty-health/section-explore/assets/script.js'), [], false, true);
		wp_enqueue_style('pricing-plan', get_theme_file_uri('/template-parts/compound/pricing-plan/assets/styles.css'));
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/style.css'));
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/script.js'), [], false, true);
		wp_enqueue_style('beauty-health', get_theme_file_uri('/template-parts/Round3/page-beauty-health/beauty_health.css'));
	}
		
// 	Fashion
	if (is_page(30575)) {
		wp_enqueue_style('banner-desktop', get_theme_file_uri('/template-parts/compound/banner-desktop/assets/style.css'));
		wp_enqueue_style('empowred', get_theme_file_uri('/template-parts/Round3/page-fashion/section-empowerd/assets/styles.css'));
		wp_enqueue_style('story', get_theme_file_uri('/template-parts/Round3/page-fashion/setion-story/assets/styles.css'));
		wp_enqueue_script('story', get_theme_file_uri('/template-parts/Round3/page-fashion/setion-story/assets/script.js'), [], false, true);
		wp_enqueue_style('brands', get_theme_file_uri('/template-parts/Round3/page-fashion/section-fashion-brands/assets/styles.css'));
		wp_enqueue_style('pricing-plan', get_theme_file_uri('/template-parts/compound/pricing-plan/assets/styles.css'));
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'));
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], false, true);
		wp_enqueue_style('fashion', get_theme_file_uri('/template-parts/Round3/page-fashion/fashion.css'));
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/style.css'));
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/script.js'), [], false, true);
	}
// 	Home & Tool
	if(is_page(32076)){
		wp_enqueue_style('banner-desktop', get_theme_file_uri('/template-parts/compound/banner-desktop/assets/style.css'));
		wp_enqueue_style('partner', get_theme_file_uri('/template-parts/Round3/page-home-tool/section-partner/assets/styles.css'));
		wp_enqueue_style('simplify', get_theme_file_uri('/template-parts/Round3/page-home-tool/section-simplify/assets/styles.css'));
		wp_enqueue_style('story', get_theme_file_uri('/template-parts/Round3/page-home-tool/section-story/assets/styles.css'));
		wp_enqueue_style('pricing-plan', get_theme_file_uri('/template-parts/compound/pricing-plan/assets/styles.css'));
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'));
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], false, true);
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/style.css'));
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/script.js'), [], false, true);
		wp_enqueue_style('home-tool', get_theme_file_uri('/template-parts/Round3/page-home-tool/home-tool.css'));
	}
// 	Sports
	if(is_page(32078)){
		wp_enqueue_style('banner-desktop', get_theme_file_uri('/template-parts/compound/banner-desktop/assets/style.css'));
		wp_enqueue_style('partner', get_theme_file_uri('/template-parts/Round3/page-sports/section-partner/assets/styles.css'));
		wp_enqueue_style('turnpro', get_theme_file_uri('/template-parts/Round3/page-sports/section-turnpro/assets/styles.css'));
		wp_enqueue_style('story', get_theme_file_uri('/template-parts/Round3/page-sports/section-story/assets/styles.css'));
		wp_enqueue_style('pricing-plan', get_theme_file_uri('/template-parts/compound/pricing-plan/assets/styles.css'));
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'));
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], false, true);
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/style.css'));
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/script.js'), [], false, true);
		wp_enqueue_style('sports', get_theme_file_uri('/template-parts/Round3/page-sports/sports.css'));
	}
	
// 	Customer Success
	if(is_page(32223)){
		wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
		wp_enqueue_script("swiper", 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], false, true);
		wp_enqueue_style('stories', get_theme_file_uri('/template-parts/Round3/page-customer-success/section-story/assets/styles.css'));
		wp_enqueue_style('logo-carousel', get_theme_file_uri('/template-parts/compound/logo-carousel/assets/style.css'));
		wp_enqueue_style('slide', get_theme_file_uri('/template-parts/Round3/page-customer-success/section-slide/assets/styles.css'));
		wp_enqueue_script('slide', get_theme_file_uri('/template-parts/Round3/page-customer-success/section-slide/assets/script.js'), [], false, true);
		wp_enqueue_style('blog', get_theme_file_uri('/template-parts/Round3/page-customer-success/section-blog/assets/styles.css'));
		wp_enqueue_script('blog', get_theme_file_uri('/template-parts/Round3/page-customer-success/section-blog/assets/script.js'), [], false, true);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'));
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], false, true);
		wp_enqueue_style('customer-success', get_theme_file_uri('/template-parts/Round3/page-customer-success/customer-story.css'));
	}
//  Refferal Marketing
	if(is_page(32272)){
		wp_enqueue_style('banner', get_theme_file_uri('/template-parts/compound/banner-desktop/assets/style.css'));
		wp_enqueue_style('logo-carousel', get_theme_file_uri('/template-parts/compound/logo-carousel/assets/style.css'));
		wp_enqueue_style('proofs', get_theme_file_uri('/template-parts/Round3/page-referral-mkt/section-proofs/assets/styles.css'));
		if(!isMobileDevice()){
			wp_enqueue_style('simplify', get_theme_file_uri('/template-parts/Round3/page-referral-mkt/section-simplify/assets/styles.css'));
		}else {
			wp_enqueue_style('simplify', get_theme_file_uri('/template-parts/Round3/page-referral-mkt/section-simplify/assets/responsive.css'));
		}
		wp_enqueue_style('intuitive', get_theme_file_uri('/template-parts/Round3/page-referral-mkt/section-intuitive/assets/styles.css'));
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/homepage/section-most-entrusted/assets/style.css'));
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/homepage/section-most-entrusted/assets/script.js'), [], false, true);
		wp_enqueue_style('pricing-plan', get_theme_file_uri('/template-parts/compound/pricing-plan/assets/styles.css'));
		wp_enqueue_style('utils', get_theme_file_uri('/assets/css/utils.css'));
		wp_enqueue_style('accordion', get_theme_file_uri('/assets/css/accordion.css'));
		wp_enqueue_style('faqs', get_theme_file_uri('/template-parts/compound/faqs/assets/styles.css'));
		wp_enqueue_script("collapse", get_theme_file_uri('/assets/bootstrap/js/src/collapse.js'), [], false, true);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'));
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], false, true);
		wp_enqueue_style('ref-mkt',get_theme_file_uri('/template-parts/Round3/page-referral-mkt/referral-mkt.css'));
	}

	
// 	Getting Started
	if(is_page(32326)){
		wp_enqueue_style('banner', get_theme_file_uri('/template-parts/compound/banner-desktop/assets/style.css'));
		wp_enqueue_style('logo-carousel', get_theme_file_uri('/template-parts/compound/logo-carousel/assets/style.css'));
		wp_enqueue_style('aff-mkt', get_theme_file_uri('/template-parts/Round3/page-getting-started/section-aff-mkt/assets/styles.css'));
		wp_enqueue_style('alternative', get_theme_file_uri('/template-parts/Round3/page-getting-started/section-alternative/assets/styles.css'));
		wp_enqueue_style('starters', get_theme_file_uri('/template-parts/Round3/page-getting-started/section-for-starters/assets/styles.css'));
		wp_enqueue_style('simplify-pc', get_theme_file_uri('/template-parts/Round3/page-getting-started/section-simplify/assets/styles.css'));
		wp_enqueue_style('simplify-mb', get_theme_file_uri('/template-parts/Round3/page-getting-started/section-simplify/assets/responsive.css'));
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/style.css'));
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/script.js'), [], false, true);
		wp_enqueue_style('tip-guide', get_theme_file_uri('/template-parts/Round3/page-getting-started/section-tips-guides/assets/styles.css'));
		wp_enqueue_style('pricing-plan', get_theme_file_uri('/template-parts/compound/pricing-plan/assets/styles.css'));
		wp_enqueue_style('utils', get_theme_file_uri('/assets/css/utils.css'));
		wp_enqueue_style('accordion', get_theme_file_uri('/assets/css/accordion.css'));
		wp_enqueue_style('faqs', get_theme_file_uri('/template-parts/compound/faqs/assets/styles.css'));
		wp_enqueue_script("collapse", get_theme_file_uri('/assets/bootstrap/js/src/collapse.js'), [], false, true);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'));
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], false, true);
		wp_enqueue_style('getting-st', get_theme_file_uri('/template-parts/Round3/page-getting-started/get_started.css'));
		
		
	}
	
// 	Contact
	if (is_page('contact')) {
		wp_enqueue_script('jquery');
		wp_enqueue_style('page-contact', get_theme_file_uri('/template-parts/Round1/page-contact/assets/styles.css'));
	}
	
// 	================================================= Round 2 =================================================
	if (is_page('refersion') || is_page('social-snowball') || is_page('impact') || is_page('go-affpro')) {
		wp_enqueue_style('number', get_theme_file_uri('/template-parts/Round1/homepage/section-number/assets/styles.css'));
		wp_enqueue_style('table', get_theme_file_uri('/template-parts/Round2/compound/section-table/assets/styles.css'));
		wp_enqueue_style('banner-r2', get_theme_file_uri('/template-parts/Round2/compound/section-banner-r2/styles.css'));
		wp_enqueue_style('why-uppromote', get_theme_file_uri('/template-parts/Round2/compound/section-why-uppromote/assets/styles.css'));
		wp_enqueue_style('switch-to-uppromote', get_theme_file_uri('/template-parts/Round2/compound/section-to-uppromote/assets/styles.css'));
		wp_enqueue_style('compare', get_theme_file_uri('/template-parts/Round2/compound/section-compare/assets/styles.css'));
		wp_enqueue_style('switch', get_theme_file_uri('/template-parts/Round2/compound/section-switch/assets/styles.css'));
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/style.css'));
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/script.js'), [], false, true);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'));
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], false, true);
	}
	if(is_page('refersion')){
		wp_enqueue_style('refersion', get_theme_file_uri('/template-parts/Round2/refersion/styles.css'));
	}
	if(is_page('social-snowball')){
		wp_enqueue_style('social-snowball', get_theme_file_uri('/template-parts/Round2/snowball/styles.css'));
	}
	if(is_page('go-affpro')){
		wp_enqueue_style('go-affpro', get_theme_file_uri('/template-parts/Round2/go-affpro/styles.css'));
	}
	if(is_page('impact')){
		wp_enqueue_style('go-affpro', get_theme_file_uri('/template-parts/Round2/impact/styles.css'));
	}
	if(is_page('influencer')){
		wp_enqueue_style('banner-desktop', get_theme_file_uri('/template-parts/compound/banner-desktop/assets/style.css'));
		wp_enqueue_style('logo-carousel', get_theme_file_uri('/template-parts/compound/logo-carousel/assets/style.css'));
		wp_enqueue_style('handle', get_theme_file_uri('/template-parts/Round2/page-influence/section-handle/assets/styles.css'));
// 		wp_enqueue_style('simplify', get_theme_file_uri('/template-parts/Round2/page-influence/section-simplify/assets/styles.css'));
		wp_enqueue_style('features', get_theme_file_uri('/template-parts/Round1/components/section-feature/styles.css'));
		wp_enqueue_style('solution', get_theme_file_uri('/template-parts/Round2/page-influence/section-solutions/assets/styles.css'));
		wp_enqueue_style('client', get_theme_file_uri('/template-parts/Round2/page-influence/section-client/assets/styles.css'));
		wp_enqueue_style('utils', get_theme_file_uri('/assets/css/utils.css'));
		wp_enqueue_style('accordion', get_theme_file_uri('/assets/css/accordion.css'));
		wp_enqueue_style('faqs', get_theme_file_uri('/template-parts/compound/faqs/assets/styles.css'));
		wp_enqueue_script("collapse", get_theme_file_uri('/assets/bootstrap/js/src/collapse.js'), [], false, true);
		wp_enqueue_style('pricing-plan', get_theme_file_uri('/template-parts/compound/pricing-plan/assets/styles.css'));
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'));
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], false, true);
	}
	// 	================================================= Single POST =================================================
	if (is_singular('post')) {
		wp_enqueue_style('short-code', get_theme_file_uri('/assets/css/shortcodes.css'));
	}
	// 	================================================= Round 4 =================================================
	// Author
	if(is_page(31783)){
		wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
		wp_enqueue_script("swiper", 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], false, true);
		wp_enqueue_style('banner', get_theme_file_uri('/template-parts/Round4/page-author/section-banner/assets/styles.css'));
		wp_enqueue_style('info', get_theme_file_uri('/template-parts/Round4/page-author/section-info/assets/styles.css'));
		if(isMobileDevice()){
			wp_enqueue_style('album', get_theme_file_uri('/template-parts/Round4/page-author/section-album/assets/responsive.css'));
			wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/Round4/page-author/section-album/assets/scripts.js'), [], false, true);
		}else{
			wp_enqueue_style('album', get_theme_file_uri('/template-parts/Round4/page-author/section-album/assets/styles.css'));
		}
		wp_enqueue_style('article', get_theme_file_uri('/template-parts/Round4/page-author/section-article/assets/styles.css'));
		wp_enqueue_script('article', get_theme_file_uri('/template-parts/Round4/page-author/section-article/assets/scripts.js'), [], false, true);
		
	}
	// 	================================================= Round5 ================================================= 
// 	Commission
	if(is_page(32496)){
		wp_enqueue_style('banner-desktop', get_theme_file_uri('/template-parts/compound/banner-desktop/assets/style.css'));
		wp_enqueue_style('campaign', get_theme_file_uri('/template-parts/Round5/components/section-campaign/styles.css'));
		wp_enqueue_style('winbig', get_theme_file_uri('/template-parts/Round5/page-smart-commisision/section-winbig/styles.css'));
		wp_enqueue_style('further', get_theme_file_uri('/template-parts/Round5/components/section-further/styles.css'));
		wp_enqueue_style('feature', get_theme_file_uri('/template-parts/Round5/components/section-feature/styles.css'));
		wp_enqueue_style('simple', get_theme_file_uri('/template-parts/Round5/page-smart-commisision/section-simple/styles.css'));
		wp_enqueue_style('advanced', get_theme_file_uri('/template-parts/Round5/page-smart-commisision/section-advanced/styles.css'));
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/style.css'));
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/script.js'), [], false, true);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'));
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], false, true);
		wp_enqueue_style('smart-commission', get_theme_file_uri('/template-parts/Round5/page-smart-commisision/smart-commision.css'));
	}
// 	Custom Dashboard
	if(is_page(32612)){
		wp_enqueue_style('banner-desktop', get_theme_file_uri('/template-parts/compound/banner-desktop/assets/style.css'));
		wp_enqueue_style('campaign', get_theme_file_uri('/template-parts/Round5/components/section-campaign/styles.css'));
		wp_enqueue_style('further', get_theme_file_uri('/template-parts/Round5/components/section-further/styles.css'));
		wp_enqueue_style('feature', get_theme_file_uri('/template-parts/Round5/components/section-feature/styles.css'));
		wp_enqueue_style('bespoke', get_theme_file_uri('/template-parts/Round5/page-customdb/bespoke.css'));
		wp_enqueue_style('customisable', get_theme_file_uri('/template-parts/Round5/page-customdb/customisable.css'));
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/style.css'));
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/script.js'), [], false, true);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'));
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], false, true);
		wp_enqueue_style('custom-dashboard', get_theme_file_uri('/template-parts/Round5/page-customdb/custom-dashboard.css'));
	}
// White Label
	if(is_page(32671)){
		wp_enqueue_style('banner-desktop', get_theme_file_uri('/template-parts/compound/banner-desktop/assets/style.css'));
		wp_enqueue_style('campaign', get_theme_file_uri('/template-parts/Round5/components/section-campaign/styles.css'));
		wp_enqueue_style('feature', get_theme_file_uri('/template-parts/Round5/components/section-feature/styles.css'));
		wp_enqueue_style('own-style', get_theme_file_uri('/template-parts/Round5/page-whitelabel/own-style.css'));
		wp_enqueue_style('customisable', get_theme_file_uri('/template-parts/Round5/page-whitelabel/white-label-features.css'));
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/style.css'));
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/script.js'), [], false, true);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'));
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], false, true);
		wp_enqueue_style('white-label', get_theme_file_uri('/template-parts/Round5/page-whitelabel/white-label.css'));
	}
//Features
	if(is_page(32774)){
		wp_enqueue_style('banner-desktop', get_theme_file_uri('/template-parts/compound/banner-desktop/assets/style.css'));
		wp_enqueue_style('support-at-every-step', get_theme_file_uri('/template-parts/Round5/page-featurepage/support-at-every-step/styles.css'));
		wp_enqueue_script('support-at-every-step', get_theme_file_uri('/template-parts/Round5/page-featurepage/support-at-every-step/script.js'), [], false, true);
		wp_enqueue_style('program-setup', get_theme_file_uri('/template-parts/Round5/page-featurepage/program-setup/styles.css'));
		wp_enqueue_style('affiliate-recruitment', get_theme_file_uri('/template-parts/Round5/page-featurepage/affiliate-recruitment/styles.css'));
		wp_enqueue_style('affiliate-management', get_theme_file_uri('/template-parts/Round5/page-featurepage/affiliate_management/styles.css'));
		wp_enqueue_style('tracking-analytics', get_theme_file_uri('/template-parts/Round5/page-featurepage/tracking-analytics/styles.css'));
		wp_enqueue_style('payment', get_theme_file_uri('/template-parts/Round5/page-featurepage/payment/styles.css'));
		wp_enqueue_style('pricing-plan', get_theme_file_uri('/template-parts/compound/pricing-plan/assets/styles.css'));
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/style.css'));
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/script.js'), [], false, true);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'));
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], false, true);
		wp_enqueue_style('features', get_theme_file_uri('/template-parts/Round5/page-featurepage/feature.css'));
	}
}
add_action('wp_enqueue_scripts', 'wp_enqueue_local', 1001);

// ============================== wp_enqueue lib =====================//
add_filter('script_loader_tag', 'add_type_attribute', 10, 3);
function add_type_attribute($tag, $handle, $src)
{
	// if not your script, do nothing and return original $tag
	if ('collapse' !== $handle && 'offcanvas' !== $handle) {
		return $tag;
	}
	
	// change the script tag by adding type="module" and return it.
	$tag = '<script type="module" src="' . esc_url($src) . '"></script>';
	return $tag;
}
