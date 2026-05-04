<?php require_once 'cabecalho.php';
require_once 'menu.php';

if (isset($_GET['cod_fab'])) {
	require_once 'MODEL/Fabricante.php';
	require_once 'PERSISTENCE/FabricantePA.php';
	$fabricante=new Fabricante();
	$fabricantepa=new FabricantePA();
	$fabricante->setCodFab($_GET['cod_fab']);
	$consulta=$fabricantepa->buscar(
		$fabricante->getCodFab(), 'cod_fab');
	$linha=$consulta->fetch_assoc();
	$fabricante->setNome($linha['nome']);
	?>
	<form action="excluirfab.php" method="POST" id="form">
		<div id="loader" style="display: none">
			<img src="IMG/loader.gif">
		</div>
		<h1>Excluir</h1>
		<p>Tem certeza que deseja excluir o
			<big><?=$fabricante->getNome() ?></big></p>
			<input type="hidden" name="cod_fab" value="<?= $fabricante->getCodFab() ?>">
			<p>
				<input type="submit" name="botao" value="Sim">
				<button><a href="buscar_fab.php?termo=
					<?= $fabricante->getCodFab() ?>
					&campo=cod_fab&botao=Buscar">
				Não</a></button>
			</p>
	</form>
	<script src="js/loader.js"></script>
	<?php

	}else if (isset($_POST['botao'])){

	require_once 'model/Fabricante.php';
	require_once 'persistence/FabricantePA.php';
	$fabricante=new Fabricante();
	$fabricantepa=new FabricantePA();

	$fabricante->setCodFab($_POST['cod_fab']);
	if($fabricantepa->excluir($fabricante->getCodFab())){
	echo"<h2> Excluido com sucesso!
	<a href='buscarfab.php'>Outro?</a></h2>";

	}else{
		
		echo"<h2>Erro na tentativa de excluir!
		<a href='buscarfab.php?termo=".$fabricante->getCodFab()."&campo=cod_fab&
		botao=Buscar'>Tente Novamente!</a></h2>";
	}
}else{
	echo"<h2>Ops aconteceu um erro: 404!
	<a href='index.php'>voltar</a></h2>";
	//header('location:index.php');
	}
?>
</body>
</html>