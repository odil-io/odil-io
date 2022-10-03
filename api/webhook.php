<?php
// Recieve

if ( $_REQUEST ) {
	var_export( $_REQUEST );

	$file    = __DIR__ . '/status.json';
	$request = json_encode( $_REQUEST );
	file_put_contents( $file, $content, FILE_APPEND | LOCK_EX );

	if ( file_exists( $file ) ) {
		echo 'Does exist.';
	} else {
		echo 'Does not exist.';
	}
}

// Authenticate
	// x-hub-signature-256
	// echo hash( 'sha1', $_SERVER['HTTP_GITHUB_WEBHOOK_KEY'] );
	// echo '<hr/>';
	// echo hash( 'sha256', $_SERVER['HTTP_GITHUB_WEBHOOK_KEY'] );
	// echo '<hr/>';
	// echo hash( 'sha256', 'A3EFBC22D223F9A4AE6D45CBF77AA' );


// Verify

// Store

// Status

// Exit
?>