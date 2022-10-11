<?php require_once( 'functions.php' ); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>ODI/API</title>
		<style>
			html,
			body {
				position: relative;
				font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
				color: #292929;
				background-color: #eaedf3;
				height: 100vh;
				width: 100vw;
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
				display: block;
				padding: 14px 6px;
				border:1px solid #c8c8c8;
				border-radius: 5px;
				font-size: 18px;
				font-weight: bold;
			}
			.delivery:nth-child(even) {
				background-color: #fff;
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
