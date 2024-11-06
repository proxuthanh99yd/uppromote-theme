<?php 
$option_partner_logo = get_field('option_partner_logo', 'option');

function ensure_min_items($array, $min_items) {
    $count = count($array);
    if ($count < $min_items) {
        $times = ceil($min_items / $count);
        $array = array_merge(...array_fill(0, $times, $array));
    }
    return array_slice($array, 0, $min_items);
}

$option_partner_logo = ensure_min_items($option_partner_logo, 20);
?>
<section id="logo__carousel">
    <div class="wrapper__infinity">
        <?php if (!empty($option_partner_logo)): ?>
            <?php foreach ($option_partner_logo as $logo): ?>
                <div class="item__logo__carousel">
                    <?php echo wp_get_attachment_image($logo, 'full', false); ?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>
