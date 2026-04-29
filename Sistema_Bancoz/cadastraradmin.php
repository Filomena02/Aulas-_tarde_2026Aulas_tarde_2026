<?php require_once'cabecalho.php';
require_once 'menu.php';
?>
<form action="cadastraradmin.php"method="POST"
	id="form">
	<div id="loader" style="display:none;">
		<img src="img/loader.gif">
	</div>
		<h1>Cadastro de Administradores</h1>
		<p>Login:</p>
		<p><small>*Somente letras, sem acentos ou caracteres especiais no minimo 3, maximo 20</small></p>
		<p><input type="text"name="login"
		size="20" maxlength="20"
	pattern="[a-zA-Z]{3,20}"required.></p>
	<p>Senha:</p>
	<p><small> Letras  e numeros, underline(-) eponto (.) no minimo 5, máx 10 caracteres</small></p>
	<p><input type="password"name="senha"
		size="10" maxlength="10"
		pattern="[0-9a-zA-Z_.]{5,10}" required></p>
		<p> Redigite a senha:</p>
		<p><input type="password"name="confirmar"
		size="10" maxlength="10"
		pattern="[0-9a-zA-Z_.]{5,10}" required></p>
		<p><input type="submit"name="botao"
			value="Cadastrar">

</form>
<?php
	if(isset($_POST['botao'])){
	   require_once'model/Administrador.php';
	   $administrador=new Administrador();
	   $administrador->setLogin($_POST['login']);
	   $administrador->setSenha($_POST['senha']);

	 if($administrador->getSenha()==$_POST['confirmar']){
	   	require_once'persistence/AdministradorPA.php';
	   	$administradorpa=new AdministradorPA();
	   	if($administradorpa->verificarLogin(
	   	$administrador->getLogin())){ 
	   	$administrador->setCodAdm(
	   	$administradorpa->retornarUltimo());
	   	$administrador->criptografarSenha();
	   	$administrador->setNivel(2);
	   	if($administradorpa->cadastrar($administrador)){
	   			
	 echo"<h2> Administrador cadastrado com sucesso!</h2>";
	   		}else{

	echo"<h2> Erro na tentativa de cadastrar! por favor tente novamente!</h2>";
	}
}else{

	echo"<h2> Este login já esta em uso! Por favor tente outra!</h2>";
}
}else{

	 echo"<h2>A senha e a senha redigitada não conferem!</h2>";

}

}
	?>
	<script src="js/loader.js"></script>
	
</body>
</html>