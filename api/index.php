<?php require_once( 'functions.php' ); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel=icon type="image/png" href="/favicon.ico" />
		<title>ODI/API</title>
		<style>
			html,
			body {
				position: relative;
				font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
				color: #292929;
				background-color: #eaedf3;
				height: 100vh;
				margin: 0;
				padding: 0;
				text-size-adjust: 100%;
				text-rendering: optimizeLegibility;
				font-size: 1rem;
			}
			main {
				max-width: 560px;
				color: #292929;
				padding: 6px 12px;
			}
			div {
				margin: 12px 0;
			}
			.alert {
				font-size: 24px;
				font-weight: bold;
			}
			.delivery {
				padding: 10px;
				border: 2px solid #cbcbcb;
				border-radius: 5px;
				font-size: 10px;
				font-weight: bold;
			}
		</style>
	</head>
	<body>
		<main>
			<div class="alert">
				ODI/API: <?php api_status(); ?>
			</div>
			<div>
				<?php deliveries(); ?>
			</div>
		</main>
	</body>
</html>
