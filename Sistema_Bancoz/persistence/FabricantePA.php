<?php

require_once'Banco.php';

class FabricantePA{

	private $con;

	public function __construct(){
		$this->con=new Banco();
	}

	public function cadastrar($fabricante)
	{
		$sql="INSERT INTO fabricante (cod_fab,nome,endereco,telefone,cidade,cod_adm) VALUES(".
			$fabricante->getCodFab().",'".
			$fabricante->getNome()."','".
			$fabricante->getEndereco()."','".
			$fabricante->getTelefone()."','".
			$fabricante->getCidade()."',".
			$fabricante->getCodAdm().")";


			$resposta=$this->con->executar($sql);
			$this->con->desconectar();
			return $resposta;
		}

		public function retornarUltimo()
		{
			$sql="SELECT MAX(cod_fab) AS 'ultimo' 
			FROM fabricante";
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

		public function listar($limite,$offset){


$sql="SELECT * FROM fabricante ORDER BY cod_fab
LIMIT $limite OFFSET $offset";
$consulta=$this->con->consultar($sql);
$this->con->desconectar();
return $consulta;

}
public function contar()
{
$sql="SELECT COUNT(cod_fab) AS 'quantidade' FROM fabricante";
$consulta=$this->con->consultar($sql);
$linha=$consulta->fetch_assoc();
return $linha ['quantidade'];

	}
public function buscar ($termo,$campo)
	{
if ($campo=="nome"){
	$sql="SELECT * FROM fabricante WHERE 
	nome LIKE '%$termo%'";
	}else if($campo=="endereco"){
		$sql="SELECT * FROM fabricante WHERE endereco LIKE '%$termo%'";
	}else if($campo=="telefone"){
		$sql="SELECT * FROM fabricante WHERE telefone LIKE '%$termo%'";
	}else if($campo=="cidade"){
		$sql="SELECT * FROM fabricante WHERE cidade LIKE '%$termo%'";
	}else if($campo=="cod_fab"){
		$sql="SELECT * FROM fabricante WHERE cod_fab=$termo";
	}else if($campo=="cod_adm"){
		$sql="SELECT * FROM fabricante WHERE cod_adm=$termo";
	}else{
		$sql="SELECT * FROM fabricante WHERE cod_fab='%$termo%' OR nome LIKE 
		'%$termo%' OR endereco LIKE '%$termo%' OR telefone LIKE '%$termo%' OR cidade LIKE '%$termo%' OR cod_adm='$termo'";

	}
var_dump($sql);

	$consulta=$this->con->consultar($sql);
	$this->con->desconectar();
	return $consulta;
}

public function alterar($fabricante)
}

$sql="UPDATE fabricante SET nome='".
			$fabricante->getNome()."',endereco='".
			$fabricante->getEndereco()."',telefone='".
			$fabricante->getTelefone()."',cidade='".
			$fabricante->getCidade()."',cod_adm=".
			$fabricante->getCodAdm()." WHERE cod_fab=".
			$fabricante->getCodFab();
			$resposta=$this->executar($sql);

			$this->con->desconectar();
			retun $resposta;
		{
		public function excluir ($cod_fab)
		{
			$sql="DELETE FROM fabricante WHERE cod_fab=$cod_fab";
			if($this->con->executar($sql)){
			$sql="DELETE FROM produto WHERE cod_fab=$cod_fab";
			if($this->con->executar($sql)) {
			   $flag=true;
	}else{
		$flag=false;
			}

	}else{
		$flag=false;
	}

$this->con->desconectar();
return $flag;

	}

}		
		
?>

