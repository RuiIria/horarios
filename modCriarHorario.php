<script>
	function ValidarTurma()
	{
		var reg = /^[A-Za-z0-9_ ]*$/;
		if(reg.test(document.getElementById("turma").value)== true)
		{
			document.getElementById('divTurmaErrada').style.display='none'; 
			document.getElementById('divTurmaCorreta').style.display='block'; //Mostra email correto
			return true;
		}
		else
		{
			document.getElementById('divTurmaErrada').style.display='block';//mostra email errado
			document.getElementById('divTurmaCorreta').style.display='none';
			return false;
		}
	}
	
	function ValidarFormH()
	{
		if (ValidarTurma() == false)
			return false
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
				<legend><b>CRIAR HORÁRIO</b></legend>
				<div class="large-8 columns">
					<label>
						<input type='text' placeholder="Turma" onkeyup='ValidarTurma()' onchange='ValidarTurma()' name='turma' id='turma' required/>
					</label>
				</div>
				<div id="divTurmaErrada" style='display:none; position: absolute; left: 31px; top: 88px;'>
					<span data-tooltip aria-haspopup="true" class="has-tip" title="Nome inválido">
						<img src="./img/errado.png" height="20px" width="20px">
					</span>
				</div>
				<div id="divTurmaCorreta" style='display:none; position: absolute; left: 31px; top: 88px;'>
					<img src="./img/correto.png" height="20px" width="20px">
				</div>
				<div class="large-4 columns">
					<label>
						<select required name="curso">
							<option disabled selected>Curso</option>
							<option value="gpsi">G.P.S.I.</option>
							<option value="asc">A.S.C.</option>
							<option value="hsta">H.S.T.A.</option>
						</select>
					</label>
				</div>
				<div class="large-2 columns">
					<label>
						<h3>Aula 1</h3>
					</label>
				</div>
				
				<div class="large-2 columns">
					<label>
						<select required name="hora">
							<option disabled selected>Hora</option>
							<option value="tempo1">8:15-9:15</option>
							<option value="tempo2">9:30-10:30</option>
							<option value="tempo3">10:40-11:40</option>
							<option value="tempo4">11:50-12:50</option>
							<option value="tempo5">14:20-15:20</option>
							<option value="tempo6">15:30-16:30</option>
							<option value="tempo7">16:40-17:40</option>
							<option value="tempo8">17:50-18:50</option>
						</select>
					</label>
				</div>
				
				<div class="large-2 columns">
					<label>
						<select required name="diasemana">
							<option disabled selected>Dia da Semana</option>
							<option value="2Feira">2ª Feira</option>
							<option value="3Feira">3ª Feira</option>
							<option value="4Feira">4ª Feira</option>
							<option value="5Feira">5ª Feira</option>
							<option value="6Feira">6ª Feira</option>
						</select>
					</label>
				</div>
				
				<div class="large-2 columns">
					<label>
						<select required name="sala">
							<option disabled selected>Sala</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="aud">AUD</option>
						</select>
					</label>
				</div>
				
				<div class="large-2 columns">
					<label>
						<select required name="disciplina">
							<option disabled selected>Disciplina</option>
							<option value="mat">MAT.</option>
							<option value="psi">P.S.I.</option>
							<option value="fq">F.Q.</option>
							<option value="ac">A.C.</option>
							<option value="ef">E.F.</option>
							<option value="ai">A.I.</option>
							<option value="fran">Fran.</option>
							<option value="ing">Ing.</option>
							<option value="port">Port.</option>
							<option value="rc">R.C.</option>
							<option value="cc">C.C.</option>
							<option value="oet">OET</option>
						</select>
					</label>
				</div>
				
				<div class="large-2 columns">
					<label>
						<select required name="stor">
							<option disabled selected>Professor</option>
							<option value="stor1">stor1</option>
							<option value="stor2">stor2</option>
							<option value="stor3">stor3</option>
							<option value="stor4">stor4</option>
							<option value="stor5">stor5</option>
							<option value="stor6">stor6</option>
							<option value="stor7">stor7</option>
							<option value="stor8">stor8</option>
							<option value="stor9">stor9</option>
							<option value="stor10">stor10</option>
							<option value="stor11">stor11</option>
						</select>
					</label>
				</div>
				<div class="large-1 columns">
					&nbsp
				</div>
				<div class="large-11 columns">
					&nbsp
				</div>
				<div>
					<input type='submit' class='small button' value='SUBMETER HORÁRIO' />
				</div>
			</fieldset>
		</form>
	</div>
</div>