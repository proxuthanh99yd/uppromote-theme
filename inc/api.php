<?php
// API load more article Stephen 
// API load more article Stephen 
// API load more article Stephen 
// API load more article Stephen 

function post_stephen_api_endpoint() {
	register_rest_route('okhub/v1', '/posts-stephen', array(
		'methods'  => 'GET',
		'callback' => 'get_posts_stephen',
	));
}
add_action('rest_api_init', 'post_stephen_api_endpoint');

function get_posts_stephen($data) {
	// Làm sạch các giá trị page và per_page
	$page = isset($data['page']) ? absint($data['page']) : 1;
	$per_page = isset($data['per_page']) ? absint($data['per_page']) : 6;
	$offset = ($page - 1) * $per_page;

	// Truy vấn bài viết
	$args = array(
		'post_type'      => 'post',
		'posts_per_page' => $per_page,
		'paged'          => $page,
		'offset'         => $offset,
		'orderby'        => 'date',
		'order'          => 'DESC',
	);

	if(isset($data['category'])){
		$category_slug = sanitize_text_field($data['category']);
        $args['tax_query'][] = array(
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    => $category_slug,
        );
	}
	
	$query = new WP_Query($args);

	// Kiểm tra có bài viết không
	if (!$query->have_posts()) {
		return new WP_Error('no_post_found', 'Không có bài viết hợp lệ', array('status' => 404));
	}

	$posts = $query->posts;
	$total_posts = $query->found_posts;
	$total_pages = ceil($total_posts / $args['posts_per_page']);

	$response = array(
		'total_posts'  => $total_posts,
		'current_page' => $args['paged'],
		'total_pages'  => $total_pages,
		'posts'        => array(),
	);

	// Vòng lặp để tạo phản hồi JSON cho mỗi bài viết
	foreach ($posts as $post) {
		$title = $post->post_title;
		$slug = get_the_permalink($post->ID);
		$feature_image = get_the_post_thumbnail_url($post->ID);
		$post_date = date_i18n('M j, Y', strtotime($post->post_date)); // Định dạng ngày thành Aug 21, 2024
		$excerpt = get_the_excerpt($post->ID);

		// Lấy danh sách danh mục của bài viết
		$categories = get_the_category($post->ID);
		$category_names = wp_list_pluck($categories, 'name'); // Chỉ lấy tên danh mục

		$response['posts'][] = array(
			'title'         => $title,
			'slug'          => $slug,
			'feature_image' => $feature_image,
			'excerpt'       => $excerpt,
			'date'          => $post_date,
			'categories'    => $category_names, // Thêm danh mục vào phản hồi
		);
	}

	return rest_ensure_response($response);
}


// API load more customer success
// API load more customer success
// API load more customer success
// API load more customer success

function post_customer_success_api_endpoint() {
	register_rest_route('okhub/v1', '/posts-customer-success', array(
		'methods'  => 'GET',
		'callback' => 'get_posts_customer_success',
	));
}
add_action('rest_api_init', 'post_customer_success_api_endpoint');

function get_posts_customer_success($data) {
	// Làm sạch các giá trị page và per_page
	$page = isset($data['page']) ? absint($data['page']) : 1;
	$per_page = isset($data['per_page']) ? absint($data['per_page']) : 9;
	$offset = ($page - 1) * $per_page;

	// Truy vấn bài viết
	$args = array(
		'post_type'      => 'post',
		'posts_per_page' => $per_page,
		'paged'          => $page,
		'offset'         => $offset,
		'orderby'        => 'date',
		'order'          => 'DESC',
	);
	$query = new WP_Query($args);

	// Kiểm tra có bài viết không
	if (!$query->have_posts()) {
		return new WP_Error('no_post_found', 'Không có bài viết hợp lệ', array('status' => 404));
	}

	$posts = $query->posts;
	$total_posts = $query->found_posts;
	$total_pages = ceil($total_posts / $args['posts_per_page']);

	$response = array(
		'total_posts'  => $total_posts,
		'current_page' => $args['paged'],
		'total_pages'  => $total_pages,
		'posts'        => array(),
	);

	// Vòng lặp để tạo phản hồi JSON cho mỗi bài viết
	foreach ($posts as $post) {
		$title = $post->post_title;
		$slug = get_the_permalink($post->ID);
		$feature_image = get_the_post_thumbnail_url($post->ID);
		$brand_name = get_field('brand_name',$post->ID);
		$logo = get_field('brand_logo',$post->ID);
		// Lấy danh sách danh mục của bài viết
		$categories = get_the_category($post->ID);
		$first_category_name = isset($categories[0]) ? $categories[0]->name : '';


		$response['posts'][] = array(
			'title'         => $title,
			'slug'          => $slug,
			'feature_image' => $feature_image,
			'categories'    => $first_category_name,
			'brand_name'	=> $brand_name,
			'logo'			=> $brand_logo
		);
	}

	return rest_ensure_response($response);
}


