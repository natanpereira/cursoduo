<?php
include_once "funcoes.php";
include_once "configuracao.php";

$pacientes = listaPacientes();

?>

<!DOCTYPE html>
<html>
<head>	
	<title>Pacientes</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>    
	<link href="css/style.css" rel="stylesheet">

</head>
<body background="fundo_linhas.jpg">

<h1 align="center">Pacientes</h1>


<div class="container">
<dl>
<a href="novo.php" class="btn btn-primary">Novo paciente</a>
</dl>
<table class="table table-striped table-bordered " id="pacientes">

<caption>Pacientes</caption>
	<tr>
		<th>Nome</th>
		<th>Cpf</th>
		<th>Email</th>
		<th>Acoes</th>
	</tr>
<?php foreach($pacientes as $valor): ?>
	<tr>
		<td><?php echo $valor['nome']?></td>
		<td><?php echo $valor['cpf']?></td>
		<td><?php echo $valor['email']?></td>
		<td>
			<a href="editar.php?id=<?=$valor['id']?>"><button class="btn btn-success">EDITAR</button></a>
			<a href="pacientes.php?id=<?=$valor['id']?>"<?php $id_del = $_GET['id']; deletaPacientes($id_del);?>><button class="btn btn-success" onclick="Refresh()">EXCLUIR</button></a>	
		</td>

	</tr>
 <?php endforeach?>

</table>

</div>


<script type="text/javascript">
	
	$(document).ready(function() {
    $('#pacientes').dataTable();
} );
</script>
</body>
</html>