<?php

require_once'Banco.php';

class ProdutoPA{

	private $con;

	public function__contruct() 
	{
	$this->con=new Banco();
	}

public function cadastrar($produto)
{
$sql="INSERT INTO produto (nome,descricao,
	quantidade,valor,foto,cod_fab_adm) VALUES(".
	$produto->getNome()."','".
	$produto->getDescricao()."',".
	$produto->getQuantidade().",".
	$produto->getValor().",'".
	$produto->getFoto()."',".
	$produto->getCodFab().",".
	$produto->getCodAdm().")";
	//var_dup($sql); ProdutoPA
	$resposta=$this->con->executar(sql);
	$this->desconectar();
	return $resposta;
	}


}


?>