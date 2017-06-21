<?php

/*
	Template Name: Template One Pager
*/

get_header(); ?>

<?php

	if( have_posts() ):

		while( have_posts() ): the_post(); ?>

<?php get_template_part('template_parts/home'); ?>

<?php get_template_part('template_parts/about'); ?>

<?php get_template_part('template_parts/services'); ?>

<?php get_template_part('template_parts/gallery'); ?>

<?php get_template_part('template_parts/contact'); ?>

<?php endwhile;

	endif;

	?>

<?php get_footer(); ?>