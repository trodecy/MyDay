<?php

require_once( 'functions.php' );

$new_order = $_POST[ 'order' ]; 
$functions = new Functions;

# We have data
if ( $new_order ) {

	# It has to be an array
	if ( is_array( $new_order ) ) {

		foreach ( $new_order as $single_row ) {

			$index 	= $single_row[ 'index' ];
			$id 	= $single_row[ 'id' ];

			// echo 'index: ' . $index . ' id: ' . $id . '/n'; 
			$functions->updateTaskPriority( $id, $index );
		}
	}
	else
		echo 'It is not an array, how the hell did this happen?';

}

# We have nothing
else
	header( 'HTTP/1.0 404 Not Found' );