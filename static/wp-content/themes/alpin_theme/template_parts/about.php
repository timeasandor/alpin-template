<?php

/*
	Template Name:  Template About
*/
 ?>

<section id="about" class="main_pt50 main_pb50">
    <img src="<?php get_post_thumbnail( 'about-post-thumb' ); ?>" alt="">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-title"><?php single_post_title(); ?></div>
                <div class="text-content">

                    <?php the_content(); ?>
                    <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fringilla lorem a augue iaculis vestibulum. Sed vestibulum risus eu metus malesuada commodo. Donec laoreet justo ac turpis molestie quis aliquam est venenatis. Proin eu augue sem. Nulla rhoncus ornare ullamcorper. Etiam interdum, augue vitae venenatis sagittis, lorem eros molestie lectus, a elementum lacus nisl et metus. Aenean faucibus, orci eget congue sagittis, dolor nulla convallis sem, id sollicitudin nibh augue sit amet urna.</p>-->
                    <!--<p>Etiam interdum tortor a nisi ullamcorper vestibulum. Fusce euismod imperdiet odio, eget aliquam tellus consequat nec. Integer nulla nunc, dictum vel sagittis vitae, posuere vitae orci. Sed venenatis purus id eros fermentum ornare. Duis lacus sapien, semper vel tristique eget, vehicula ac eros. Pellentesque condimentum nulla ac urna elementum sed elementum massa luctus. Morbi ornare purus eu massa venenatis interdum. Nunc non ante purus. Ut vitae urna a ante porta aliquam eu at nunc.</p>-->
                </div>
            </div>
        </div>
    </div>
</section>