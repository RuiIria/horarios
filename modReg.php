<script>
	function ValidarNomeR(){
		var reg = /^[A-Za-z0-9_ ]*$/;
		if(reg.test(document.getElementById("nomeR").value)== true){
			document.getElementById('divNomeErradoR').style.display='none'; 
			document.getElementById('divNomeCorretoR').style.display='block'; //Mostra email correto
			return true;
		}
		else{
			document.getElementById('divNomeErradoR').style.display='block';//mostra email errado
			document.getElementById('divNomeCorretoR').style.display='none';
			return false;
			}
		}
	function ValidarEmail(){
			var reg = /[A-Za-z0-9._-]+@[a-z]+\.[a-z]{2,3}(\.[a-z]{2,3})?$/;
			if(reg.test(document.getElementById("email").value)== true){
				document.getElementById('divEmailErrado').style.display='none'; 
				document.getElementById('divEmailCorreto').style.display='block'; //Mostra email correto
				return true;
			}
			else{
				document.getElementById('divEmailErrado').style.display='block';//mostra email errado
				document.getElementById('divEmailCorreto').style.display='none';
				return false;
			}
			

		}
	function ValidarPassR(){
			var reg = /((?=.*[0-9])(?=.*[A-Z]).{6,15})/;
			if(reg.test(document.getElementById("passR").value)== true){
				document.getElementById('divPassErradaR').style.display='none';
				document.getElementById('divPassCorretaR').style.display='block';//mostra pass certa
				return true;
				}
			else{
				document.getElementById('divPassErradaR').style.display='block';//mostra pass errada
				document.getElementById('divPassCorretaR').style.display='none';
				return false;
			}
		}
	function ValidarCPass(){
		var reg = /((?=.*[0-9])(?=.*[A-Z]).{6,15})/;
		if(document.getElementById("cpass").value == document.getElementById("passR").value){
			document.getElementById('divCPassErrada').style.display='none'; 
			document.getElementById('divCPassCorreta').style.display='block'; //Mostra email correto
			return true;
		}
		else{
			document.getElementById('divCPassErrada').style.display='block';//mostra email errado
			document.getElementById('divCPassCorreta').style.display='none';
			return false;
			}
		}
		
	function validarForm(){

		if (ValidarNomeR() == false)
			return false;
			
		if (ValidarEmail() == false){
			return false;
		}
			
		
		if (ValidarPassR() == false)
			return false
		
		if (ValidarCPass() == false)
			return false
	}
	
</script>
<div class='row' style='position:relative; top:15%; display:none;' id="Registar">
	<div class='large-5 large-centered panel columns'>
		<form method='post' action="doRegistar.php" onsubmit="return validarForm()">
			<fieldset>
				<legend><b>REGISTAR</b></legend>
				<label>
					Email:<input type='text' placeholder='ex: botao360@gmail.com' onkeyup='ValidarEmail()' onchange='ValidarEmail()' name='email' id='email' required/>
				</label>
				<div id="divEmailErrado" style='display:none; position: absolute; right: 48px; top: 108px;'>
					<span data-tooltip aria-haspopup="true" class="has-tip" title="Email inválido">
						<img src="./img/errado.png" height="20px" width="20px">
					</span>
				</div>
				<div id="divEmailCorreto" style='display:none; position: absolute; right: 48px; top: 108px;'>
					<img src="./img/correto.png" height="20px" width="20px">
				</div>
				<label>
					Nome:<input type="text" placeholder='Ze manel' onkeyup='ValidarNomeR()' onchange='ValidarNomeR()' name='nomeR' id='nomeR' required />
				</label>
				<div id="divNomeErradoR" style='display:none; position: absolute; right: 48px; top: 182px;'>
					<span data-tooltip aria-haspopup="true" class="has-tip" title="Nome inválido">
						<img src="./img/errado.png" height="20px" width="20px">
					</span>
				</div>
				<div id="divNomeCorretoR" style='display:none; position: absolute; right: 48px; top: 182px;'>
					<img src="./img/correto.png" height="20px" width="20px">
				</div>
				<br>
				<label>
					Senha:<input type="password" onkeyup='ValidarPassR()' onchange='ValidarPassR()' name='passR' id='passR' required />
				</label>
				<div id="divPassErradaR" style='display:none; position: absolute; right: 48px; bottom: 222px;'>
					<span data-tooltip aria-haspopup="true" class="has-tip" title="Password inválida">
						<img src="./img/errado.png" height="20px" width="20px">
					</span>
				</div>
				<div id="divPassCorretaR" style='display:none; position: absolute; right: 48px; bottom: 222px;'>
					<img src="./img/correto.png" height="20px" width="20px">
				</div>
				<label>
					Confirmar Senha:<input type="password" onkeyup='ValidarCPass()' onchange='ValidarCPass()' name='cpass' id='cpass' required />
				</label>
				<div id="divCPassErrada" style='display:none; position: absolute; right: 48px; bottom: 148px;'>
					<span data-tooltip aria-haspopup="true" class="has-tip" title="As passwords não são iguais">
						<img src="./img/errado.png" height="20px" width="20px">
					</span>
				</div>
				<div id="divCPassCorreta" style='display:none; position: absolute; right: 48px; bottom: 148px;'>
					<img src="./img/correto.png" height="20px" width="20px">
				</div>
			</fieldset>
			<div class='row'>
				<div class='large-8 large-centered columns'>
					<input type='submit' class='small button' value='REGISTAR' />
					<a onclick="ApareceLogin()" class="small button"> VOLTAR </a>
				</div>
			</div>
		</form>
	</div>
</div>