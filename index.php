<?php
header('Content-type: text/html; charset=utf-8');
ini_set("display_errors",1);

include_once "funcoes.php";

$valorDoFormulario = @$_POST['media'];




//numerosPrimos(0,50);


?>

<!DOCTYPE html>
<html>
<head>
	<title>pagina inicial</title>
	<meta />
</head>
<body>

<form action="index.php" method="post">
<input type="text" ></input>	
<input type="submit" value="enviar"></input>
</form>
<?php echo media($valorDoFormulario);?>


<!-- exercico proxima aula
1234567891011 J

XOOOOOOOOOX  1
OXOOOOOOOXO  2
OOXOOOOOXOO  3
OOOXOOOXOOO  4
OOOOXOXOOOO  5
OOOOOXOOOOO  6
OOOOXOXOOOO  7
OOOXOOOXOOO  8
OOXOOOOOXOO  9
OXOOOOOOOXO  10
XOOOOOOOOXO  11
             I


-->

<br />

<?php

	for ($j=0; $j <= 10 ; $j++) { //laco do linha
		for ($i=0; $i <= 10 ; $i++) { //laco da coluna
		definirX($j, $i);
	}
	echo '<br>';
}


?>


</body>
</html>





 