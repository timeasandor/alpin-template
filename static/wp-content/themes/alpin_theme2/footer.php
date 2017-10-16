<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Footer Template
 *
 * @file footer.php
 * 
 */
?>
        <footer>

            <div class="page-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-xs-12">
                            <div class="logo-small">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/narlukada_logo_white.png" alt="">
                                <span>&copy;2017 <?php bloginfo('name'); ?>. <?php echo getCopyrightText(); ?></span>
                            </div>
                        </div>
                        <div class="col-sm-3 hidden-xs">
                            <?php wp_nav_menu(array(
                            'theme_location' => 'social-menu',
                            'items_wrap'     => '<nav class="socials">%3$s<div class="clear"></div></nav>',
                            'walker'         => new Alpin_Social_Menu_Walker(),
                            )); ?>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>

            <div id="toTop" class="toTop-show">
                <i class="icon-back2top"></i>
            </div>

        </footer>

        <?php wp_footer(); ?>

		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/app.min.js"></script>

    </body>
</html>