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

<div class="col-sm-6 col-xs-12 fright">
    <div class="adr_wrap">
        <div class="title">
            <?php the_title(); ?>
        </div>
        <div class="content">
            <?php echo nl2br($objPost->post_content); ?>
        </div>
    </div>
</div>