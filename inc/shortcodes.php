<?php
// ========================= Table =========================
add_shortcode('sc_table', 'table_shortcode');
function table_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/Round2/compound/section-table/uppromote-table');
    return ob_get_clean();
}

// ======================== Section Feature Round1 ==================
add_shortcode('sc_feature_r1', 'feature_r1_shortcode');
function feature_r1_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/Round1/components/section-feature/feature');
    return ob_get_clean();
}

// ========================= FAQ =========================
add_shortcode('sc_faqs', 'faqs_shortcode');
function faqs_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/compound/faqs/faqs');
    return ob_get_clean();
}
// ========================= Numbers =========================

add_shortcode('sc_number_outstanding', 'numbers_shortcode');
function numbers_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/Round1/homepage/section-number/number');
    return ob_get_clean();
}

// ========================= Get Started =========================

add_shortcode('sc_get_started', 'get_started_shortcode');
function get_started_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/compound/get-started/get-started');
    return ob_get_clean();
}
// ========================= Banner =========================

add_shortcode('sc_banner_desktop', 'banner_desktop_shortcode');
function banner_desktop_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/compound/banner-desktop/banner');
    return ob_get_clean();
}
// ========================= Banner R2 =========================

add_shortcode('sc_banner_r2', 'banner_r2_shortcode');
function banner_r2_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/Round2/compound/section-banner-r2/banner');
    return ob_get_clean();
}

// ========================= Logo Carousel =========================

add_shortcode('sc_logo_carousel', 'logo_carousel_shortcode');
function logo_carousel_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/compound/logo-carousel/logo-carousel');
    return ob_get_clean();
}

// ========================= Fashion Brands Slide =========================

add_shortcode('sc_fashion_brands_slide', 'fashion_brands_slide_shortcode');
function fashion_brands_slide_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/compound/fashion-brands-slide/fashion-brands-slide');
    return ob_get_clean();
}

// ========================= Content section =========================

add_shortcode('sc_content_section', 'section_content_shortcode');
function section_content_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/compound/content-section/content-section');
    return ob_get_clean();
}
// ========================= Pricing Plan =========================

add_shortcode('sc_pricing_plan', 'pricing_plan_shortcode');
function pricing_plan_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/compound/pricing-plan/pricing-plan');
    return ob_get_clean();
}

// ========================= Benefit of using =========================

add_shortcode('sc_benefits_of_using', 'benefits_of_using_shortcode');
function benefits_of_using_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/compound/benefits-of-using/benefits-of-using');
    return ob_get_clean();
}

// ========================= Brands use =========================

add_shortcode('sc_brands_use', 'brands_use_shortcode');
function brands_use_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/compound/brands-use/brands-use');
    return ob_get_clean();
}

// ========================= Customer words =========================

add_shortcode('sc_customers_words', 'customers_words_shortcode');
function customers_words_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/compound/customers-words/customers-words');
    return ob_get_clean();
}
// ========================= Marketing Platform =========================

add_shortcode('sc_marketing_platform', 'marketing_platform_shortcode');
function marketing_platform_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/compound/marketing-platform/marketing-platform');
    return ob_get_clean();
}

add_shortcode('highlight', 'highlight_shortcode');
function highlight_shortcode($atts, $content = null)
{
    $background = $atts['background_color'] ?? '#F4F4F5';
    $color = $atts['text_color'] ?? '#000000';
    return '<div style="--background: ' . $background . '; --color: ' . $color . ';" class="highlight">' . $content . '</div>';
}

add_shortcode('list', 'list_shortcode');
function list_shortcode($atts, $content = null)
{
    $styles  = '';
    $class_name = '';
    if (array_key_exists('number_background', $atts)) {
        $styles .= '--number-background: ' . $atts['number_background'] . ';';
    }

    if (array_key_exists('number_text', $atts)) {
        $styles .= '--number-text: ' . $atts['number_text'] . ';';
    }

    if (array_key_exists('style', $atts)) {
        $class_name .= ' ' . $atts['style'];
    }

    if (array_key_exists('type', $atts)) {
        $class_name .= ' ' . $atts['type'];
    } else {
        $class_name .= ' ' . 'bullet';
    }

    if (array_key_exists('with_zero', $atts)) {
        $class_name .= ' with-zero';
    }

    return '<div style="' . $styles . '" class="list-group ' . $class_name . '">' . $content . '</div>';
}



