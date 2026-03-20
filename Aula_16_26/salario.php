<?php require_once'cabecalho.php';?>
<form action="salario2.php" method="POST">
<h1> calculo do salario</h1>
<p>nome do funcionario:</p>
<p><input type="text" name="nome" size="" maxlength="40" required></p>
<p>Digite horas trabalhadas: </p>
<p><input type="number"name="horas" min="1" max="200" step="1" required></p>
<p>Digite o valor da horas em R$:</p>
<p><input type="number"name="valor" min="6"
	max="120" step="0.01" required></p>
<p><input type="submit"name="botao" 
	value="calcular"></p>

</form>
</body>
<html>
