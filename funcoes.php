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
	}elseif($linha == 12 - $coluna){
		echo 'X';
	}
	else
	echo 0;
}


function conexao($host,$usuario,$senha,$banco){


	mysql_connect($host,$usuario,$senha) or die("nao consegui conectar com o banco de dados");

	mysql_select_db($banco) or die("banco de dados nao encontrado");


}

function getAssoc($data){
	$retorno = [];
	while($a = mysql_fetch_assoc($data)){

		$retorno[] = $a;
	}
	return $retorno;	
}


function listaPacientes(){

	$sql = "SELECT * FROM pacientes";
	$data = mysql_query($sql);

	$retorno = getAssoc($data);
	
	return $retorno;

}

function cadastrarPacientes($nome,$cpf,$email){
	$string_sql = "INSERT INTO pacientes (id,nome,cpf,email) VALUES (null,'$nome','$cpf','$email')";

    mysql_query($string_sql);
}

function editarCadastro($id,$nome,$cpf,$email){
	$altPaciente = "UPDATE pacientes SET (nome, cpf,email) WHERE id = '$id'";

	mysql_query($altPaciente);
}

?>
