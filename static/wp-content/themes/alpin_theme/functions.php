<?php

function awesome_script_enqueue() {

	wp_enqueue_style('customstyle', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/js/vendor.min.js', array(), '1.0.0', true);
	wp_enqueue_script('customjss', get_template_directory_uri() . '/assets/js/app.min.js', array(), '1.0.0', true);

}

add_action( 'wp_enqueue_scripts', 'awesome_script_enqueue');

function awesome_theme_setup() {

	add_theme_support('menus');
	add_theme_support( 'post-thumbnails' );

	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');

}

add_action('init', 'awesome_theme_setup');

function wpb_pages() {
    $childArgs = array(
        'child_of'     => 0,
        'sort_order'   => 'ASC',
        'sort_column'  => 'menu_order', 
        'parent'       => -1, 
        'post_type'    => 'page',
        'post_status'  => 'publish',
    );
    $list = get_pages($childArgs);
    foreach ($list as $page) {
        echo '<section id="'.$page->post_name.'" class="section">';
        echo $page->post_title;
        echo apply_filters( 'the_content', $page->post_content);
        echo '</section>';
    }
}
add_action('wpb_pages', 'wpb_pages');