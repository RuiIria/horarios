<?php
	session_start();
	if (isset($_SESSION['idUser']))
		echo "<script>window.location='inicio.php';</script>";
?>	
<html>
	<head>
		<title>Plataforma de Horarios</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="foundation/css/foundation.css" />
        <script src="foundation/js/vendor/modernizr.js"></script>
	</head>
	<body>
            <?php
                include_once('modLogin.php');
                include_once('modReg.php');
            ?>
	</body>
	<?php include_once('scripts.php'); ?>
</html>