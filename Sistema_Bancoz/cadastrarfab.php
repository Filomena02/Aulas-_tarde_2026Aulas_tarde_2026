<?php require_once 'cabecalho.php';
require_once 'menu.php';
?>
<form action="cadastrarfab.php" method="POST"
id="form">
<div id="loader"style="display:none;">
	<img src="img/loader.gif">
</div>
<h1> Cadastro de Fabricante</h1>
<p>Digite o nome:</p>
<p><input type="text" name="nome"
	size="30" maxlength="30"
	pattern="[0-9a-zA-Z\s-çÇãÂéÉúÙóÒêÊ] {2,30}"
	required></p>
	<p> Endereco</p>
	<p><input type="text"name="endereco"
	size="70" maxlength="70"
	pattern="[0-9a-zA-Z\s-çÇãÂéÉúÙóÒêÊ] {3,70}"
	required></p>
	<p>Telefone:</p>
	<p><input type="text"name="telefone"
		size="14" maxlength="14"
		Pattern="\([0-9]{2}\)[0-9]{4,5}-[0-9]{4}"
		id="telefone" required></p>
		<p>Cidade:</p>
	<p><input type="text"name="cidade"
		size="30" maxlength="30"
		Pattern="[a-zA-Z\s]{3,30}"
		required></p>

	<p><input type="submit"name="botao"
		value="Cadastrar"></p>

	</form>
	<?php
	if (isset($_POST['botao'])) {
		require_once'model/Fabricante.php';
		require_once 'persistence/FabricantePA.php';
		$fabricante=new fabricante();
		$fabricantepa=new FabricantePA();
		$fabricante->setCodFab($fabricantepa->retornarUltimo());
		$fabricante->setNome($_POST['nome']);
		$fabricante->setEndereco($_POST['endereco']);
		$fabricante->setTelefone($_POST['telefone']);
		$fabricante->setCidade($_POST['cidade']);
		$fabricante->setCodAdm($_COOKIE['administrador']);
		if($fabricantepa->cadastrar($fabricante)){

			echo"<h2>Fabricante cadastrado com sucesso! </h2>";
		}else{
			echo "<h2>Erro na tentativa de acdastrar! 
				Tente novamente!</h2>";
		}
}

?>