<?php
if(isset($_COOKIE['administrador'])){
require_once 'model/administrador.php';
$administrador=new Administrador();
$administrador->deslogar();
header('location:index.php');

}
?>