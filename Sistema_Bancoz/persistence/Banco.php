<?php
class banco{

	private $url;
	private $ususario;
	private $senha;
	private $banco_dados;
	Private $con;

	public function__construct(){
		$this->url="localhost";
		$this->usuario="root";
		$this->=senha"";
		$this->banco_dadoa="bancoz";
		$this->con=new mysqli($->url,$this->ususario,$this->senha,$this->banco_dados);
		$this->con->set_charset('utf8mb4');
}
public function executar($sql)
{
	if($this->con->query( $sql)){
		return true;

	}else{
		return false;

	{

	}

public function consultar($sql)
{
	$consulta=$this->con->query($sql)
	if($consulta->num_rows>0){
		return$consulta;
	}else{
		return false;

	}

}
public function desconectar()
	{
		$this->con->close();
	}
?>