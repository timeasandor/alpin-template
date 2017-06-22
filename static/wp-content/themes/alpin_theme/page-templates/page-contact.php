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

$post = get_page_by_path('contact', '', 'page');
$objPost = get_post(pll_get_post($post->ID));
?>

<!--<div id="map">-->
    <!--<a href="https://www.google.ro/maps/place/Aleea+Martir+Ioan+V.+Avram,+Timi%C8%99oara+300377/@45.7647017,21.2118277,17z/data=!3m1!4b1!4m5!3m4!1s0x4745678e91c7068b:0x8b73ff8f349895ab!8m2!3d45.7647017!4d21.2140164" target="_blank">-->
        <!--<?php echo get_the_post_thumbnail();?>-->
    <!--</a>-->
<!--</div>-->
<div id="map" style="width:100%;height:400px">
    <script>
        function initMap() {
            var uluru = {lat: 45.764702, lng: 21.214016};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 4,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBal1rtOkwnk2kX-oK93ISesbp7f-AilT4&callback=initMap">
    </script>

<?php wpb_child_page($objPost->ID);