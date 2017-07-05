<?php
/**
 * The main template file
 */

get_header();

if (is_user_logged_in()) {
    wpb_pages();
}
else {
    ?>
    <div id="content">

        <h1 style="margin: auto; margin-top: 200px; text-align: center;">Pagina in constructie</h1>

    </div><!-- end of #content -->
    <?php
}

get_footer();