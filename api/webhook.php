<?php
if ( $_REQUEST && array_key_exists( 'payload', $_REQUEST ) ) {
	$log    = __DIR__ . '/entries/' . $_SERVER['HTTP_X_GITHUB_DELIVERY'] . '.json';
	$entry = array();
	$entry['signature'] = $_SERVER['HTTP_X_HUB_SIGNATURE_256'];
	$entry['payload']   = $_REQUEST['payload'];

	try {
		file_put_contents( $log, json_encode( $entry ), FILE_APPEND );
		throw new Exception();
	} catch (\Throwable $th) {
		header("HTTP/1.1 500 Internal Server Error");
	}
}
?>