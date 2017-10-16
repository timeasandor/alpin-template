<div id="site-header-main">
	<div class="container">
		<div class="row">
			<div class="navbar navbar-fixed-top" role="navigation">
				<div class="logo col-sm-2 col-xs-6">
					<a href="/">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/narlukada_logo.png" alt="">
					</a>
				</div>
				<div class="menu-desktop col-sm-8">

					<?php wp_nav_menu(array(
						'theme_location' => 'section-menu-2', 
					)); ?>
					<div class="clear"></div>

				</div>

				<div id="mobile-menu">
					<span id="nav-cancel">
						<i class="icon-cancel"></i>
					</span>
					<div class="menu-mob">
						<?php wp_nav_menu(array(
							'theme_location' => 'section-menu-2',
						)); ?>

						<?php wp_nav_menu(array(
							'theme_location' => 'social-menu',
							'items_wrap'     => '<nav class="socials">%3$s<div class="clear"></div></nav>',
							'walker'         => new Alpin_Social_Menu_Walker(),
							)); ?>
					</div>
				</div>

				<a id="nav-toggle">
					<span>

					</span>
				</a>

				<?php wp_nav_menu(array(
					'theme_location' => 'social-menu', 
					'items_wrap'     => '<nav class="socials col-sm-2 hidden-xs">%3$s<div class="clear"></div></nav>',
					'walker'         => new Alpin_Social_Menu_Walker(), 
				)); ?>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>