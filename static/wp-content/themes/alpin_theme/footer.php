
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

    <?php get_template_part( 'template-parts/footer/site', 'info' ); ?>

    <div id="toTop" class="toTop-show">
        <i class="icon-back2top"></i>
    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>