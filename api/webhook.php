<?php
// Recieve

if ( $_REQUEST && array_key_exists( 'payload', $_REQUEST ) ) {
	$file    = __DIR__ . '/payload.json';
	$request = $_REQUEST['payload'];
	file_put_contents( $file, $request, FILE_APPEND );
}

// Authenticate
	// x-hub-signature-256
	// echo hash( 'sha1', $_SERVER['HTTP_GITHUB_WEBHOOK_KEY'] );
	// echo '<hr/>';
	// echo hash( 'sha256', $_SERVER['HTTP_GITHUB_WEBHOOK_KEY'] );
	// echo '<hr/>';
	// echo hash( 'sha256', 'A3EFBC22D223F9A4AE6D45CBF77AA' );

	// ["CONTENT_TYPE"]=>
	// string(33) "application/x-www-form-urlencoded"
	// ["HTTP_X_HUB_SIGNATURE_256"]=>
	// string(71) "sha256=bd256e5813530e92ddeeefff5044fc53e8ad7df53c76f4cbcfd50bcc1c81410e"
	// ["HTTP_X_HUB_SIGNATURE"]=>
	// string(45) "sha1=3b1da9c4810e5d4f1e51ce8cb482e80e0e7c6956"
	// ["HTTP_X_GITHUB_HOOK_INSTALLATION_TARGET_TYPE"]=>
	// string(10) "repository"
	// ["HTTP_X_GITHUB_HOOK_INSTALLATION_TARGET_ID"]=>
	// string(9) "505789337"
	// ["HTTP_X_GITHUB_HOOK_ID"]=>
	// string(9) "382631835"
	// ["HTTP_X_GITHUB_EVENT"]=>
	// string(12) "workflow_run"
	// ["HTTP_X_GITHUB_DELIVERY"]=>
	// string(36) "4c133210-4575-11ed-9c58-44f4ec4c923e"


// Verify

// Store

// Status

// Exit
?>