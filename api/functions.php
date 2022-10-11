<?php
function api_status() {
	$logfile = scandir( __DIR__ . '/entries' );
	if ( is_array( $logfile ) ) {
		echo 'online';
	} else {
		echo 'offline';
	}
}

function deliveries() {
	$logfile = scandir( __DIR__ . '/entries' );
	if ( $logfile ) {
		foreach ( $logfile as $entryfile ) :
			if ( ! in_array( $entryfile, array( '.', '..' ) ) ) :
				echo '<div class="delivery">';
					echo str_replace('.json','',$entryfile);
					echo date ("F d Y H:i.", filemtime($filename));
				echo '</div>';
			endif;
		endforeach;
	}
}