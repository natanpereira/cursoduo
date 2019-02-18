<?php
header('Content-type: text/html; charset=utf-8');
ini_set("display_errors",1);

include_once "funcoes.php";
include_once "configuracao.php";


if ($_POST){
		 $login = $_POST['login']; 
   		 $senha = $_POST['senha'];
   		 cadastrarUsuario($login,$senha);
 	   header("location: login.php");
	}

?>

<html>
<head>
<title> Cadastro de Usuário </title>
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
	<h2 align="center" >Cadastrar novo usuario</h2>
	<div class="container">
		<form method="post" action="cadastro.php">
			<div class="form-group">
				<label>Login</label>
				<input type="text" name="login" class="form-control" required="true"><br>
			</div>

			<div class="form-group">
				<label>Senha</label>
				<input type="password" name="senha" class="form-control" required="true"><br>
			</div>

		<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
		

</form>
</div>
</body>
</html>