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


function editarCadastro($mostra,$nome_edit,$cpf_edit,$email_edit){
	$altPaciente = "UPDATE pacientes SET nome='$nome_edit', cpf='$cpf_edit',email='$email_edit' WHERE id = '$mostra'";

	mysql_query($altPaciente);
}


function deletaPacientes($id_del){
	$del = "DELETE  FROM pacientes WHERE id='$id_del'";
	mysql_query($del);

}


function mostraPacientes($id_mostra){
		$sql_mostra = "SELECT * FROM pacientes WHERE id='$id_mostra'";
		$data_mostra = mysql_query($sql_mostra);

		$retorno_mostra = getAssoc($data_mostra);
	
	return $retorno_mostra;
}

function cadastrarUsuario($login, $senha){
	$string_sql = "INSERT INTO usuario (id_usuario,login,senha_usuario) VALUES (null,'$login','$senha')";

    mysql_query($string_sql);
}

?>
