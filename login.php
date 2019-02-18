<?php 
header('Content-type: text/html; charset=utf-8');
ini_set("display_errors",1);

include_once "funcoes.php";
include_once "configuracao.php";

session_start();
  if($_POST){
  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = $_POST['senha'];
}

    if (isset($entrar)) {
             
      $verifica = mysql_query("SELECT * FROM usuario WHERE login = '$login' AND senha_usuario = '$senha'") or die("erro ao selecionar");
        if (mysql_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.php';</script>";
          die();
        }else{
           $_SESSION[‘logado’] = 1;
          setcookie("login",$login);
          header("Location:pacientes.php");
        }
    }
?>

<html>
<head>
<title> Login de Usuário </title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
</head>
<body background="fundo_linhas.jpg">

<div class="container">
<form method="POST" action="login.php">
      <div class="form-group">
        <label>Login</label>
        <input type="text" name="login" id="login" class="form-control"><br>
      </div>

      <div class="form-group">
        <label>Senha</label>
        <input type="password" name="senha" id="senha" class="form-control"><br>
      </div>

        <div class="form-group">
          <input type="submit" value="entrar" id="entrar" name="entrar" ><br>
      </div>

<a href="cadastro.php">Cadastre-se</a>
</div>
</form>
</body>
</html>