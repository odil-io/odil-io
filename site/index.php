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
						<p>Hi, I'm Odi and I've been tinkering on the web since '98.</p>
						<p>I'm a <a href="//wikipedia.org/wiki/Multipotentiality">multipotentialite</a> who has interests in Physics, Philosophy and <a href="//wikipedia.org/wiki/STEM">STEM</a>.</p>
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
