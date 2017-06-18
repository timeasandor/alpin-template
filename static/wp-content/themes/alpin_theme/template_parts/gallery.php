<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template Name: Template Gallery
 *
 * @file gallery.php
 */

?>

<section id="gallery" class="main_pb50 main_pt50">

<?php
$args = array( 'post_type' => 'gallery', 'posts_per_page' => 10 );
$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) : ?>

        <div class="lp-boxes lp-boxes-2 lp-boxes-animated lp-boxes-rows-4">
            <div class="lp-boxes-padding">
                <?php
                $i = 1;
                while ( $the_query->have_posts() ) : $the_query->the_post();
                if (has_post_thumbnail( $the_query->ID ) ):
                //                        $image = wp_get_attachment_image_src(get_post_thumbnail_id($the_query->ID));
                //$image = the_post_thumbnail('gallery-single-thumb');
                ?>

                <div class="lp-box box<?php echo $i; ?> ">
                    <div class="lp-box-image lpbox-rnd8">
                        <img alt="<?php the_title(); ?>" src="<?php the_post_thumbnail('gallery-single-thumb'); ?>">
                        <a class="lp-box-link" href="#"><i class="icon-arrow-right2"></i></a>
                        <div class="lp-box-overlay"></div>
                    </div>
                    <div class="lp-box-content">
                        <h5 class="lp-box-title"><?php the_title(); ?></h5>
                        <div class="lp-box-text">
                            <div class="lp-box-text-inside"><?php the_content(); ?></div>
                        </div>
                    </div>
                </div><!-- lp-box -->
                <?php
                        $i++;
                    endif;
                endwhile;
            ?>
            </div>
        </div><!-- .lp-boxes -->


<?php
else:
    echo 'no gallery items';
endif;
        ?>

</section>