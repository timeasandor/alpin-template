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

$post = get_page_by_path('contacts', '', 'page');
$objPost = get_post(pll_get_post($post->ID));

get_header();
?>

<section class="section contact">
	<?php get_template_part( 'menu', '' );?>
	
	<div class="inner-wrapper">
		<div class="container middle">
			<div class="row main_pt100 main_pb75">
				<div class="title">
					<i class="blicon-wallet"></i>
					<h1><?php echo $objPost->post_title; ?></h1>
				</div>
				<?php wpb_child_page($objPost->ID); ?>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();