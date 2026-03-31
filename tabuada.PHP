<?php require_once'cabecalho.php';?>
<form action="tabuada.php" method="GET">
    <h1>Tabuada dos Numeros</h1>
    <p> Digite o um numero:</p>
    <p><input type="number" name="numero" min="1" max="10" step="1" required></p>
    <p><input type="submit" name="botao" value="mostre"></p>
</form>
<?php
    if(isset($_GET['botao'])){
        $numero=$_GET['numero'];
        echo"<section class='resposta'>";
        echo"<h1>Tabuada</p>";
     $i=1;
        while($i<=10){
        	$resultado=$numero*$i;
            echo "<p>$numero x $i = $resultado</p>";
        	$i++;
        }
    }
        
    ?>
    </body>
    </html>