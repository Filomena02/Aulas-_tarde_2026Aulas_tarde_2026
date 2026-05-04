<?php require_once'cabecalho.php';
require_once'menu.php';
if(isset($_GET['cod_fab'])) {

	require_once'model/Fabricante.php';
	require_once'persistence/FabricantePA.php';
	$fabricante=new Fabricante();
	$fabricantepa=new FabricantePA();
	$consulta=$fabricantepa->buscar($_GET['cod_fab'],
		'cod_fab');
	$linha=$consulta->fetch_assoc();
	$fabricante->setCodFab($linha['cod_fab']);
	$fabricante->setNome($linha['nome']);
	$fabricante->setEndereco($linha['endereco']);
	$fabricante->setTelefone($linha['telefone']);
	$fabricante->setCidade($linha['cidade']);
	

	?>

	<form action="alterarfab.php" method="POST"id="form">
		<div id="loader"style="display:none;">
			<img src="img/loader.gif">
		</div>
		<h1>Alterar Fabricante</h1>
		<p>Digite o nome:</p>
		<p><input type="text" name="nome"
			size="30" maxlength="30"
			pattern="[0-9a-zA-Z\s-çÇãÂéÉúÙóÒêÊ] {2,30}"
			value="<?=$fabricante->getNome()?>"
			required></p>
			<p> Endereco</p>
			<p><input type="text"name="endereco"
				size="70" maxlength="70"
				pattern="[0-9a-zA-Z\s-çÇãÂéÉúÙóÒêÊ] {3,70}"
				value="<?=$fabricante->getEndereco()?>"
				required></p>
				<p>Telefone:</p>
				<p><input type="text"name="telefone"
					size="14" maxlength="14"
					Pattern="\([0-9]{2}\)[0-9]{4,5}-[0-9]{4}"
					value="<?=$fabricante->getTelefone()?>"
					id="telefone" required></p>
					<p>Cidade:</p>
					<p><input type="text"name="cidade"
						size="30" maxlength="30"
						Pattern="[a-zA-Z\s]{3,30}"
						value="<?=$fabricante->getCidade()?>">
						<p><input type="submit"name="botao"
							value="Alterar"></p>
							<p><input type="hidden" name="cod_fab" value="<?=$fabricante->getCodFab()?>" >
						</form>
						<script src="js/loader.js"></script>
						<?php

					}else if(isset($_POST['botao'])){
						require_once'model/Fabricante.php';
						require_once'persistence/FabricantePA.php';
						$fabricante=new Fabricante();
						$fabricantepa=new FabricantePA();

						$fabricante->setCodFab($_POST['cod_fab']);
						$fabricante->setNome($_POST['nome']);
						$fabricante->setEndereco($_POST['endereco']);
						$fabricante->setTelefone($_POST['telefone']);
						$fabricante->setCidade($_POST['cidade']);
						$fabricante->setCodAdm($_COOKIE['administrador']);

						if ($fabricantepa->alterar($fabricante)){
							echo"<h2> Fabricante alterado com sucesso!
							Buscar <ahref='buscarfab.php'>outro</a>?</h2>";

						}else{

							"<h2>Erro na tentativa de alterar!
							Tente <a href='buscarfab.php?termo=".
							$fabricante->getCodFab()."&camo=cod_fab&botao=Buscar'>
							novamente</a></h2>";

						}

					}else{

						echo"<h2>Ops! Algo deu errado! Erro 404!
						<a herf='index.php'>Volte</a></h2>";
						//header ('location: index.php');

					}

				?>