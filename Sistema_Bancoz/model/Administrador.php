<?php

class Administrador{
private $cod_adm;
private $login;
private $senha;
private $nivel;

public function setCodAdm($cod_adm)
{
	$this->cod_adm=$cod_adm;
}
public function getCodAdm()
{
return $this->cod_adm;
}
public function setLogin($login)
{
	$this->login=$login;
}
public function getLogin()
{
return $this->login;
}

public function setSenha($senha)
{
	$this->senha=$senha;
}
public function getSenha()
{
return $this->senha;
}

public function setNivel($nivel)
{
	$this->nivel=$nivel;
}
public function getNivel()
{
return $this->nivel;
}

}
?>