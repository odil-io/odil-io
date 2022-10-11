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
				$file = __DIR__ . '/entries/'. $entryfile;
				$time = date ("H:i", filemtime($file));
				echo '<div class="delivery">';
					echo str_replace('.json', '<span>' . $time . '</span>' ,$entryfile);
				echo '</div>';
			endif;
		endforeach;
	}
}