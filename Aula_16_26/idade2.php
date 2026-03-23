<?php require_once'cabecalho.php';?>
<section class="resposta">
	<h1> idade</h1>

	<?php
	$nome=$_POST['nome'];
	$data_nasci=new DateTime($_POST['data_nasci']);
	$data_atual=new DateTime(date("Y-m-d"));
	$idade=$data_atual->diff($data_nasci)->y;
	echo"<p>Caro (a) $nome sua idade é $idade</p>";
?>
<a href="idade.php">Outra pessoa?</a>
</section>
</body>
</html>
