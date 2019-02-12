<?php
include_once "funcoes.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Pacientes</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	
<table class="table table-striped table-bordered " id="pacientes">
<caption>teste</caption>
	<tr>
		<th>Nome</th>
		<th>Cpf</th>
		<th>Email</th>
		<th>Acoes</th>
	</tr>

	<tr>
		<td>Maria</td>
		<td>36925814785</td>
		<td>maria@maria.com</td>
		<td>novo</td>

	</tr>

	<tr>
		<td>Joao Lucas</td>
		<td>25814736987</td>
		<td>joao@lucas.com</td>
		<td>novo</td>

	</tr>

	<tr>
		<td>jose</td>
		<td>77894521398</td>
		<td>jose@maria.com</td>
		<td>novo</td>

	</tr>

	<tr>
		<td>marieta</td>
		<td>25963478218</td>
		<td>marieta@maria.com</td>
		<td>novo</td>

	</tr>
	
</table>

</div>

<script type="text/javascript">
	
	$(document).ready(function() {
    $('#pacientes').DataTable();
} );
</script>
</body>
</html>