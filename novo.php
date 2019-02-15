<?php
include_once "funcoes.php";
include_once "configuracao.php";
   
	if ($_POST){
		 $nome = $_POST['nome']; 
   		 $cpf = $_POST['cpf'];
   		 $email = $_POST['email'];
 	   cadastrarPacientes($nome,$cpf,$email);
 	   header("location: pacientes.php");
	}
     
?>

<!DOCTYPE html>
<html>
<head>
	<title>Novo Paciente</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>


</head>
<body background="fundo_linhas.jpg">
<h1 align="center">Cadastrar Novo Paciente</h1>
<div class="container">
	<form method ="post" action="novo.php">
		<div class="form-group">
			<label>Nome</label>
			<input type="text" name="nome" class="form-control" required="true" value="" placeholder="Digite o nome do paciente" />
		</div>

		<div class="form-group">
			<label>CPF</label>
			<input type="text" name="cpf" class="form-control" required="true" value="" placeholder="Digite o cpf" />
		</div>

		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" class="form-control" required="true" value="" placeholder="Digite o email" />			
		</div>
		
		<div class="form-group">
			<button type="submit" class="btn btn-success">Enviar</button>	
			
		</div>
	</form> 
	
</div>
<a href="pacientes.php"><button type="submit" class="btn btn-success">Voltar</button></a>
</body>
</html>