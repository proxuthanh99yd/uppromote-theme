<?php
function isMobileDevice()
{
    return preg_match(
        "/(android|avantgo|blackberry|bolt|boost|cricket|docomo 
|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i",
        $_SERVER["HTTP_USER_AGENT"]
    );
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


