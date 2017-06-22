<?php

/*
    Template Name: Service
 */

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Page Service Template
 *
 * @file page-service.php
 */

$post = get_page_by_path('service', '', 'page');
$objPost = get_post(pll_get_post($post->ID));
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="text-title main_pt30 main_pb30"><?php echo $objPost->post_title; ?></div>
        </div>

        <?php
            $args = array( 'post_type' => 'service', 'order' => 'ASC', 'orderby'  => 'menu_order', 'posts_per_page' => 3 );
            $the_query = new WP_Query( $args );

            if ( $the_query->have_posts() ) : 
                $icons = array(
                    'blicon-layers',
                    'blicon-grid',
                    'blicon-news',
                );
                
                $i = 0;
                while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <div class="col-xs-12 col-sm-4">
                        <div class="lp-block">
                            <i class="<?php echo $icons[$i]; ?>"></i>
                            <div class="lp-block-content">
                                <h5 class="lp-block-title"><?php the_title(); ?></h5>
                                <div class="lp-block-text"><?php the_content(); ?></div>
                            </div>
                        </div>
                    </div><!-- lp-block -->
                    
                <?php $i++;
                endwhile;
            endif;
        ?>

        <div class="col-xs-12">
            <div class="text-title main_pt30 main_pb30"><?php echo $objPost->post_title; ?></div>
        </div>

        <div class="clear"></div>
    </div>
</div>