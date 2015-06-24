<script>
	function ValidarNAI()
	{
		var reg = /^[z0-9_ ]*$/;
		if(reg.test(document.getElementById("AI").value)== true)
		{
			document.getElementById('divNoNAI').style.display='none'; 
			document.getElementById('divYesNAI').style.display='block';
			return true;
		}
		else
		{
			document.getElementById('divNoNAI').style.display='block';
			document.getElementById('divYesNAI').style.display='none';
			return false;
		}
	}
	
	function ValidarNFQ()
	{
		var reg = /^[z0-9_ ]*$/;
		if(reg.test(document.getElementById("FQ").value)== true)
		{
			document.getElementById('divNoNFQ').style.display='none'; 
			document.getElementById('divYesNFQ').style.display='block';
			return true;
		}
		else
		{
			document.getElementById('divNoNFQ').style.display='block';
			document.getElementById('divYesNFQ').style.display='none';
			return false;
		}
	}
	
	function ValidarNFran()
	{
		var reg = /^[z0-9_ ]*$/;
		if(reg.test(document.getElementById("Fran").value)== true)
		{
			document.getElementById('divNoNFran').style.display='none'; 
			document.getElementById('divYesNFran').style.display='block';
			return true;
		}
		else
		{
			document.getElementById('divNoNFran').style.display='block';
			document.getElementById('divYesNFran').style.display='none';
			return false;
		}
	}
	
	function ValidarNFranIng()
	{
		var reg = /^[z0-9_ ]*$/;
		if(reg.test(document.getElementById("FranIng").value)== true)
		{
			document.getElementById('divNoNFranIng').style.display='none'; 
			document.getElementById('divYesNFranIng').style.display='block';
			return true;
		}
		else
		{
			document.getElementById('divNoNFranIng').style.display='block';
			document.getElementById('divYesNFranIng').style.display='none';
			return false;
		}
	}
	
	function ValidarNIng()
	{
		var reg = /^[z0-9_ ]*$/;
		if(reg.test(document.getElementById("Ing").value)== true)
		{
			document.getElementById('divNoNIng').style.display='none'; 
			document.getElementById('divYesNIng').style.display='block';
			return true;
		}
		else
		{
			document.getElementById('divNoNIng').style.display='block';
			document.getElementById('divYesNIng').style.display='none';
			return false;
		}
	}
	
	function ValidarNMat()
	{
		var reg = /^[z0-9_ ]*$/;
		if(reg.test(document.getElementById("Mat").value)== true)
		{
			document.getElementById('divNoNMat').style.display='none'; 
			document.getElementById('divYesNMat').style.display='block';
			return true;
		}
		else
		{
			document.getElementById('divNoNMat').style.display='block';
			document.getElementById('divYesNMat').style.display='none';
			return false;
		}
	}
	
	function ValidarNPort()
	{
		var reg = /^[z0-9_ ]*$/;
		if(reg.test(document.getElementById("Port").value)== true)
		{
			document.getElementById('divNoNPort').style.display='none'; 
			document.getElementById('divYesNPort').style.display='block';
			return true;
		}
		else
		{
			document.getElementById('divNoNPort').style.display='block';
			document.getElementById('divYesNPort').style.display='none';
			return false;
		}
	}
	
	function ValidarNPSI()
	{
		var reg = /^[z0-9_ ]*$/;
		if(reg.test(document.getElementById("PSI").value)== true)
		{
			document.getElementById('divNoNPSI').style.display='none'; 
			document.getElementById('divYesNPSI').style.display='block';
			return true;
		}
		else
		{
			document.getElementById('divNoNPSI').style.display='block';
			document.getElementById('divYesNPSI').style.display='none';
			return false;
		}
	}
	
	function ValidarNRC()
	{
		var reg = /^[z0-9_ ]*$/;
		if(reg.test(document.getElementById("RC").value)== true)
		{
			document.getElementById('divNoNRC').style.display='none'; 
			document.getElementById('divYesNRC').style.display='block';
			return true;
		}
		else
		{
			document.getElementById('divNoNRC').style.display='block';
			document.getElementById('divYesNRC').style.display='none';
			return false;
		}
	}
	
</script>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="foundation/css/foundation.css" />
<script src="foundation/js/vendor/modernizr.js"></script>
<?php include_once('Topbar.php'); ?>

