<?php

/*
    Template Name: Form
 */

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Page form Template
 *
 * @file page-form.php
 */

$post = get_page_by_path('contact/form', '', 'page');
$objPost = get_post(pll_get_post($post->ID));
?>

<?php echo /*$objPost->post_content*/do_shortcode(get_post_field('post_content', $objPost->ID));