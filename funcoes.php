<?php
function somar($a,$b){
	 $resultado = $a + $b;
	return $resultado;
}

 function media($nota ){

 	$nota *= somar(10,001);

 	if($nota > 5){
 		$nota = "aprovado";
 	}elseif($nota === 5){
 		$nota = "é exatamente a $nota";
 	}elseif($nota == 5){
 		$nota = "é somente $nota";
 	}else{
 		$nota = "nenhuma das anteriores";
 	}

 	return $nota;
 }

function definirPrimo($numero){
	
	$contador = 0;

	for ($i = 1 ; $i <= 50; $i++) { 
	
		if ($numero % $i == 0){ 
			$contador ++;
		}
	}

	if($contador <= 2 && $contador > 0){
		return "<br>".$numero;
	}	
	return "";
}

function numerosPrimos ($inicial, $final){

	for ($i = $inicial; $i <= $final ; $i++) { 
		
		echo definirPrimo($i);
	}
}


function definirX ($linha,$coluna){
	if($linha == $coluna){
		echo 'X';
	}elseif($linha == 10 - $coluna){
		echo 'X';
	}
	else
	echo 0;
}

?>