<div class='row' style='position:relative; top:15%; display:block;' id="CriarHorario">
	<div class='large-12 large-centered panel columns'>
		<form method='post' action="criarHorario.php" onsubmit="return ValidarDadosHorario();" >
			<fieldset>
				<legend><H3>CRIAR HORÁRIO</H3></legend>
				<div class="large-12 columns">
					<h4>CURSO: GESTÃO E PROGRAMAÇÃO DE SISTEMAS DE INFORMAÇÃO</h4>
				</div>
				
				<div class="large-3 columns">
					ÁREA DE INTEGRAÇÃO:<input type="text" onkeyup='ValidarNAI()' onchange='ValidarNAI()' name="AI" id="AI" required />
				</div>
				
				<div id="divNoNAI" style='display:none; position: absolute; left: 230px; top: 164px;'>
					<span data-tooltip aria-haspopup="true" class="has-tip" title="Insira um numero">
						<img src="./img/errado.png" height="20px" width="20px">
					</span>
				</div>
				<div id="divYesNAI" style='display:none; position: absolute; left: 230px; top: 164px;'>
					<img src="./img/correto.png" height="20px" width="20px">
				</div>
			
				<div class="large-3 columns">
					FISICA E QUIMICA:<input type="text" onkeyup='ValidarNFQ()' onchange='ValidarNFQ()' name="FQ" id="FQ" required />
				</div>
				
				<div id="divNoNFQ" style='display:none; position: absolute; left: 459px; top: 164px;'>
					<span data-tooltip aria-haspopup="true" class="has-tip" title="Insira um numero">
						<img src="./img/errado.png" height="20px" width="20px">
					</span>
				</div>
				<div id="divYesNFQ" style='display:none; position: absolute; left: 459px; top: 164px;'>
					<img src="./img/correto.png" height="20px" width="20px">
				</div>
				
				<div class="large-6 columns">
					LÍNGUA ESTRANGEIRA - FRANCÊS:<input type="text" onkeyup='ValidarNFran()' onchange='ValidarNFran()' name="Fran" id="Fran" required />
				</div>
				
				<div id="divNoNFran" style='display:none; position: absolute; right: 65px; top: 164px;'>
					<span data-tooltip aria-haspopup="true" class="has-tip" title="Insira um numero">
						<img src="./img/errado.png" height="20px" width="20px">
					</span>
				</div>
				<div id="divYesNFran" style='display:none; position: absolute; right: 65px; top: 164px;'>
					<img src="./img/correto.png" height="20px" width="20px">
				</div>
				
				<div class="large-8 columns">
					LÍNGUA ESTRANGEIRA - FRANCÊS, LÍNGUA ESTRANGEIRA - INGLÊS:<input type="text" onkeyup='ValidarNFranIng()' onchange='ValidarNFranIng()' name="FranIng" id="FranIng" required />
				</div>
				
				<div id="divNoNFranIng" style='display:none; position: absolute; right: 250px; top: 243px;'>
					<span data-tooltip aria-haspopup="true" class="has-tip" title="Insira um numero">
						<img src="./img/errado.png" height="20px" width="20px">
					</span>
				</div>
				<div id="divYesNFranIng" style='display:none; position: absolute; right: 250px; top: 243px;'>
					<img src="./img/correto.png" height="20px" width="20px">
				</div>
				
				<div class="large-4 columns">
					LÍNGUA ESTRANGEIRA -INGLÊS:<input type="text" onkeyup='ValidarNIng()' onchange='ValidarNIng()' name="Ing" id="Ing" required />
				</div>
				
				<div id="divNoNIng" style='display:none; position: absolute; right: 65px; top: 243px;'>
					<span data-tooltip aria-haspopup="true" class="has-tip" title="Insira um numero">
						<img src="./img/errado.png" height="20px" width="20px">
					</span>
				</div>
				<div id="divYesNIng" style='display:none; position: absolute; right: 65px; top: 243px;'>
					<img src="./img/correto.png" height="20px" width="20px">
				</div>
				
				<div class="large-2 columns">
					MATEMÁTICA:<input type="text" onkeyup='ValidarNMat()' onchange='ValidarNMat()' name="Mat" id="Mat" required />
				</div>
				
				<div id="divNoNMat" style='display:none; position: absolute; left: 230px; top: 322px;'>
					<span data-tooltip aria-haspopup="true" class="has-tip" title="Insira um numero">
						<img src="./img/errado.png" height="20px" width="20px">
					</span>
				</div>
				<div id="divYesNMat" style='display:none; position: absolute; left: 230px; top: 322px;'>
					<img src="./img/correto.png" height="20px" width="20px">
				</div>
				
				<div class="large-2 columns">
					PORTUGUÊS:<input type="text" onkeyup='ValidarNPort()' onchange='ValidarNPort()' name="Port" id="Port" required />
				</div>
				
				<div id="divNoNPort" style='display:none; position: absolute; left: 230px; top: 164px;'>
					<span data-tooltip aria-haspopup="true" class="has-tip" title="Insira um numero">
						<img src="./img/errado.png" height="20px" width="20px">
					</span>
				</div>
				<div id="divYesNPort" style='display:none; position: absolute; left: 230px; top: 164px;'>
					<img src="./img/correto.png" height="20px" width="20px">
				</div>
				
				<div class="large-6 columns">
					PROGRAMAÇÃO E SISTEMAS DE INFORMAÇÃO:<input type="text" onkeyup='ValidarNPSI()' onchange='ValidarNPSI()' name="PSI" id="PSI" required />
				</div>
				
				<div id="divNoNPSI" style='display:none; position: absolute; left: 230px; top: 164px;'>
					<span data-tooltip aria-haspopup="true" class="has-tip" title="Insira um numero">
						<img src="./img/errado.png" height="20px" width="20px">
					</span>
				</div>
				<div id="divYesNPSI" style='display:none; position: absolute; left: 230px; top: 164px;'>
					<img src="./img/correto.png" height="20px" width="20px">
				</div>
				
				<div class="large-4 columns">
					REDES DE COMUNIÇACÃO:<input type="text" onkeyup='ValidarNRC()' onchange='ValidarNRC()' name="RC" id="RC" required />
				</div>
				
				<div id="divNoNRC" style='display:none; position: absolute; left: 230px; top: 164px;'>
					<span data-tooltip aria-haspopup="true" class="has-tip" title="Insira um numero">
						<img src="./img/errado.png" height="20px" width="20px">
					</span>
				</div>
				<div id="divYesNRC" style='display:none; position: absolute; left: 230px; top: 164px;'>
					<img src="./img/correto.png" height="20px" width="20px">
				</div>
				
				<div>
					<input type='submit' class='small button' value='GENERAR HORÁRIO' />
				</div>
			</fieldset>
		</form>
	</div>
</div>
