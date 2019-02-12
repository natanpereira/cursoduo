<?php
header('Content-type: text/html; charset=utf-8');
ini_set("display_errors",1);

include_once "funcoes.php";

$valorDoFormulario = @$_POST['media'];

//numerosPrimos(0,50);

echo "<pre>";
$dadosPacienteJoao["id"] = "12";
$dadosPacienteJoao["nome"] = "Joao Lucas";
$dadosPacienteJoao["cpf"] = "1212121112";
$dadosPacienteMaria["nome"] = "Maria";
$dadosPacienteMaria["cpf"] = "3453453453";
// $dadosPacientes[] = $dadosPacienteJoao;
// $dadosPacientes[] = $dadosPacienteMaria;
//print_r($dadosPacientes[1]["nome"]);
$dadosPaciente[0]['nome'] = "Jose";
$dadosPaciente[0]['cpf'] = "3453453453";
$dadosPaciente[1]['nome'] = "marieta";
$dadosPaciente[1]['cpf'] = "65765756756";
$dadosPaciente[12]['nome'] = "renato gonçalves";
$dadosPaciente[12]['cpf'] = "65765756756";
$dadosPaciente[3]['nome'] = "paulo";
$dadosPaciente[3]['cpf'] = "65765756756";
$dadosPaciente[40]['nome'] = "leidiane";
$dadosPaciente[40]['cpf'] = "65765756756";
//print_r($dadosPaciente);
// for($i = 0; $i < count($dadosPaciente); $i++){
	
// 	echo $dadosPaciente[$i]['nome'];
// 	echo $dadosPaciente[$i]['cpf'];
// 	echo "<br>";
// }
foreach( $dadosPaciente as $key => $valor){
	
	echo $valor['nome']." ";
	echo $valor['cpf'];
	echo "<br>";
}









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

<br>
<br>

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