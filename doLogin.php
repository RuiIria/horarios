<?php
	if (isset($_POST['EmailL']))
	{
		//tentar efetuar login
		$emailL = $_POST['EmailL'];
		$LPass = md5($_POST['pass']); //md5 serve para encriptar a password
		include_once('DataAccess.php');
		$da = new DataAccess();
		$res = $da->login($emailL, $LPass);
		//Se a variável $res tiver resultados, significa que o login foi efetuado com sucesso
		if (mysqli_num_rows($res) > 0)
		{
			$row = mysqli_fetch_object($res);
			session_start();
			$_SESSION['idUser'] = $row->id;
			$_SESSION['nomeUser'] = $row->Nome;
			$_SESSION['emailUser'] = $row->email;
			echo "<script>alert('Login efetuado com sucesso'); window.location='inicio.php'</script>";
		}
		else
		{
			echo "erro no login";
			echo "<script>alert('Login Incorreto'); window.location='index.php'</script>";
		}		
	}
?>