<?php

// Install plugin script

global $jal_db_version;
$jal_db_version = '1.0';

function install() {
	
	global $wpdb;
	global $jal_db_version;

	$table_name = $wpdb->prefix . 'inspirationalnote';
	
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $table_name (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		noteTitle tinytext NOT NULL,
		noteText text NOT NULL,
		PRIMARY KEY (id)
	) $charset_collate;"; 

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );

	add_option( 'jal_db_version', $jal_db_version );
}
