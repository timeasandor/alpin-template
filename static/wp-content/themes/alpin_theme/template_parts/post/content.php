<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Content Template
 *
 * @file content.php
 */
get_header(); ?>

<?php wp_nav_menu(array(
    'theme_location' => 'section-menu',
)); ?>

<?php the_content();