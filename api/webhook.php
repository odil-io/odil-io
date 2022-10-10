<?php
if ( $_REQUEST && array_key_exists( 'payload', $_REQUEST ) ) {
	$file    = __DIR__ . '/payload-'.$_REQUEST['HTTP_X_GITHUB_DELIVERY'].'.json';
	$request = $_REQUEST['payload'];
	file_put_contents( $file, $request, FILE_APPEND );
}
?>