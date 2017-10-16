<?php

/*
    Template Name: Service
 */

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Page Service Template
 *
 * @file page-service.php
 */

$post = get_page_by_path('services', '', 'page');
$objPost = get_post(pll_get_post($post->ID));

get_header();
?>

<section class="section service">
	<?php get_template_part( 'menu', '' );?>
	<div class="block-picture">
		<?php echo get_the_post_thumbnail($objPost);?>
	</div>
	
	<div class="container middle">
		<div class="row">
			<div class="col-xs-12">
				<div class="lp-block main_pt100 main_pb75">
					<i class="blicon-layers"></i>
					<h1><?php echo $objPost->post_title; ?></h1>
					<div class="lp-block-content">
						<div class="lp-block-text"><?php echo $objPost->post_content; ?></div>
					</div>
				</div>
			</div><!-- lp-block -->
			<div class="clear"></div>
		</div>
	</div>
</section>

<?php
get_footer();