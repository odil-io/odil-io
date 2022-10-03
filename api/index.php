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
			.alert {
				position: relative;
				text-align: center;
				width: max-content;
				color: #fff;
				background-color: #292929;
				padding: 6px 12px;
				margin: 10% auto;
			}
		</style>
	</head>
	<body>
		<div class="alert">
			API: <?php api_status(); ?>
		</div>
	</body>
</html>
