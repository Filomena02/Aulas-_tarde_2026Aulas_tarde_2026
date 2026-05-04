<?php require_once'cabecalho.php';
require_once 'menu.php';
require_once;'persistence/FabricantePA.php';
$fabricantepa=new FabricantePA();
$lista=$fabricantepa->listar Nomes();
if(!$lista){

	echo"<h2>Não há fabricantes cadastrados!
	Cadastere-os primeiro!</h2>";

}else{
	?>
	<form action="cadastrarpro.php" method="POST"
	id="form" enctype="multipart/form-data">
	<div id="img/loader.gif">

	</div>
<h1> cadastro de produto</h1>
<p> Nome do Produto</p>
<p><input type="text" name="nome"
	size="30" maxlength="30"
	pattern="[0-9a-zA-Z\s-.çáÁéÉíÍóÓúÚãÃõÕ]{2,30}"
	require></p>
	<p>Descricao:</p>
	<p><textarea cols="60" rows="4" maxlength="240"name="descricao"required></textarea>
	<p>Qualidadpe:</p>
	<p><input type="number"name="quantidade"
	min="1" max="9999" required></p>
	<p> Valor unitário:</p>
	<p><input type="numeber" name="valor"
		min="0.01" max="9999.99" step="0.01"
		required></p>
		<p>Foto:</p>
		<p>input type="file"name="foto"
			accept=".jpg,.jpeg,.gif,.bmp.,png." required></p>
			<p> Fabricante:</p>
			<?php

			echo"<select name='cod_fab' required.";
			while($linha=$lista->fetch_assoc()){
				echo"<option value='".$linha['cod_fab'].
				"'>".$linha['nome']."</option>";

			}

echo"</select>";
?>
<p> <input type="submit"name="botao"namevalue="Cadastrar"></p>
</form>
<?php
}
?>