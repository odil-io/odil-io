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
				position: fixed;
				content:'';
				top: 22px;
				left: 50vw;
				transform: translateX(-50%);
				text-align: center;
				width: max-content;
				color: #292929;
				padding: 6px 12px;
				margin: 12px auto;
				font-size: 24px;
				font-weight: bold;
			}
		</style>
	</head>
	<body>
		<div class="alert">
			<h1>ODI/API: <?php api_status(); ?></h1>
		</div>
	</body>
</html>
