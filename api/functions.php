<?php
function api_status() {
	if ( empty( json_decode( file_get_contents( __DIR__ . '/status.json' ) ) ) ) :
		echo 'not ';
	endif;
	echo 'available';
}