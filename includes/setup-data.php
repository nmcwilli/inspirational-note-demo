<?php 

// Setup the initial data in the WordPress db

function setup_data() {
	
	global $wpdb;
	
	// Define some inspirational notes 
	$note_title_1 = 'William James';
	$note_text_1 = 'Act as if what you do makes a difference. IT DOES!';

	$note_title_2 = 'Winston Churchill';
	$note_text_2 = 'Success is not final, failure is not fatal: it is the COURAGE TO CONTINUE that counts.';

	$note_title_3 = 'Helen Keller';
	$note_text_3 = 'Never bend your head. Always hold it high. Look the world straight in the eye.';

	$note_title_4 = 'Zig Ziglar';
	$note_text_4 = 'What you get by achieving your goals is not as important as what you become by achieving your goals.';

	$note_title_5 = 'Theodore Roosevelt';
	$note_text_5 = 'Believe you can and you are halfway there.';
	
	// Set the table name with WordPress prefix
	$table_name = $wpdb->prefix . 'inspirationalnote';
	
	// Insert the data into the table 
	$wpdb->insert( 
		$table_name, 
		array( 
			'noteTitle' => $note_title_1, 
			'noteText' => $note_text_1, 
		) 
	);
	$wpdb->insert( 
		$table_name, 
		array( 
			'noteTitle' => $note_title_2, 
			'noteText' => $note_text_2, 
		) 
	);
	$wpdb->insert( 
		$table_name, 
		array( 
			'noteTitle' => $note_title_3, 
			'noteText' => $note_text_3, 
		) 
	);
	$wpdb->insert( 
		$table_name, 
		array( 
			'noteTitle' => $note_title_4, 
			'noteText' => $note_text_4, 
		) 
	);
	$wpdb->insert( 
		$table_name, 
		array( 
			'noteTitle' => $note_title_5, 
			'noteText' => $note_text_5, 
		) 
	);
}
