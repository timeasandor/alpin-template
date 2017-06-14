<?php
/*
	Template Name: Template Home
*/
 get_header(); ?>

<section id="home">
    <img src="<?php echo get_the_post_thumbnail();?>" alt="">
    <div id="site-header-main">
        <div class="container">
            <div class="row">
                <div class="navbar">
                    <div class="logo col-md-3 col-xs-6">
                        <a href="/">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/narlukada_logo.png" alt="">
                        </a>
                    </div>
                    <div class="menu-desktop col-md-7">

                        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

                    </div>

                    <div id="mobile-menu">
                        <span id="nav-cancel">
                            <i class="icon-cancel"></i>
                        </span>
                        <div class="menu-mob">
                            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                        </div>
                    </div>

                    <a id="nav-toggle">
                        <span>
                            &nbsp;
                        </span>
                    </a>
                    
                    <nav id="sheader" class="socials col-md-2 col-xs-5">
                        <a target="_blank" href="http://www.facebook.com/profile" class="" title="Facebook"><span></span></a>
                        <a target="_blank" href="http://www.twitter.com/profile" class="" title="Twitter"><span></span></a>
                        <a target="_blank" href="http://plus.google.com/profile" class="" title="Google Plus"><span></span></a>
                        <div class="clear"></div>
                    </nav>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-text">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Narlukada Alpin Intro</h1>
                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                </div>
            </div>
        </div>
    </div>
</section>