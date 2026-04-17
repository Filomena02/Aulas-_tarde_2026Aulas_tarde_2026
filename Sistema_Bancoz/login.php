<?php require_once 'cabecalho.php';
require_once 'menu.php';
?>
<form action="login.php"method="POST">
<div id="loader"style="display:none;">
<img src="img/loader.gif">
</div>
<h1>login</h1>
<p>Digite o login:</label></p>
<p><input type="text"name="login"
	size="20"maxlength="20"
	patter="[a-zA-Z]{3,20}"
	title=" Somente letras, sem acentos ou caracteres especiais" id="login"required></p>
<p> Senha:</p>
<p><input type="password" name="senha" 
	size="10" maxlength="10"
	pattern="[0-9a-zA-Z_.]{5,10}"
	required></p>
	<p><imput type="submit" name="botão"
		value="Logar"></p>
</form>

<?




	
