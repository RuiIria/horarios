<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="foundation/css/foundation.css" />
<script src="foundation/js/vendor/modernizr.js"></script>
<?php include_once('Topbar.php'); ?>

<div class='row' style='position:relative; top:15%; display:block;' id="Login">
	<div class='large-12 large-centered panel columns'>
		<form method='post' action="criarHorario.php" onsubmit="return ValidarDadosHorario();" >
			<fieldset>
				<legend><b>CRIAR HORÁRIO</b></legend>
				<div class="large-12 columns">
					<label>
						Turma:<input type='text' onkeyup='ValidarTurma()' onchange='ValidarTurma()' name='turma' id='turma' required/>
					</label>
				</div>
				
				<div class="large-2 columns">
					<label>
						<h2>Aula 1</h2>
					</label>
				</div>
				
				<div class="large-2 columns">
					<label>
						Tempo:
						<select>
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
						Dia da Semana:
						<select>
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
						Sala:
						<select>
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
						Disciplina:
						<select>
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
						Professor:
						<select>
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
				<div>
					
				</div>
			</fieldset>
		</form>
	</div>
</div>