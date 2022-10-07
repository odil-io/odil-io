<?php
function api_status() {
	$file = __DIR__ . '/' . $filename;
	if ( file_exists( $file ) ) :
		echo 'online';
	else:
		echo 'offline';
	endif;
}

function pre( $filename ) {
	$file = __DIR__ . '/' . $filename;
	if ( file_exists( $file ) ) :
		$contents = file_get_contents( $file );
		$json     = json_decode( $contents );
		if ( $json ) :
			echo '<h1>' . $filename . '</h1>';
			echo '<hr/>';
			var_export( $json->action );
			echo '<hr/>';
			var_export( $json->workflow->id );
			echo '<hr/>';
			var_export( $json->workflow->name );
			echo '<hr/>';
			// var_export( $json->repository );
			var_export( $json->sender->login );
			echo '<hr/>';
			var_export( $json->sender->avatar_url );
			echo '<hr/>';
			var_export( $json->sender->html_url );
			echo '<hr/>';
		endif;
	endif;
}