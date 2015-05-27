<?php

class DataAccess{
    private $connection;
	
    function connect($bdname = "user", $username="root", $password = ""){ 
		
      
        $server = "localhost"; 
		$this->connection = mysqli_connect($server,$username,$password,$bdname);

		// Check connection
		if (mysqli_connect_error())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}else{
           
		   mysqli_query($this->connection, "set names 'utf8'");
            mysqli_query($this->connection, "set character_set_connection=utf8");
            mysqli_query($this->connection, "set character_set_client=utf8");
            mysqli_query($this->connection, "set character_set_results=utf8");
			

        }
    }
    
    function execute($query){
        $res = mysqli_query($this->connection, $query);
        if(!$res){
            die("Comando inválido" /*. mysqli_error($this->connection) */);
        }else
            return $res;
    }
    
    function disconnect(){
        mysqli_close($this->connection);
    }
	
	
	function inserirUtilizador($nome, $email, $pwd){
		$query = "insert into utilizador(Nome, email, senha) 
										values('$nome', '$Email','$pwd')";
		$this->connect();
        $this->execute($query);
        $this->disconnect();
	}
	
	function login($email, $password){
				
		$query = "SELECT * FROM utilizador WHERE email='" . $Email . "' AND `senha` = '$password'";
		
	 	$this->connect();
		$res = $this->execute($query);
		$this->disconnect();
		return $res;
	}
    
	function getUser($id){
        $query = "select * from utilizador where id = $id";
		$this->connect();
        $res = $this->execute($query);
		$this->disconnect();
		return $res;
    }
	
	function deleteUser($id){
		$query = "delete from utilizador where id = $id";
		$this->connect();
		$this->execute($query);
		$this->disconnect();
	}
	
	function editarutilizador($id, $novoNome, $novaPwd){
		$query = "update utilizador set Nome='$novoNome',password='$novaPwd' where id = '$id'";
		$this->connect();
		$this->execute($query);
		$this->disconnect();
	}
	
	function EmailJaExiste( $Email ){
		$query = "select email from utilizador where email ='$Email'";
		$this->connect();
		$res = $this->execute($query);
		$this->disconnect();
		
		return (mysqli_num_rows($res) == 0 );
				
	}
	
	function editarutilizadorNome($id, $novoNome){
		$query = "update utilizador set Nome='$novoNome' where id = '$id'";
		$this->connect();
		$this->execute($query);
		$this->disconnect();
	}
	
	function editarutilizadorPwd($id, $novaPwd){
		$query = "update utilizador set senha='$novaPwd' where id = '$id'";
		$this->connect();
		$this->execute($query);
		$this->disconnect();
	}
