<?php

/*
    Template Name: Address
 */

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Page Address Template
 *
 * @file page-address.php
 */

$post = get_page_by_path('contact/address', '', 'page');
$objPost = get_post(pll_get_post($post->ID));
?>

<div>
    <?php echo $objPost->post_content; ?>
</div>