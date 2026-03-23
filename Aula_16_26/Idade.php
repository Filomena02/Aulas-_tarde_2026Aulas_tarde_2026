<?php require_once'cabecalho.php';
$hoje=new DateTime(date("Y-m-d"));
$antes=date_modify($hoje,"-120 years");
?>
<form action="idade2.php" method="POST">
	<h1>Cálculo da idade</h1>
	<p> Digite seu nome:</p>
	<p><input type="text" name="nome" size="40" maxlength="40" required></p>
	<p> Digite o ano do nascimento</p>
	<p><input type="date"name="data_nasci" min="<?= $antes->format("Y-m-d")?>" max="<?=date("Y-m-d")?>" required></p>
	<p><input type="submit"name="botao"
		value="calcular"></p>
</form>

