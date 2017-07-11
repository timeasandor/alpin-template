<?php

/*
    Template Name: About
 */

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Page About Template
 *
 * @file page-about.php
 */

$post = get_page_by_path('about', '', 'page');
$objPost = get_post(pll_get_post($post->ID));
?>

<?php echo get_the_post_thumbnail($objPost);?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 content main_pt100 main_pb75">
            <!--<h2 class="text-title"><?php echo $objPost->post_title; ?></h2>-->
            <div class="text-content">
                <?php echo nl2br($objPost->post_content); ?>
            </div>
        </div>
    </div>
</div>