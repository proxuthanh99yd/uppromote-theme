<section id="customer-story">
	<?php 
		$story = get_field('customer_stories');
		$title = $story['title'];
		$desc = $story['description'];
		$label = $story['label'];
		$logo = $story['logo'];
		$content = $story['content'];
		$archivement = $story['archivement'];
		$link = $story['link'];
		$avatar = $story['avatar'];
		$name = $story['name'];
		$role = $story['role'];
	?>
	<div class="container">
		<div class="content">
			<h1 class="title"><?= $title ?></h1>
			<p class="desc"><?= $desc ?></p>
		</div>
	</div>
	<div class="container">
		<div class="content__box">
			<div class="content">
				<div class="label">
					<img src="/wp-content/uploads/2024/10/Vector.svg" alt="">
					<span><?= $label ?></span>
				</div>
<!-- 				<img class="logo" src="https://uppromote-dev.okhub-tech.com/wp-content/uploads/2024/10/Mask-group-1.png"/> -->
				<?= wp_get_attachment_image($logo,'full',false,['class' => 'logo']) ?>
				<div class="description">
					<?= $content ?>
				</div>
				<div class="archivement">
					<?php foreach($archivement as $item): ?>
						<div class="archive_item">
							<span class="number"><?= $item['number'] ?></span>
							<span class="name"><?= $item['text'] ?></span>
						</div>
					<?php endforeach; ?>
				</div>  
				<a href="<?= $link['url'] ?>" class="section-link-btn">
					<span><?= $link['title'] ?></span>
					<img src="/wp-content/uploads/2024/10/Arrow_Left_MD.svg" alt="">
				</a>
			</div>
			<div class="avatar">
<!-- 				<img src="https://uppromote-dev.okhub-tech.com/wp-content/uploads/2024/10/Rectangle-34626809.webp" alt=""> -->
				<?= wp_get_attachment_image($avatar,'full',false) ?>
				<div class="info">
					<span class="name"><?= $name ?></span>
					<span class="job"><?= $role ?></span>
				</div>
			</div>
		</div>
	</div>   
</section>