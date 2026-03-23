<?php require_once'cabecalho.php';?>
<section class="resposta">
	<h1>Calculo da idade</h1>
	<p> Digite seu nome:</p>p>
	<p><imput type="text"name="nome" size="40 maxlength="40 required></p>
	<form action="idade2.php" method="POST">
	<h1>Cálculo da idade</h1>
	<p> Digite seu nome:</p>
	<p><input type="text" name="nome" size="40" maxlength="40" required></p>
	<p> Digite o ano do nascimento</p>
	<p><input type= "data"=name="data_nasci" min="<?= $antes->format("Y")?>" max="<?=date("Y")?>" required></p>
	<p><input type="submit"name="botao"
		value="calcular"></p>
</form>
</body>
</html>