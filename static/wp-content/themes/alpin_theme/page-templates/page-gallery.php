<?php

/*
    Template Name: Gallery
 */

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Page Gallery Template
 *
 * @file page-gallery.php
 */

?>


<?php
$args = array( 'post_type' => 'gallery', 'order' => 'ASC', 'orderby'  => 'menu_order', 'posts_per_page' => 9 );
$the_query = new WP_Query( $args );



if ( $the_query->have_posts() ) : ?>

<div class="title main_pt100 main_pb30">
    <i class="blicon-camera"></i>
    <h1><?php the_title(); ?></h1>
</div>

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
                                <?php the_post_thumbnail('gallery-single-thumb'); ?>
                                <div class="lp-box-overlay"></div>
                            </div>
                            <div class="lp-box-content">
                                <h5 class="lp-box-title"><?php the_title(); ?></h5>
                                <div class="lp-box-text">
                                    <div class="lp-box-text-inside">
                                        <?php the_content(); ?>
                                    </div>
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