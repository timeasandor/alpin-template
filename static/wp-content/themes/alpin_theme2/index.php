<?php
/**
 * The main template file
 */

//if (is_user_logged_in()):
	get_header();

		/*if ( have_posts() ) :
			
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', get_post_format() );
			endwhile;
			
		else :
			
			get_template_part( 'template-parts/content', 'none' );
			
		endif;*/

	get_footer();
/*else:
    ?>
    <div id="content">

        <h1 style="margin: auto; margin-top: 200px; text-align: center;">Pagina in constructie</h1>

    </div><!-- end of #content -->
    <?php
endif;*/