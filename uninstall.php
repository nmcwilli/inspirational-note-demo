<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * @package   Inspirational Note Demo 
 * @author    Neil McWilliam
 */

// If uninstall not called from WordPress, then exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// Define global vars
global $wpdb;

// Define the table name to remove
$table_name = $wpdb->prefix . 'inspirationalnote';

// Drop the table if it exists
$sql = "DROP TABLE IF EXISTS $table_name";
$wpdb->query($sql);
