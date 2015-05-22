<?php
	session_start();
	if (!isset($_SESSION['idUser']))
		echo "<script>window.location='index.php';</script>";
?>
<html>
	<head>
		<title>Início</title>
	</head>
	<body>
	<?php include_once('Topbar.php'); ?>
	<div class='row'>
		<div id="corpo" class="large-8 large-centered panel columns">

		</div>
	</div>
	</body>
</html>