<?php

function set_default_featured_image($html, $post_id, $post_thumbnail_id, $size, $attr)
{
    if (empty($post_thumbnail_id)) {
        $html =  wp_get_attachment_image(1205, 'medium');
    }
    return $html;
}

add_filter('post_thumbnail_html', 'set_default_featured_image', 10, 5);

function set_default_featured_image_url($url, $post_id)
{
    if (empty(get_post_thumbnail_id($post_id))) {
        $url = wp_get_attachment_image_url(1205, 'medium');
    }
    return $url;
}
add_filter('default_post_thumbnail_url', 'set_default_featured_image_url', 10, 2);

$page_template = [
    30136 => 'template-render/page-affiliate-marketing',
    18823 => 'template-render/front-page',
	30539 => 'template-render/beauty-health',
	31025 => 'template-render/page-refersion',
// 	32326 => 'template-render/Round3/page-getting-started'
//     32496 => 'template-render/Round5/page-smart-commission'
];

function update_data($data)
{
    ob_start();
    global $page_template;
    if (isset($page_template[$data['post_id']])) {
        get_template_part($page_template[$data['post_id']]);
    }
    return ob_get_clean();
}

function set_post($post_id, $post, $update)
{

    if (!wp_is_post_revision($post_id)) {
        remove_action('save_post', 'set_post', 10, 3);
        if (!$post_id) {
            return;
        }
        if ('page' !== $post->post_type) {
            return;
        }

        $my_post = array(
            'ID'           => $post_id,
            'post_content' => update_data(['post_id' => $post_id]),
        );

        // Update the post into the database
        wp_update_post($my_post);

        add_action('save_post', 'set_post', 10, 3);
    }
}

add_action('save_post', 'set_post', 10, 3);




// shortcode
add_shortcode('sc_pros','pros_shortcode');
function pros_shortcode($atts, $content = null){
	$background = $atts['background_color'] ?? '#43B780';
	$color = $atts['text_color'] ?? '#fff';
	$title = $atts['title'] ?? '😍 PROs';
	
	return '<div style="--background: '.$background .'; --color: ' . $color . ';" class="pros__list"> <div class="pros__title">'. $title .'</div> ' . $content . '</div>';
}

add_shortcode( 'sc_cons', 'cons_shortcode' );
function cons_shortcode($atts, $content = null){
	$background = $atts['background_color'] ?? '#9DA3AF';
	$color = $atts['text_color'] ?? '#fff';
	$title = $atts['title'] ?? '😳 CONs';
	
	return '<div style="--background: '.$background .'; --color: ' . $color . ';" class="cons__list"><div class="cons__title">'. $title .'</div> ' . $content . '</div>';
}
add_shortcode( 'sc_pros_cons', 'pros_cons_shortcode');
function pros_cons_shortcode( $atts, $content = null ){
	return '<div class="group__pros__cons"> '.do_shortcode($content).' </div>';
}

add_shortcode('sc_button', 'button_shortcode');
function button_shortcode($atts, $content = null)
{
    $background = $atts['background_color'] ?? '#F4F4F5';
	$url = $atts['url'] ?? '/';
    $color = $atts['text_color'] ?? '#fff';
    return '<a href="' . esc_url($url) . '" style="--background: ' . $background . '; --color: ' . $color . ';" class="sc_button">' . $content . '</a>';
}


add_shortcode('sc_block_infomation','block_info_shortcode');
function block_info_shortcode($atts, $content = null){
	$background_title = $atts['background_color_title'] ?? '#3B67ED';
	$color_title = $atts['color_title'] ?? '#fff';
	$title = $atts['title'] ?? 'Tips for Researching Your Niche';
	return '<div style="--background: '.$background_title .'; --color: ' . $color_title . ';" class="block__information"><div class="block__info__title" > '.$title.'</div>'.$content.'</div>';
}