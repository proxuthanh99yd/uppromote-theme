 <section class="affiliate-recruitment section">
	 <?php
		$recruit = get_field('affiliate_recruitment');
		$title = $recruit['title'];
		$desc = $recruit['description'];
		$features = $recruit['features'];
	?>
      <div class="section-container content-affiliate">
        <h2><?= $title ?></h2>
        <span><?= $desc ?></span>
        <div class="list-item-affilate">
		  <?php foreach($features as $item): ?>
			  <div class="item-affilate">
				<div class="icon-affilate">
				  <?= wp_get_attachment_image($item['icon'],'full',false) ?>
				</div>
				<div>
				  <a href="<?= $item['link']['url'] ?>">
					<h3><?= $item['link']['title'] ?></h3>
					<svg
					  xmlns="http://www.w3.org/2000/svg"
					  width="24"
					  height="25"
					  viewBox="0 0 24 25"
					  fill="none"
					>
					  <path
						d="M2 12.125H19M19 12.125L13 6.125M19 12.125L13 18.125"
						stroke="#092C4C"
						stroke-width="2"
						stroke-linecap="round"
						stroke-linejoin="round"
					  />
					</svg>
				  </a>
				  <span><?= $item['content'] ?></span>
				</div>
			  </div>
			<?php endforeach; ?>
        </div>
      </div>
    </section>