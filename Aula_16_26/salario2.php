<?php require_once'cabecalho.php';?>
<section class="resposta">
	<h1>calculo do salario</h1>
	<?php

$nome=$_POST['nome'];
$horas=$_POST['horas'];
$valor=$_POST['valor'];
$salario=$horas*$valor;
$salario=number_format($salario,2,",",".");
$valor=number_format($valor,2,",",".");
echo"<p>Para o(a) $nome com $horas horas à R$ $valor p/ horas</p>";
 echo"<p>O Salario Bruto fica R$ $salario</p>";
	?>
	<a href="salario.php">Novo funcionario?</a>
</section>
</body>
</html>
 