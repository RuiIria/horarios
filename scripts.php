
		<script src="foundation/js/vendor/jquery.js"></script>
		<script src="foundation/js/vendor/modernizr.js"></script>
        <script src="foundation/js/foundation.min.js"></script>
		<script src="foundation/js/foundation/foundation.js"></script>
		<script src="foundation/js/foundation/foundation.topbar.js"></script>
        <script>
          $(document).foundation();
        </script>
		<script>
		function ApareceRegisto(){
		document.getElementById('Registar').style.display='block';
		document.getElementById('Login').style.display='none';
		}
		function ApareceLogin(){
		document.getElementById('Login').style.display='block';
		document.getElementById('Registar').style.display='none';
		}
		function ValidarLogin(){
		if(ValidarPass()&&ValidarEmail()){			
			return true;
		}
		else{			
			alert("Um dos campos incontra-se invalido, por favor preecha-os como deve ser.");
			return false;
			}
		}
		function ValidarRegisto(){
			
			alert('ola');
			
		if(ValidarNome() && ValidarPassR() && ValidarEmailR() && ValidarCPass()){			
			return true;
		}
		else{			
			alert("Um dos campos incontra-se invalido, por favor preecha-os como deve ser.");
			return false;
			}
		}
		</script>