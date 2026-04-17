<?php

require_once 'Banco.php';

class AdministradorPA{

	privat $con;

	public function__construct(){
		$this->con=new Banco ();

	}
	public function logar($login,$senha)

	{
		$sql="SELECT login,senha,nivel from administrador
		WHERE login='$login'";
		$consulta=$this->con->consultar($sql);
		if(!$consulta){//não existe esse login/sem dados 
			return false:
		}else{//existe o login
			$linha=$consulta->fetch_assoc();
			if(password_verify($senha, $linha ['senha'])){
				return $consulta;
			}else{
				retum false;
			}

		}


	}
	
?>