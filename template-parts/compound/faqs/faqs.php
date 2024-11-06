<div class="faqs">
    <div class="faqs__header headline font-size-H2-pc">
        <h2>Frequently asked questions</h2>
    </div>
    <div class="accordion" id="accordionExample">
        <?php
        $faqs = get_field('faqs_common');
        if ($faqs) :
            for ($i = 0; $i < count($faqs); $i++) : ?><div class="accordion-item">
            <h2 class="accordion-header">
                <button style="--bs-accordion-btn-active-icon: url('<?php echo get_theme_file_uri('/assets/icons/minus-icon.svg') ?>');
                    --bs-accordion-btn-icon:url('<?php echo get_theme_file_uri('/assets/icons/plus-icon.svg') ?>');"
                    class="accordion-button <?php echo $i != 0 ? 'collapsed' : '' ?>"
                    aria-controls="collapse-<?php echo $i; ?>" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse-<?php echo $i; ?>"
                    aria-expanded="<?php echo $i == 0 ? 'true' : 'false' ?>" aria-controls="collapse-<?php echo $i; ?>">
                    <?php echo $faqs[$i]['questions']; ?>
                </button>
            </h2>
            <div id="collapse-<?php echo $i; ?>"
                class="accordion-collapse collapse <?php echo $i == 0 ? 'show' : 'false' ?>"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <?php echo $faqs[$i]['asked']; ?>
                </div>
            </div>
        </div><?php endfor;
                endif; ?>
    </div>
</div>