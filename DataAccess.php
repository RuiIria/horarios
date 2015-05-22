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
		$query = "insert into users(nome, email, senha) 
										values('$nome', '$email','$pwd')";
		$this->connect();
        $this->execute($query);
        $this->disconnect();
	}
	
	function login($email, $password){
				
		$query = "SELECT * FROM users WHERE email='" . $email . "' AND `senha` = '$password'";
		
	 	$this->connect();
		$res = $this->execute($query);
		$this->disconnect();
		return $res;
	}
    
    function getUsers(){
        $query = "select U.*, T.tipo from users U inner join TiposDeUtilizadores T where U.idTipoUtilizador = T.id";
		$this->connect();
        $res = $this->execute($query);
		$this->disconnect();
		return $res;
    }
	
	function searchUsers($x){
        $query = "select U.*, T.tipo from users U inner join TiposDeUtilizadores T where U.idTipoUtilizador = T.id and 
					(U.nome like '%$x%' or U.email like '%$x%' or T.tipo like '%$x%')";
		$this->connect();
        $res = $this->execute($query);
		$this->disconnect();
		return $res;
    }
	
	function getUser($id){
        $query = "select * from users where id = $id";
		$this->connect();
        $res = $this->execute($query);
		$this->disconnect();
		return $res;
    }
	
	function deleteUser($id){
		$query = "delete from users where id = $id";
		$this->connect();
		$this->execute($query);
		$this->disconnect();
	}
	
	function editarUsers($id, $novoNome, $novaPwd){
		$query = "update users set nome='$novoNome',password='$novaPwd' where id = '$id'";
		$this->connect();
		$this->execute($query);
		$this->disconnect();
	}
	
	function EmailJaExiste( $email ){
		$query = "select Email from users where Email ='$email'";
		$this->connect();
		$res = $this->execute($query);
		$this->disconnect();
		
		return (mysqli_num_rows($res) == 0 );
				
	}
	
	function editarUsersNome($id, $novoNome){
		$query = "update users set nome='$novoNome' where id = '$id'";
		$this->connect();
		$this->execute($query);
		$this->disconnect();
	}
	
	function editarUsersPwd($id, $novaPwd){
		$query = "update users set password='$novaPwd' where id = '$id'";
		$this->connect();
		$this->execute($query);
		$this->disconnect();
	}
}
?>