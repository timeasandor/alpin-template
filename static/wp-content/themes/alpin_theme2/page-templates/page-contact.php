<?php

/*
    Template Name: Contact
 */

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Page Contact Template
 *
 * @file page-contact.php
 */

$post = get_page_by_path('contacts', '', 'page');
$objPost = get_post(pll_get_post($post->ID));

get_header();
?>

<section class="section contact">
	<?php get_template_part( 'menu', '' );?>
	
	<div class="inner-wrapper">
		<div id="map"></div>
		<div class="container middle">
			<div class="row main_pt75 main_pb75">
				<div class="title">
					<i class="blicon-wallet"></i>
					<h1><?php echo $objPost->post_title; ?></h1>
				</div>
				<?php wpb_child_page($objPost->ID); ?>
				<div class="clear"></div>
			</div>
		</div>
		<script>
            function initMap() {
                var uluru = {lat: 45.764480, lng: 21.214600};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 16,
                    center: uluru,
                    mapTypeId: 'satellite'
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
            }
		</script>
		<script async defer
				src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYsxhkhe-gVDeehqme-BihX-wJiO19kxQ&callback=initMap">
		</script>
	</div>
</section>

<?php
get_footer();