<?php

require_once'Banco.php';

class AdministradorPA{

	private $con;

	public function __construct(){
		$this->con=new Banco();
	}

	public function logar($login,$senha)
	{                   
		$sql="SELECT cod_adm,login,senha,nivel FROM administrador
		WHERE login='$login'";
		$consulta=$this->con->consultar($sql);
		if(!$consulta){//não existe esse login/sem dados
			return false;
		}else{ //existe o login
			$linha=$consulta->fetch_assoc();
			if(password_verify($senha, $linha['senha'])){
				return $this->con->consultar($sql);
			}else{
				return false;
			}
		}
	}

	public function cadastrar($administrador)
	{
		$sql="INSERT INTO administrador (cod_adm,
			login,senha,nivel) VALUES(".
			$administrador->getCodAdm().",'".
			$administrador->getLogin()."','".
			$administrador->getSenha()."',".
			$administrador->getNivel().")";

		//var_dump($sql); concatenação
			$resposta=$this->con->executar($sql);
			$this->con->desconectar();
			return $resposta;
		}
		public function retornarUltimo()
		{
			$sql="SELECT MAX(cod_adm) AS 'ultimo' FROM administrador";
			$consulta=$this->con->consultar($sql);
			if(!$consulta){
				return 1;
			}else{
				$linha=$consulta->fetch_assoc();
				if($linha['ultimo']!=NULL){
					return $linha['ultimo']+1;
				}else{
					return 1;
				}

			}

		}


		public function verificarLogin($login)
		{
			$sql="SELECT login FROM administrador 
			Where login='$login'";
			$consulta=$this->con->consultar($sql);
			if(!$consulta){//não existe login}
			return true;
		}else{
			return false;
		}

		}

	}


?>





