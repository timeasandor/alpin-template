<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Narlukada Alpin Theme</title>
		<?php wp_head(); ?>
	</head>
	
	<?php 

		if( is_front_page() ):
			$awesome_classes = array( 'alpin', 'my-class' );
		else:
			$awesome_classes = array( 'no-home-class' );
		endif;
		
	?>
	
	<body <?php body_class( $awesome_classes ); ?> >

		
		<?php wp_nav_menu(array('theme_location'=>'primary')); ?>