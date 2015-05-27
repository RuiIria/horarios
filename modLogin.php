<script>
		function ValidarNome(){
			var reg = /^[A-Za-z0-9_ ]*$/;
			if(reg.test(document.getElementById("nome").value)== true){
				document.getElementById('divNomeErrado').style.display='none'; 
				document.getElementById('divNomeCorreto').style.display='block'; //Mostra email correto
				return true;
			}
			else{
				document.getElementById('divNomeErrado').style.display='block';//mostra email errado
				document.getElementById('divNomeCorreto').style.display='none';
				return false;
			}
		}
		function ValidarPass(){
			var reg = /((?=.*[0-9])(?=.*[A-Z]).{6,15})/;
			if(reg.test(document.getElementById("pass").value)== true){
				document.getElementById('divPassErrada').style.display='none';
				document.getElementById('divPassCorreta').style.display='block';//mostra pass certa
				return true;
				}
			else{
				document.getElementById('divPassErrada').style.display='block';//mostra pass errada
				document.getElementById('divPassCorreta').style.display='none';
				return false;
			}
		}
</script>
<div class='row' style='position:relative; top:15%; display:block;' id="Login">
	<div class='large-5 large-centered panel columns'>
		<form method='post' onsubmit="return ValidarLogin();" action="doLogin">
			<fieldset>
				<legend><b>LOGIN</b></legend>
				<label>
					Nome:<input type="text" onkeyup='ValidarNome()' onchange='ValidarNome()' name='nome' id='nome' required />
				</label>
					<div id="divNomeErrado" style='display:none; position: absolute; right: 48px; top: 108px;'>
						<span data-tooltip aria-haspopup="true" class="has-tip" title="Nome inválido">
							<img src="./img/errado.png" height="20px" width="20px">
						</span>
					</div>
					<div id="divNomeCorreto" style='display:none; position: absolute; right: 48px; top: 109px;'>
						<img src="./img/correto.png" height="20px" width="20px">
					</div>
				<br>
				<label>
					Senha:<input type="password" onkeyup='ValidarPass()' onchange='ValidarPass()' name='pass' id='pass' required />
				</label>
					<div id="divPassErrada" style='display:none; position: absolute; right: 48px; bottom: 147px;'>
						<span data-tooltip aria-haspopup="true" class="has-tip" title="Password inválida">
							<img src="./img/errado.png" height="20px" width="20px">
						</span>
					</div>
					<div id="divPassCorreta" style='display:none; position: absolute; right: 48px; bottom: 149px;'>
						<img src="./img/correto.png" height="20px" width="20px">
					</div>
			</fieldset>
			<div class='row'>
				<div class='large-9 large-centered columns'>
					<input type='submit' class='small button' value='ENTRAR' />
					<a onclick="ApareceRegisto()" class="small button"> CRIAR CONTA </a>
				</div>
			</div>
		</form>
	</div>
</div>