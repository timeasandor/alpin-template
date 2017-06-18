<?php

/*
    Template Name: One Page
 */

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * One Page Template
 *
 * @file page.php
 */

get_header();

wpb_pages();

get_footer();