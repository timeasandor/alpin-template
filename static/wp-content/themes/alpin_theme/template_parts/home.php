<?php
/*
	Template Name: Template Home
*/
 get_header(); ?>

<section id="home">
    <div id="site-header-main">
        <div class="container">
            <div class="row">
                <div class="navbar">
                    <div class="logo col-sm-5">
                        <a href="/">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg" alt="">
                        </a>
                    </div>
                    <div class="menu col-sm-5">

                        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

                    </div>
                    <nav id="sheader" class="socials col-sm-2">
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
        <h1>Narlukada Alpin Intro</h1>
        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
    </div>
</section>