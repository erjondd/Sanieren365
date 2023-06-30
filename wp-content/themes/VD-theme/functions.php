<?php

add_action('wp_enqueue_scripts', 'vitaminad_scripts');
function vitaminad_scripts()
{
    wp_enqueue_style('vitaminad-style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_script('vitaminad-js', get_template_directory_uri() . '/js/bundle.js', '', '', true);
}


/*enable svg upload*/
function add_svg_to_upload_mimes($upload_mimes)
{
    $upload_mimes['svg'] = 'image/svg+xml';
    $upload_mimes['svgz'] = 'image/svg+xml';
    return $upload_mimes;
}

add_filter('upload_mimes', 'add_svg_to_upload_mimes', 10, 1);


//Menu

register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
));


//Add options page
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

}



// Blog

add_action('init', 'register_blog_post');
function register_blog_post()
{
	$labels = array(
		'name' => _x('Blog', 'blog_post'),
		'singular_name' => _x('Blog', 'blog_post'),
		'add_new' => _x('Add New', 'blog_post'),
		'add_new_item' => _x('Add New blog', 'blog_post'),
		'edit_item' => _x('Edit blog', 'blog_post'),
		'new_item' => _x('New blog', 'blog_post'),
		'view_item' => _x('View blog', 'blog_post'),
		'search_items' => _x('Search blog', 'blog_post'),
		'not_found' => _x('No blog found', 'blog_post'),
		'not_found_in_trash' => _x('No blog found in Trash', 'blog_post'),
		'menu_name' => _x('Blog', 'blog_post'),
	);
	$args = array(
		'labels' => $labels,
		'supports' => array('title', 'page-attributes'),
		 'taxonomies' => array('blog-categories'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_icon' => 'dashicons-businessperson',
		'show_in_nav_menus' => true,
		'show_in_rest'       => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'hierarchical' => true,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => array('slug' => 'myblog'),
		'capability_type' => 'post',
		'taxonomies' => array('category'),
	);

	register_post_type('blog_post', $args);
	flush_rewrite_rules();
}






