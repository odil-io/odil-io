<?php
function api_status() {
	$logfiles = scandir( __DIR__ . '/entries' );
	if ( is_array( $logfiles ) ) {
		echo 'online';
	} else {
		echo 'offline';
	}
}

function deliveries() {
	$logfiles = scandir( __DIR__ . '/entries' );
	if ( is_array( $logfiles ) ) {
		$logfiles = array_reverse($logfiles);
		foreach ( $logfiles as $entryfile ) :
			if ( ! in_array( $entryfile, array( '.', '..' ) ) ) :
				$file = __DIR__ . '/entries/'. $entryfile;
				$time = date ("H:i", filemtime($file));
				echo '<div class="delivery">';
					echo str_replace('.json', '<span>' . $time . '</span>' ,$entryfile);
				echo '</div>';
			endif;
		endforeach;
	}
}