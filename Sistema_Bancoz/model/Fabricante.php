<?php
class Fabricante{

	private $cod_fab;
	private $nome;
	private $enderco;
	private $telefone;
	private $cidade;
	private $cod_adm;

	
	public function setCodFab($cod_fab)
	{
	 	 $this->cod_fab=$cod_fab;
	}
	public function getCodFab()
	{
	 	return $this->cod_fab;
	}

	public function setNome($nome)
	{
	 	  $this->nome=$nome;
	}
	public function getNome()
	{
	 return $this->nome;
	}

	public function setEndereco($endereco){
	  
	  $this->endereco=$endereco;
	}

	 public function getEndereco()
	 {
	 	return $this->endereco;

	}
	 	
	
	
	
}

?>