<?php
ini_set( 'zlib.output_compression_level', 6 );

if ( isset( $_SERVER['HTTP_ACCEPT_ENCODING'] ) ) {
	if ( substr_count( $_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip' ) ) {
		ob_start( 'ob_gzhandler' );
	} else {
		ob_start();
	}
}

include 'lib/quotes.php';
include 'lib/public.php';
?>
<!DOCTYPE html>
<html lang="nl">
	<head prefix="og: http://ogp.me/ns# profile: http://ogp.me/ns/profile#">
		<meta http-equiv=x-ua-compatible content="ie=edge">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>Odilio Witteveen</title>
		<meta http-equiv=Content-Type content="text/html; charset=utf-8" />
		<meta property=og:title content="Odilio Witteveen, WordPress Developer" />
		<meta property=og:site_name content="Odilio Witteveen" />
		<meta property=og:locale content=nl_NL />
		<meta property=og:type content=website />
		<meta property=og:url content="https://odil.io/" />
		<meta property=og:image content="https://odil.io/assets/media/profile.jpg" />
		<meta property=og:image:secure_url content="https://odil.io/assets/media/profile.jpg" />
		<meta property=og:image:type content="image/png" />
		<meta property=og:description content="Odilio Witteveen doet websites maken bij Pronamic" />
		<meta name="description" content="Odilio Witteveen doet websites maken bij Pronamic" />
		<meta property=profile:first_name content=Odilio />
		<meta property=profile:last_name content=Witteveen />
		<link rel=icon type="image/png" href="/favicon.ico" />
		<link rel="stylesheet" href="https://odil.io/assets/wttvn.css">
	</head>
	<body>
		<!-- "Wish I believed that I don't need someone else to feel this good" -->
		<?php quote(); ?>
		<main>
			<section class="profile">
				<article>
					<div class="profile__avatar<?php echo $funnies; ?>">
						<img class="avatar" src="assets/media/profile.jpg" alt="Afbeelding van Odilio" width="75">
					</div>
					<div>
						<p>Mijn naam is Odilio,<br/>WordPress Developer bij <a href="https://pronamic.nl" target="_blank"><svg height="20" viewBox="0 0 278.6 72.4" style="vertical-align: text-top;"><path fill="#f9461c" d="M268.9 16.2c2.9-.1 4.6-1.4 4.6-3.6 0-3.6-4-5.6-11.7-5.9h-.6V11l2.8.2V9.6c4 .3 6.8 1.4 6.8 2.8 0 1-1.3 1.2-2.4 1.2-1.9 0-3.1-.1-4.5-.2-.6-.1-1.3-.1-2.1-.2h-.6v8.7c-3.3-1.6-5.6-5.1-5.6-9 0-5.5 4.5-10 10-10s10 4.5 10 10c0 4.9-3.5 8.9-8 9.8v2.9c6.2-1 10.9-6.3 10.9-12.8 0-7.1-5.8-12.9-12.9-12.9-7.1 0-12.9 5.8-12.9 12.9 0 6.6 4.9 12 11.3 12.8v-9.5c.7.1 2 .2 4.9.1"></path><g><path fill="#2c3341" d="M7.4 72.4H0V37.8c0-5.3 2.6-7.5 6.2-8.2 2-.4 4.8-.4 8-.4 3.1 0 5.7 0 7.1.3 4.1.7 6.7 3.8 6.9 8.4.1 2.9.1 5.5.1 7.8 0 2.7 0 4.8-.1 7.2-.1 5.8-3.3 9.2-11.6 9.2H7.4v10.3zm10.5-37.1c-1.2-.2-2.6-.2-3.9-.2-1.3 0-3.1 0-4.2.2-2.3.5-2.4 2.7-2.4 4.2v12.9c0 2 1.1 3.3 3.2 3.5 1.3.1 2.2.1 3.9.1 2.1 0 3 0 3.9-.2 1.4-.4 2.3-1.4 2.4-2.8.1-2.7.1-4.9.1-7.4 0-2.1 0-4.1-.1-6.9-.1-1.8-.9-3.1-2.9-3.4zM34.6 37.7c0-5 3-7.5 7.1-8.2 1.5-.3 4.1-.3 7.2-.3h6.2v6H49c-1.6 0-2.6 0-3.9.1-2 .2-3.2 1.5-3.2 3.3v23.5h-7.4V37.7zM63.8 61.5c-3.2-1-5.7-3.1-6.2-6.9-.1-1.3-.1-4.6-.1-9 0-4.5 0-7.7.1-9 .4-3.8 3-5.9 6.2-6.9 2-.6 4.6-.6 7.8-.6s6 0 7.9.6c3.2 1 5.7 3.1 6.2 6.9.1 1.3.1 4.5.1 9 0 4.4 0 7.7-.1 9-.4 3.8-3 5.9-6.2 6.9-2 .6-4.6.6-7.9.6-3.1 0-5.8 0-7.8-.6zM76 55.9c1.4-.4 2.2-1.3 2.4-2.6.1-.6.1-4.1.1-7.6s-.1-7-.1-7.6c-.1-1.3-1-2.2-2.4-2.6-.9-.2-2.2-.2-4.3-.2-2.1 0-3.4 0-4.3.2-1.4.3-2.2 1.2-2.4 2.5-.1.6-.1 4.1-.1 7.6 0 3.6.1 7 .1 7.6.1 1.3 1 2.2 2.4 2.6.9.2 2.2.2 4.3.2 2.1.1 3.4.1 4.3-.1zM102.1 35.4c-1.4.4-2.2 1.3-2.4 2.6-.1.6-.1 1.3-.1 2.1v22h-7.4V40.8c0-1.4 0-2.8.1-4.2.4-3.8 3-5.9 6.2-6.9 2-.6 4.6-.6 7.8-.6 3.1 0 5.8 0 7.8.6 3.2 1 5.7 3.1 6.2 6.9.1 1.3.1 2.8.1 4.2v21.3H113v-22c0-.7 0-1.5-.1-2.1-.1-1.3-1-2.2-2.4-2.6-.9-.2-2.2-.2-4.3-.2s-3.2 0-4.1.2zM143 29.2c7.8 0 10.9 3.5 10.9 9.1v15.3c0 5.9-3.8 8.2-9.9 8.5-1.3.1-2.8.1-4.2.1-1.5 0-2.9 0-4.3-.1-5.5-.2-9.9-2.4-9.9-8.1v-4.1c0-6.3 4.3-9.1 11.3-9.1h7.5c1.1 0 2-.5 2-1.8v-1.2c0-2.3-2.5-2.6-5-2.6h-11.3v-6H143zm3.4 17.6h-7.6c-3 0-5.7.3-5.7 3.6v2.1c0 2.1.8 3.2 3.4 3.5 1 .1 2.4.1 3.6.1 1 0 2.2 0 3.2-.1 2.5-.3 3.3-1.5 3.3-3.3v-5.9zM178.6 62.1V38.9c0-2.4-1.1-3.3-3.2-3.6-.8-.1-1.8-.1-2.7-.1-1 0-1.8 0-2.7.2-1.4.4-2.2 1.3-2.4 2.5-.1.6-.1 1.2-.1 1.9V62h-7.4V40.4c0-1.4 0-2.4.1-3.8.4-3.8 3-5.9 6.2-6.9 2-.6 3.4-.6 6.7-.6 3.1 0 4.3.1 5.9.5 1.3.3 2.5.7 3.4 1.5.7-.8 1.8-1.2 3.2-1.5 1.6-.4 2.8-.5 5.9-.5 3.2 0 4.7 0 6.7.6 3.2 1 5.7 3.1 6.2 6.9.1 1.3.1 2.4.1 3.8v21.7H197V39.8c0-.7 0-1.3-.1-1.9-.1-1.3-1-2.2-2.4-2.5-.9-.2-1.8-.2-2.7-.2-.9 0-1.8 0-2.7.1-2 .3-3.2 1.3-3.2 3.6v23.2h-7.3zM219.2 25.6h-7.4v-6.1h7.4v6.1zm0 36.5h-7.4V29.2h7.4v32.9zM248.6 56.1v6h-8.8c-2.9 0-6.3 0-8.3-.6-4.6-1.5-5.8-4.6-5.8-9.7v-14c0-4.6 2.8-7.6 7.1-8.3 1.5-.2 4.1-.3 7.1-.3h8.4v6H240c-1.6 0-2.6 0-3.8.1-2 .2-3.2 1.5-3.2 3.3v12.9c0 1.9.3 3.8 2.4 4.4 1 .2 2.9.2 4.3.2h8.9z"></path></g></svg></a>.</p>
					</div>
				</article>
			</section>
		</main>

		<aside>
			<?php public_profiles(); ?>
		</aside>

		<footer>
			<div>&copy; Odilio Witteveen <?php echo date('Y');?></div>
		</footer>

		<canvas id="canvas"></canvas>

		<script src="/assets/js/stackoverflow.js"></script>
		<script src="https://unpkg.com/gsap@3.10.4/dist/gsap.min.js"></script>
		<script src="/assets/js/waves.js"></script>
		<!-- https://backgroundchecks.org/justdeleteme/ -->
	</body>
</html>

<?php ob_end_flush(); ?>