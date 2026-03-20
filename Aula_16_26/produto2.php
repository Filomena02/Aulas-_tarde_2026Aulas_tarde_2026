<?php require_once'cabecalho.php';?>
<section class="resposta">
	<h1>total da compra</h1>h1>
	<?php
$nome=$_POST['nome'];
$quantidade=$_POST['quantidade'];
$preco=$_POST['preco'];
$total=$quantidade*$preco;
$total=number_format($total,2,",",".");
 echo "<p>Para o produto $nome o total fica:,</p>";
 echo"<p> $total</p>";
	?>
	<a href="produto.php">Novo Calculo?</a>
</section>
</body>
</html>
