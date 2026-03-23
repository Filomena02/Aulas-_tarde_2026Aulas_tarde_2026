<?php require_once'cabecalho.php';?>
<section class="resposta">
	<h1> lucro do taxista</h1>
	<?php
	$odoi=$_GET['odoi'];
	$odoi=$_GET['odof'];
	$recebido=$_GET['recebido'];
	$gasolina=$_GET['gasolina'];
	$Km=$odof-odoi;
	$lucro=$recebido-$gasolina;
	$lucro=number-format(lucro,2,",",",.");
	echo "<p> Foram andados $Km Km e o Lucro é R$ $lucro</p>";
	?>
	<a href="taxista.php">novo?</a>
</section>
</body>
</html>


