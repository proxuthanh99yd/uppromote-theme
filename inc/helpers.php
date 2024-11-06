<?php
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

function isMobileDevice()
{
    return preg_match(
        "/(android|avantgo|blackberry|bolt|boost|cricket|docomo 
|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i",
        $_SERVER["HTTP_USER_AGENT"]
    );
}
function is_mobile() {
    return is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"));
}
function my_theme_setup()
{
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'my_theme_setup');

function paginate(array $params)
{
    extract($params);
    if (!isset($current) || !isset($max)) return null;

    $prev = $current === 1 ? null : $current - 1;
    $next = $current === $max ? null : $current + 1;
    $items = [1];

    if ($current === 1 && $max === 1) return [
        "current" => $current,
        "prev" => $prev,
        "next" => $next,
        "items" => $items,
    ];
    if ($current > 4) array_push($items, "…");

    $r = 2;
    $r1 = $current - $r;
    $r2 = $current + $r;

    for ($i = $r1 > 2 ? $r1 : 2; $i <= min($max, $r2); $i++) array_push($items, $i);

    if ($r2 + 1 < $max) array_push($items, "…");
    if ($r2 < $max) array_push($items, $max);

    return [
        "current" => $current,
        "prev" => $prev,
        "next" => $next,
        "items" => $items,
    ];
}

// Remove theme capabilities for all administrators except allowed users
$allowed_user_ids = array(17); // Define allowed users globally

// Setting permissions
function remove_theme_capabilities() {
    $admins = get_role('administrator');
    if ($admins) {
        $admins->remove_cap('switch_themes');
        $admins->remove_cap('edit_themes');
        $admins->remove_cap('install_plugins');
        $admins->remove_cap('update_plugins');
    }
}
add_action('admin_init', 'remove_theme_capabilities');

// Add theme capabilities only for allowed users
function add_theme_capabilities($allcaps, $caps, $args, $user) {
    global $allowed_user_ids;
    if (in_array($user->ID, $allowed_user_ids)) {
        $allcaps['switch_themes'] = true;
        $allcaps['edit_themes'] = true;
        $allcaps['install_plugins'] = true;
        $allcaps['update_plugins'] = true;
    }
    return $allcaps;
}
add_filter('user_has_cap', 'add_theme_capabilities', 10, 4);

// Custom function to hide ACF menu only for specific users
function custom_remove_menus() {
    global $allowed_user_ids;
    if (!in_array(get_current_user_id(), $allowed_user_ids)) {
        remove_menu_page('edit.php?post_type=acf-field-group'); // Hide ACF Field Groups
    }
}
add_action('admin_menu', 'custom_remove_menus', 999);

// Disable plugin modification menu based on capability
function disable_plugin_modification() {
    if (!current_user_can('manage_options')) {
        remove_menu_page('plugins.php');
    }
}
add_action('admin_menu', 'disable_plugin_modification');

// Block certain plugin actions for non-allowed users
function block_plugin_actions($actions, $plugin_file, $plugin_data, $context) {
    global $allowed_user_ids;
    if (!in_array(get_current_user_id(), $allowed_user_ids)) {
        unset($actions['activate'], $actions['deactivate'], $actions['delete']);
    }
    return $actions;
}
add_filter('plugin_action_links', 'block_plugin_actions', 10, 4);
add_filter('network_admin_plugin_action_links', 'block_plugin_actions', 10, 4);
