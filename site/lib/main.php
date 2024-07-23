<?php

// Set compression level
ini_set( 'zlib.output_compression_level', 6 );

// Check if Client accepts encoding
if ( isset( $_SERVER['HTTP_ACCEPT_ENCODING'] ) ) {
	// Check if Client accepts gzip encoding
	if ( substr_count( $_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip' ) ) {
		// Serve with gzip compression
		ob_start( 'ob_gzhandler' );
	} else {
		// Serve without gzip compression
		ob_start();
	}
}