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


<div class="inner-wrapper main_pt100 main_pb75">
    <div class="container">
        <div class="row">
            <?php wpb_child_page($objPost->ID); ?>
            <div class="clear"></div>
        </div>
    </div>
</div>