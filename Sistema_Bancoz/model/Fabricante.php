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

	public function setEndereco($endereco)
	{
	 	  $this->endereco=$endereco;
	}
	public function getEndereco()
	{
	 return $this->endereco;
	}

	public function setTelefone($telefone)
	{
	 	  $this->telefone=$telefone;
	}
	public function getTelefone()
	{
	 return $this->telefone;
	}

	public function setCidade($cidade)
	{
	 	  $this->cidade=$cidade;
	}
	public function getCidade()
	{
	 return $this->cidade;
	}
	
	public function setCodAdm($cod_adm)
	{
	 	  $this->cod_adm=$cod_adm;
	}
	public function getCodAdm()
	{
	 return $this->cod_adm;
	}
		
}

?>