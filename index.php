<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Light Messages</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>

	<?php
		include_once( 'pages/functions.php' );
		include_once( 'pages/navbar.php' );
		global $pdo;
		$pdo = connect();

		if ( isset( $_GET['page'] ) ) {
			if ( $_GET['page'] == 'about' ) include_once ( 'pages/about.php' );
		} else {
			include_once( 'pages/messages.php' );
		}
	?>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>
