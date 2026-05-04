<?php require_once 'cabecalho.php';
require_once'menu.php';
?>
<form action="buscarfab.php" method="GET" id="form">
	<div id="loader"style="display: none;">
		<img src="img/loader.gif">
	</div>
	<h1>Busca</h1>
	<p> Buscar o que ?</p>
	<p><input type="search" name="termo" size="40" maxlength="70"
		pattern="[0-9a-zA-Z\s,-çÇãÃéÉúÚóÓêÊ\)\(]{1,70}" required></p>
		<p>que é um...</p>
		<p>
			<input type="radio"name="campo" value="cod_fab">Código
			<input type="radio"name="campo" value="nome">Nome
			<input type="radio"name="campo" value="endereco">Endereço
			<input type="radio"name="campo" value="telefone">Telefone
			<input type="radio"name="campo" value="cidade">Cidade
			<input type="radio"name="campo" value="cod_adm">Cod.Admin
		</p>
		<p><input type="submit"name="botao" value="Buscar"></p>
							</form>
							<?php
							if (isset($_GET['botao'])){

								require_once 'persistence/FabricantePA.php';
								$fabricantepa=new FabricantePA();
								if(isset($_GET['campo'])&&$_GET['campo']!=""){
									$consulta=$fabricantepa->buscar($_GET['termo'], $_GET['campo']);
								}else{
									$consulta=$fabricantepa->buscar($_GET['termo'],'');
								}

								if(!$consulta){
									echo"<h2>Nenhum resultado correspondente!</h2>";
								}else{
									require_once'model/Fabricante.php';
									$fabricante=new Fabricante();

									echo "<table>";
									echo "<tr>";
									echo "<th>Código</th>";
									echo "<th>Nome</th>";
									echo "<th>Endereço</th>";
									echo "<th>Telefone</th>";
									echo "<th>Cidade</th>";
									echo "<th>Administrador</th>";
									echo "<th>Alterar?</th>";
									echo "<th>Excluir?</th>";
									echo "</tr>";

									while ($linha=$consulta->fetch_assoc()){
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
										echo"<td><a href='alterarfab.php?cod_fab=".
											$fabricante->getCodFab()."'>Sim</a></td>";
										echo"<td><a href='excluirfab.php?cod_fab=".
											$fabricante->getCodFab()."'>Sim</a></td>";
										echo "</tr>";
									} 

									echo"</table>";

								}
							}

							?>

							<Script scr="js/loader.js"></script>

						</body>
						</html>



