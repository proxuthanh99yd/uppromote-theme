<?php


add_shortcode('sc_faqs', 'faqs_shortcode');
function faqs_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/compound/faqs/faqs');
    return ob_get_clean();
}

add_shortcode('sc_get_started', 'get_started_shortcode');
function get_started_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/compound/get-started/get-started');
    return ob_get_clean();
}
