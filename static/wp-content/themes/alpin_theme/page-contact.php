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

<div id="map">
    <a href="https://www.google.ro/maps/place/Aleea+Martir+Ioan+V.+Avram,+Timi%C8%99oara+300377/@45.7647017,21.2118277,17z/data=!3m1!4b1!4m5!3m4!1s0x4745678e91c7068b:0x8b73ff8f349895ab!8m2!3d45.7647017!4d21.2140164" target="_blank">
        <?php echo get_the_post_thumbnail();?>
    </a>
</div>

<div>
    Narcis Alexe
    str. Timisoarei, nr. 1
    Timisoara, jud. Timis
    Romania
</div>

<?php echo /*$objPost->post_content*/do_shortcode(get_post_field('post_content', $objPost->ID));