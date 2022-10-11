<?php
if ( $_REQUEST && array_key_exists( 'payload', $_REQUEST ) ) {
	$log    = __DIR__ . '/logs/' . $_SERVER['HTTP_X_GITHUB_DELIVERY'] . '.json';
	$entry = array();
	$entry['signature'] = $_SERVER['HTTP_X_HUB_SIGNATURE_256'];
	$entry['payload']   = $_REQUEST['payload'];
	file_put_contents( $log, json_encode( $entry ), FILE_APPEND );
}
?>