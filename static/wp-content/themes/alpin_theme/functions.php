<?php

function awesome_script_enqueue() {

	wp_enqueue_style('customstyle', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/js/vendor.min.js', array(), '1.0.0', true);
	wp_enqueue_script('customjss', get_template_directory_uri() . '/assets/js/app.min.js', array(), '1.0.0', true);

}

add_action( 'wp_enqueue_scripts', 'awesome_script_enqueue');

$core_path = get_template_directory().'/core/';
require_once($core_path.'classes/class_menu.php');

/**
 * Alpin theme functions and definitions
 */
if ( ! function_exists( 'alpintheme_setup' ) ) :
    function alpintheme_setup() {
        /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
* provide it for us.
*/
    add_theme_support( 'title-tag' );

// This theme uses wp_nav_menu()
    register_nav_menus( array(
        'section-menu'   => __( 'Section menu', 'alpin_theme' ),
        'social-menu'    => __('Social menu', 'alpin_theme'),
    ) );
}
    endif;
add_action( 'after_setup_theme', 'alpintheme_setup' );

// from Cristina

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
            if (!in_array($page->post_name, array('contact', 'address', 'form'))) {
            echo '<section id="'.$page->post_name.'" class="section">';
                echo get_template_part('page-templates/page', $page->post_name);
                echo '</section>';
            }
        }
    }

add_action('wpb_pages', 'wpb_pages');


// add theme support for thumbnails
    if ( function_exists( 'add_theme_support')){
        add_theme_support( 'post-thumbnails' );
    }

add_image_size( 'admin-list-thumb', 80, 80, true); //admin thumbnail
add_image_size('gallery-single-thumb', 480, 400, true);
add_image_size('home-post-thumb', 1920, 1080, true);
add_image_size('about-post-thumb', 1920, 1080, true);


// register and add labels for gallery custom post type
    $gallery_labels = array(
    'name' => _x('Gallery', 'post type general name'),
    'singular_name' => _x('Gallery', 'post type singular name'),
    'add_new' => _x('Add New', 'gallery'),
    'add_new_item' => __("Add New Gallery"),
    'edit_item' => __("Edit Gallery"),
    'new_item' => __("New Gallery"),
    'view_item' => __("View Gallery"),
    'search_items' => __("Search Gallery"),
    'not_found' =>  __('No galleries found'),
    'not_found_in_trash' => __('No galleries found in Trash'),
    'parent_item_colon' => ''

    );
    $gallery_args = array(
        'labels' => $gallery_labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'capability_type' => 'post',
        'supports' => array('title', 'excerpt', 'editor', 'thumbnail'),
        'menu_icon' => get_bloginfo('template_directory') . '/assets/images/photo-gallery.png'
    );
register_post_type('gallery', $gallery_args);

// add custom columns
add_action('manage_posts_custom_column', 'jss_custom_columns');
add_filter('manage_edit-gallery_columns', 'jss_add_new_gallery_columns');

    function jss_add_new_gallery_columns( $columns ){
        $columns = array(
        'cb'                => '<input type="checkbox">',
        'jss_post_thumb'    => 'Thumbnail',
        'title'             => 'Photo Title',
        'author'            => 'Author',
        'date'              => 'Date'

        );
        return $columns;
    }

    function jss_custom_columns( $column ){
    global $post;

        switch ($column) {
        case 'jss_post_thumb' : echo the_post_thumbnail('admin-list-thumb'); break;
        case 'description' : the_excerpt(); break;
        }
    }

//add thumbnail images to column
add_filter('manage_posts_columns', 'jss_add_post_thumbnail_column', 5);
add_filter('manage_pages_columns', 'jss_add_post_thumbnail_column', 5);
add_filter('manage_custom_post_columns', 'jss_add_post_thumbnail_column', 5);

// Add the column
    function jss_add_post_thumbnail_column($cols){
        $cols['jss_post_thumb'] = __('Thumbnail');
        return $cols;
    }


// register and add labels for service custom post type
    $service_labels = array(
        'name' => _x('Service', 'post type general name'),
        'singular_name' => _x('Service', 'post type singular name'),
        'add_new' => _x('Add New', 'service'),
        'add_new_item' => __("Add New Service"),
        'edit_item' => __("Edit Service"),
        'new_item' => __("New Service"),
        'view_item' => __("View Service"),
        'search_items' => __("Search Service"),
        'not_found' =>  __('No services found'),
        'not_found_in_trash' => __('No services found in Trash'),
        'parent_item_colon' => ''

    );
    $service_args = array(
        'labels' => $service_labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'capability_type' => 'post',
        'supports' => array('title', 'excerpt', 'editor', 'thumbnail', 'page-attributes'),
        'menu_icon' => get_bloginfo('template_directory') . '/assets/images/service.png'
    );
register_post_type('service', $service_args);

/**
* add order column to admin listing screen for header text
*/
    function add_new_service_column($service_columns) {
        $service_columns['menu_order'] = "Order";
        return $service_columns;
    }
add_action('manage_edit-service_columns', 'add_new_service_column');

/**
* show custom order column values
*/
function show_order_column($name){
global $post;

    switch ($name) {
        case 'menu_order':
        $order = $post->menu_order;
        echo $order;
        break;
        default:
        break;
    }
}
add_action('manage_service_posts_custom_column','show_order_column');

/**
* make column sortable
*/
    function order_column_register_sortable($columns){
        $columns['menu_order'] = 'menu_order';
        return $columns;
    }
add_filter('manage_edit-service_sortable_columns','order_column_register_sortable');