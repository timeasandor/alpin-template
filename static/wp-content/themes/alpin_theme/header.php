<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Narlukada Alpin</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <?php wp_head(); ?>
</head>
    <?php
        if( is_front_page() ):
            $awesome_classes = array( 'home' );
        else:
            $awesome_classes = array( 'no-home' );
        endif;
    ?>
    <body <?php body_class( $awesome_classes ); ?>>