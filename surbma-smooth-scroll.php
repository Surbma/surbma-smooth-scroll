<?php

/*
Plugin Name: Surbma - Smooth Scroll
Plugin URI: http://surbma.com/wordpress-plugins/
Description: A very simple and lightweight smooth scroll plugin.

Version: 1.0.2

Author: Surbma
Author URI: http://surbma.com/

License: GPLv2

Text Domain: surbma-smooth-scroll
Domain Path: /languages/
*/

// Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) exit( 'Good try! :)' );

// Localization
function surbma_smooth_scroll_init() {
	load_plugin_textdomain( 'surbma-smooth-scroll', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );
}
add_action( 'plugins_loaded', 'surbma_smooth_scroll_init' );

function surbma_smooth_scroll_enqueue_scripts() {
	wp_enqueue_script( 'surbma-smooth-scroll', plugins_url( '', __FILE__ ) . '/js/surbma-smooth-scroll.js', array( 'jquery' ), '1.0.2' );
	wp_enqueue_script( 'surbma-scrollTo', plugins_url( '', __FILE__ ) . '/js/jquery.scrollTo.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'surbma-localScroll', plugins_url( '', __FILE__ ) . '/js/jquery.localScroll.min.js', array( 'surbma-scrollTo' ), '2.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'surbma_smooth_scroll_enqueue_scripts' );
