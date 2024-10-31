<?php
/*
Plugin Name: Pixel Random Quotes and Images
Version: 1.0
Plugin URI: http://belicza.com/wordpress/random-quotes-and-images-pixel-plugin/
Description: A widget with custom quotes and custom images. They are displayed in Widget at random. It is a translated plugin. You can upload/delete/modify your images and quotes.
Author: david belicza
Author URI: http://belicza.com/
Text Domain: quote-pixel
*/
$pixel_quote_version = '1.0';
add_action( 'admin_init' , 'regsz' );
function regsz(){
	load_plugin_textdomain( 'quote-pixel', false, '/quote-pixel/languages/' );
}

wp_enqueue_style("pixelquote_user_style", plugins_url( 'quote-pixel/style.css' , dirname(__FILE__) ), false, "1.0", "all");  

function pixel_get_options(){
	return get_option('pixelquotes_settings');
}
$pixelquotes = pixel_get_options();

require_once( ABSPATH . 'wp-content/plugins/quote-pixel/widgets.php' );


require_once( ABSPATH . 'wp-content/plugins/quote-pixel/admin.php' );
?>