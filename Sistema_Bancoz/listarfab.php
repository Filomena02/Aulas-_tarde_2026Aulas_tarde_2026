<?php require_once 'cabecalho.php';
require_once 'menu.php';

require_once 'persistence/FabricantePA.php';
$fabricantepa=new FabricantePA();
$total=$fabricantepa->contar();
if ($total<=0) {
	echo "<h2>Não há fabricantes cadastrados!
	Cadastre-os primeiro!</h2>";
}else{
	if (isset($_GET['pagina'])) {
		$pagina=$_GET['pagina'];
	}else{
		$pagina=1;
	}

	$limite=2;
	$offset=($pagina-1)*$limite;
	$consulta=$fabricantepa->listar($limite,$offset);
	require_once 'model/Fabricante.php';
	$fabricante=new Fabricante();

	echo "<table>";	
	echo "<tr>";	
	echo "<th>Código</th>";	
	echo "<th>Nome</th>";	
	echo "<th>Endereço</th>";	
	echo "<th>Telefone</th>";	
	echo "<th>Cidade</th>";	
	echo "<th>Administrador</th>";
	echo "</tr>";

	while ($linha=$consulta->fetch_assoc()) {
		$fabricante->setCodFab($linha['cod_fab']);
		$fabricante->setNome($linha['nome']);
		$fabricante->setEndereco($linha['endereco']);
		$fabricante->setTelefone($linha['telefone']);
		$fabricante->setCidade($linha['cidade']);
		$fabricante->setCodAdm($linha['cod_adm']);

		echo "<tr>";
		echo "<td>".$fabricante->getCodFab()."</td>";
		echo "<td>".$fabricante->getNome()."</td>";
		echo "<td>".$fabricante->getEndereco()."</td>";
		echo "<td>".$fabricante->getTelefone()."</td>";
		echo "<td>".$fabricante->getCidade()."</td>";
		echo "<td>".$fabricante->getCodAdm()."</td>";
		echo "</tr>";
	}
	echo "</table>";

	echo "<section>";
	if($pagina>1){
		$voltar=$pagina-1;
		echo "<a href='listarfab.php?pagina=$voltar' class='botao_pag'> 
		&lt;&lt;</a>";
	}
	echo "<span class='numero'> $pagina </span>";
	$total_pag=ceil($total/$limite);
	if($pagina<$total_pag){
		$proxima=$pagina+1;
		echo "<a href='listarfab.php?pagina=$proxima' class='botao_pag'>
		&gt;&gt;</a>";
	}
	echo "</section>";
}
?>
</body>
</html>