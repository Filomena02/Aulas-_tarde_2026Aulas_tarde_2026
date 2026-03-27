<?php require_once 'cabecalho.php'; ?>
<form action="media.php" method="GET">
<h1>Clacular media</h1>
	<p>Digite o nome do aluno:</p>
	<p><input type="text" name="nome" size="30"maxlength="30"required></p>
		<p>Digite a nota do primeiro trimestre;</p>
		<p><input type="number" name="nota1"min="0" max="10" step="0.1" required></p>
		<p>Digite a nota do segundo trimestre;</p>
		<p><input type="number" name="nota2"min="0" max="10" step="0.1" required></p>
		<p>Digite a nota do terceiro trimestre;</p>
		<p><input type="number" name="nota3"min="0" max="10" step="0.1" required></p>
		<p><input type="submit" name="botao"value="Enviar"></p>
	</form>
		<?php
		if(isset($_POST['botao'])){
		$nome=$_POST['nome'];
		$nota1=$_POST['nota1'];
		$nota2=$_POST['nota2'];
		$nota3=$_POST['nota3'];

		$media=($nota1+$nota2+$nota3)/3;

		echo "<section class='resposta'>";
		if($media>=60){
			echo "<p> Parabéns $nome, você está APROVADO! Media Final: $media </p>";

		}else{
			echo "<p> Que Pena! Você está REPROVADO! Media Final: $media </p>";
		}elese{

		}
		}
}
		
	
