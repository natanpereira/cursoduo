<?php
include_once "funcoes.php";
include_once "configuracao.php";

if($_GET){
$id_mostra = $_GET['id'];
}

if ($_POST){
		 $mostra = $_POST['id'];
		 $nome_edit = $_POST['nome']; 
   		 $cpf_edit = $_POST['cpf'];
   		 $email_edit = $_POST['email'];
 	   	 editarCadastro($mostra,$nome_edit,$cpf_edit,$email_edit);
 	header("location: pacientes.php");
	}
$mostraPaciente = mostraPacientes($id_mostra);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar Cadastro Paciente</title>
<link rel="stylesheet" href="mdl/material.min.css">
	<script src="mdl/material.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>    
	<link href="css/style.css" rel="stylesheet">

</head>
<body background="fundo_linhas.jpg"> 
<h1 align="center" >Editar Cadastro Paciente</h1>
<div class="container">

<?php foreach($mostraPaciente as $valor): ?>

		<form method ="post" action="editar.php">
		<div class="form-group">
			<label>Id</label>
			<input type="text" name="id" class="form-control" readonly="true" value="<?php echo $valor['id'];?>" />
		</div>
		<div class="form-group">
			<label>Nome</label>
			<input type="text" name="nome" class="form-control" required="true" value="<?php echo $valor['nome'];?>"  />
		</div>

		<div class="form-group">
			<label>CPF</label>
			<input type="text" name="cpf" class="form-control" required="true" value="<?php echo $valor['cpf'];?>"  />
		</div>

		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" class="form-control" required="true" value="<?php echo $valor['email'];?>"  />			
		</div>
		
		<div class="form-group">
			<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Alterar</button>	
			
		<?php endforeach?>	
		</div>
	</form> 
</div>
<a href="pacientes.php"><button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Voltar</button></a>
</body>
</html>

