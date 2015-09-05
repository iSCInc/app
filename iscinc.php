<?php

// This is from google translate, just return early.
if ( $_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
	header ( "HTTP/1.1 200", true, 200);
	return;
}

// prevent $_GET['title'] from being overwritten on API calls (BAC-906)
define('DONT_INTERPOLATE_TITLE', true);

// Initialise common MW code
require ( dirname( __FILE__ ) . '/includes/WebStart.php' );

