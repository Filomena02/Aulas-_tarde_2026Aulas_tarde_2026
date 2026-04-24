<?php require_once 'cabecalho.php';
require_once 'menu.php';
?>
<form action="login.php" method="POST" id="form">
	<div id="loader" style="display: none;">
		<img src="img/loader.gif">
	</div>
	<h1>Login</h1>
	<p><label for="login">Digite o login:</label></p>
	<p><input type="text" name="login"
		size="20" maxlength="20"
		pattern="[a-zA-Z]{3,20}"  
		title="Somente letras, sem acentos ou caracteres
		especiais" id="login" required></p>
	<p>Senha:</p>
	<p><input type="password" name="senha"
		size="10" maxlength="10"
		pattern="[0-9a-zA-Z_.]{5,10}"
		required></p>
	<p><input type="submit" name="botao" 
		value="Logar"></p>	
</form>
<?php
	if (isset($_POST['botao'])) {
		require_once'model/Administrador.php';
		require_once'persistence/AdministradorPA.php';
		$administrador=new Administrador();
		$administradorpa=new AdministradorPA();
		$administrador->setLogin($_POST['login']);
		$administrador->setSenha($_POST['senha']);
		$consulta=$administradorpa->logar(
			$administrador->getLogin(),$administrador->getSenha());
		if(!$consulta){
			echo "<h2>Login ou senha incorreto!</h2>";
		}else{
			$linha=$consulta->fetch_assoc();
			$administrador->setCodAdm($linha['cod_adm']);
			$administrador->setNivel($linha['nivel']);
			$administrador->logar();
			echo "<h2>Login com sucesso!</h2>";
			echo "<meta http-equiv='refresh' 
			content='2;url=index.php'>";
		}
	}
?>
<script src="js/loader.js"></script>
</body>
</html>