<?php

/*
    Template Name: Contact
 */

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Page Contact Template
 *
 * @file page-contact.php
 */

$post = get_page_by_path('contact', '', 'page');
$objPost = get_post(pll_get_post($post->ID));
?>


<?php wpb_child_page($objPost->ID);