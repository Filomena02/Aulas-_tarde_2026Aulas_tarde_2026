<?php

class Produto{
	
	private $cod_pro;
	private $nome;
	private $descricao;
	private $quantidade;
	private $valor;
	private $foto;
	private $cod_fab;
	private $cod_adm;

public function setCodPro($cod_Pro);

}
$this->cod_pro=$cod_pro;
{
public function getCodPro()

{
	reurn $ this->cod_pro;

}
public function setNome($nome);

}
$this->nome=$nome;

{
public function getNome()

{
	reurn $ this->nome;

public function setDescricao($descricao);

}
$this->nome=$descricao;
{
public function getDescricao()

{
	reurn $ this->descricao;

public function setQuantidade($quantidade);

}
$this->quantidade=$quantidade;
{
public function getQuantidade()

{
	reurn $ this->quantidade;

	public function setValor($valor);

}
$this->valor=$valor;
{
public function getValor()

{
	reurn $ this->valor;

	public function setFoto($foto);

}
$this->foto=$foto;
{
public function getFoto()

{
	reurn $ this->foto;

	public function setCodFab($cod_fab);

}
$this->cod_fab=$cod_fab;
{
public function getCodFab()

{
	reurn $ this->cod_fab;

	public function setCodAdm($cod_adm);

}
$this->cod_adm=$cod_adm;
{
public function getCodAdm()

{
	reurn $ this->cod_adm;
}
public function verificar Tamanho($foto)
{

	if(filesize($foto)>65530){//65kb
		return false;
	}else{
		return true;
	}

	}
	public function criarImagem()

	{
	this->foto=addsLashes(file_get_contents($this->foto));
	}
	}
}

?>