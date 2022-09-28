<?php
function quote() {
	$motivation           = array();
	$motivation['quote']  = 'A year from now you will wish you had started today.';

	$timezone       = new DateTimeZone( 'Europe/Amsterdam' );
	$today          = new DateTime( 'now', $timezone);
	$birthday       = new DateTime( '14 october', $timezone );
	$first_of_april = new DateTime( '1 april', $timezone );
	$spectrum       = new DateTime( '18 april', $timezone );
	$jimcarrey      = new DateTime( '17 january', $timezone );

	if ( $birthday === $now ){
		$motivation['quote'] = 'happy birthday, nobody cares.';
	}

	if ( $first_of_april === $now ){
		$motivation['quote'] = 'There\'s a snake in my boot!';
	}

	if ( $jimcarrey === $now ){
		$motivation['quote']  = 'My focus is to forget the pain of life. Forget the pain, mock the pain, reduce it. And laugh.';
		$motivation['author'] = 'Jim Carrey';
	}

	if ( $spectrum === $now ){
		$motivation['quote']  = 'Happy Adult Autism Awareness Day!';
	}

	echo '<q class="text text-gradient">';
	echo '"' . $motivation['quote'] . '"';
	if ( ! empty( $motivation['author'] ) ) {
		echo ' - ' . $motivation['author'];
	}
	echo '</q>';
}
?>