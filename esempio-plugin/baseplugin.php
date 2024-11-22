<?php
/*
 * Plugin Name:       Baseplugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Giuseppe Caputo
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       mbp
 * Domain Path:       /languages
 */

  if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function mbp_banner() {
 	
	echo '<a href="https://www.example.com" class="mbp-banner" id="banner">Contattami!!!</a>';	
}
add_action( 'wp_body_open', 'mbp_banner' );

function mbp_plugin_style_scripts() {
	wp_enqueue_style( 'mbp-style', plugins_url('/assets/css/style.css',__FILE__));
	wp_enqueue_script( 'mbp-script', plugins_url('/assets/js/script.js',__FILE__), array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'mbp_plugin_style_scripts' );

?> 
