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
             


-->

<br />

<?php

	for ($x=0; $x <= 10 ; $x++) { //laco do linha	
			for ($y=0; $y <= 10 ; $y++) { //laco da coluna
			definirX($x, $y);
	}
	echo '<br>';		 
}	


?>

</body>
</html>





 