<script src="foundation/js/vendor/jquery.js"></script>
<script src="foundation/js/vendor/modernizr.js"></script>
<script src="foundation/js/foundation.min.js"></script>
<script src="foundation/js/foundation/foundation.js"></script>
<script src="foundation/js/foundation/foundation.topbar.js"></script>
<script>
	$(document).foundation();
</script>
<script>
	function ApareceRegisto()
	{
		document.getElementById('Registar').style.display='block';
		document.getElementById('Login').style.display='none';
	}
	
	function ApareceLogin()
	{
		document.getElementById('Login').style.display='block';
		document.getElementById('Registar').style.display='none';
	}
	
	function ValidarLogin()
	{
		if(ValidarPass() && ValidarEmailL())
		{			
			return true;
		}
		else
		{			
			alert("Um dos campos encontra-se invalido! Por favor preecha-os corretamente.");
			return false;
		}
	}
	
	function ValidarDadosHorario()
	{
		if(ValidarNAI() && ValidarNFQ() && ValidarNFran() && ValidarNFranIng() && ValidarNIng() && ValidarNMat() && ValidarNPort() && ValidarNPSI() && ValidarNRC() && LimiteHoras())
		{
			return true;
		}
		else
		{
			alert("Verifique se só inseriu numeros, e se o total é igual ou menor a 48");
			return false;
		}
	}
	
	function ValidarRegisto()
	{
		if(ValidarNomeR() && ValidarPassR() && ValidarEmail() && ValidarCPass())
		{			
			return true;
		}
		else
		{			
			alert("Um dos campos encontra-se invalido! Por favor preecha-os corretamente.");
			return false;
		}
	}
</script>