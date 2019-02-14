<?php
include_once "funcoes.php";
include_once "configuracao.php";

  $id = $_GET['id'];


if ($_POST){
		 $nome = $_POST['nome']; 
   		 $cpf = $_POST['cpf'];
   		 $email = $_POST['email'];
 	   	 editarCadastro($id,$nome,$cpf,$email);
 	   header("location: pacientes.php");
	}
print_r($id);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar Cadastro Paciente</title>
</head>
<body>
<div class="container">
	<form method ="post" action="editar.php">
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
			<button type="submit">Alterar</button>	
			
		</div>
	</form> 
</div>
<a href="pacientes.php"><button type="submit" class="btn btn-success">Voltar</button></a>
</body>
</html>

