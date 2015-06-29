<?php
	session_start();
	if (!isset($_SESSION['idUser']))
		echo "<script>window.location='index.php';</script>";
?>
<html>
	<head>
		<title>Início</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="foundation/css/foundation.css" />
        <script src="foundation/js/vendor/modernizr.js"></script>
	</head>
	<body>
	<?php include_once('Topbar.php'); ?>
	<center><h1>Página Inicial</h1></center>
	</body>
</html>
	<?php include_once('scripts.php'); ?>