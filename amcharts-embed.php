<?php
/*
Plugin Name: amCharts Embed
Plugin URI:  https://wordpress.org/plugins/amcharts-embed/
Description: Embed interactive charts and maps from amCharts.com into your WordPress site
Version:     1.0
Author:      Rami Yushuvaev
Author URI:  http://GenerateWP.com/
Text Domain: amcharts-embed
Domain Path: /languages
*/



/*
 * Prevent direct access to the file
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/*
 * Register oEmbed provider
 */
function amcharts_oembed_provider() {

	wp_oembed_add_provider( '#https?://live.amcharts.com/.*#i', 'http://live.amcharts.com/oembed/', true );

}
add_action( 'init', 'amcharts_oembed_provider' );
