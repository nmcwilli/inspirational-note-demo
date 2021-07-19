<?php 
// Query for a random inspirational note to display on the page
function inspirational_note_content ( $content ) {

	// Set global vars
	global $wpdb;

	// Generate random number between 1 to 5 
	$randNum = rand(1,5); // There are currently only 5 quotes

	// Set table Name
	$tableName = $wpdb->prefix.'inspirationalnote';

	// Query the database 
	foreach( $wpdb->get_results("SELECT * FROM $tableName WHERE id = '$randNum' LIMIT 1") as $key => $row){
		$displayQuote = $row->noteTitle.': '.$row->noteText;
	}

	// Return the quote content for display
	return $content .= "<div class='quoteContent'>".$displayQuote."</div>"; 
}
