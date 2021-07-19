<?php

/**
* Plugin Name: Inspirational Note Demo
* Description: A demo wordpress plugin by Neil McWilliam.
* Version: 1.0
* Author: Neil McWilliam 
* License: GPL-2.0+
* License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// PHP includes for install, setup-data and displaying quotes functions
require_once( plugin_dir_path( __FILE__ ) . 'includes/install.php' );
require_once( plugin_dir_path( __FILE__ ) . 'includes/setup-data.php' );
require_once( plugin_dir_path( __FILE__ ) . 'includes/display-quote.php' );
require_once( plugin_dir_path( __FILE__ ) . 'includes/enqueued_assets.php' );

// Activation hooks that run for the activation process
register_activation_hook( __FILE__, 'install' );
register_activation_hook( __FILE__, 'setup_data' );

// Load enqueued assets
add_action('wp_enqueue_scripts', 'my_enqueued_assets');

// Add the quote to the bottom of the Page Content
add_action( 'the_content', 'inspirational_note_content' );
