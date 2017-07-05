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
?>

<?php echo get_the_post_thumbnail($objPost);?>
<div id="site-header-main">
    <div class="container">
        <div class="row">
            <div class="navbar">
                <div class="logo col-md-3 col-sm-2 col-xs-6">
                    <a href="/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/narlukada_logo.png" alt="">
                    </a>
                </div>
                <div class="menu-desktop col-md-7 col-sm-8">

                    <?php wp_nav_menu(array(
                        'theme_location' => 'section-menu', 
                    )); ?>
                    <div class="clear"></div>

                </div>

                <div id="mobile-menu">
                    <span id="nav-cancel">
                        <i class="icon-cancel"></i>
                    </span>
                    <div class="menu-mob">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'section-menu',
                        )); ?>

                        <?php wp_nav_menu(array(
                            'theme_location' => 'social-menu',
                            'items_wrap'     => '<nav id="sheader" class="socials">%3$s<div class="clear"></div></nav>',
                            'walker'         => new Alpin_Social_Menu_Walker(),
                            )); ?>
                    </div>
                </div>

                <a id="nav-toggle">
                    <span>
                        &nbsp;
                    </span>
                </a>

                <?php wp_nav_menu(array(
                    'theme_location' => 'social-menu', 
                    'items_wrap'     => '<nav id="sheader" class="socials col-sm-2 hidden-xs">%3$s<div class="clear"></div></nav>',
                    'walker'         => new Alpin_Social_Menu_Walker(), 
                )); ?>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<div class="intro-text">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Alpinism Utilitar</h1>
                <p>
                    &ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet semper dolor.&rdquo;
                </p>
                <!--<?php echo $objPost->post_content; ?>-->
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>