<?php
	if (isset($_POST['emailR'])){
		//tentar efetuar o registo
		$nome = $_POST['nomeR'];
		$Email = $_POST['email'];
		$pwd = md5($_POST['passR']);		//md5 serve para encriptar a password
		include_once('DataAccess.php');
		$da = new DataAccess();
		$res = $da->EmailJaExiste($Email);		
		//Se a variável $res tiver resultados, significa que existe ja uma conta com o msm email.
		if ( !$res ) {
			echo "<script>alert('Esse email já se encontra registado.');</script>";
		}else{
			$da->inserirUtilizador($nome, $Email, $pwd);
			echo "<script>alert('Registo efetuado com sucesso');
				window.location='index.php';</script>";
		}
	}
?>