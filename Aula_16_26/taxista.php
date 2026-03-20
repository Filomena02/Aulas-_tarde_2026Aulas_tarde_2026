<?php require_once'cabecalho.php';?>
<form action="Taxista.php" method="POST">
	<h1>calculo do lucro</h1>
	<p> digite o odômetro inicial:</p>
	<p><input type="number" name="odoi" min="1" max="9999999" required></p>
	<p> digite o odômetro final:</p>
	<p><input type="number" name="odof" min="1" max="9999999" required></p>
	<p>preço da gasolina:</p>
<p><input type="number" name="gasolina"
	min="6.80" max="300.00" step="1" required></p>
	<p>Digite o valor recebido dos passageiros R$:</p>
	<p><input type="number" name="recebido"
		min="0.01" max="5000.00" step="0.01"required></p>
		<p><input type="submit" name="botao" value="calcular"></p>
				</form>
				</body>
				</html>