<?php

/*
    Template Name: Home
 */

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Page Home Template
 *
 * @file page-home.php
 */

$post = get_page_by_path('home', '', 'page');
$objPost = get_post(pll_get_post($post->ID));

get_header();
?>

<section class="section home">
	<?php echo get_the_post_thumbnail($objPost, null, array('class'=>'bgImg'));?>
	<?php get_template_part( 'menu', '' );?>
	
	<div class="intro-text">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/narlukada_logo_white.png" alt="">
					<h1><?php echo $objPost->post_title; ?></h1>
					<p>
						<?php echo $objPost->post_content; ?>
					</p>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
</section>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/app.min.js"></script>