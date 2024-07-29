<section class="faqs">
    <div class="faqs__header headline font-size-H2-pc">
        <h2>Frequently asked questions</h2>
    </div>
    <div class="accordion" id="accordionExample">
        <?php for ($i = 0; $i < 4; $i++) : ?><div class="accordion-item">
                <h2 class="accordion-header">
                    <button style="--bs-accordion-btn-active-icon: url('<?php echo get_theme_file_uri('/assets/icons/minus-icon.svg') ?>');
                    --bs-accordion-btn-icon:url('<?php echo get_theme_file_uri('/assets/icons/plus-icon.svg') ?>');" class="accordion-button <?php echo $i != 0 ? 'collapsed' : '' ?>" aria-controls="collapse-<?php echo $i; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $i; ?>" aria-expanded="<?php echo $i == 0 ? 'true' : 'false' ?>" aria-controls="collapse-<?php echo $i; ?>">
                        Accordion Item #<?php echo $i; ?>
                    </button>
                </h2>
                <div id="collapse-<?php echo $i; ?>" class="accordion-collapse collapse <?php echo $i == 0 ? 'show' : 'false' ?>" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of
                        this with custom CSS or overriding our default variables. It's also worth noting that just about any
                        HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div><?php endfor; ?>
    </div>
</section>