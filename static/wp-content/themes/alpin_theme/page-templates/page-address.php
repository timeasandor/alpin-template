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
        <div class="content">
            <ul>
                <li>
                    <i></i><?php echo nl2br($objPost->post_content); ?>
                </li>
                <!--<i class="blicon-location"></i>-->
                    <!--<i class="blicon-phone"></i>-->
                    <!--<i class="blicon-mail"></i>-->
            </ul>
        </div>
    </div>
</div>