<?php require_once 'cabecalho.php';?>
<form action="produto2.php" method="post">
	<h1>Compra de Produtos</h1>
	<p> digite o nome do produto:</p>
	<p><input type="text" name="nome" size="40"maxlength="40" required></p>
	<p>Digite a quantidade do produto:</p>
<p><input type="number" name="quantidade"
	min="1" max="30" step="1" required></p>
	<p>Digite o preço unitário R$:</p>
	<p><input type="number" name="preco"
		min="0.01" max="1000.00" step="0.01"required></p>
		<p><input type="submit" name="botao" value="comprar">
			<p>
				<from>
				</body>

