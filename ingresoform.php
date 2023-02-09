<?php

session_start();

if(isset($_SESSION['usuario'])){
	header("location: bienvenido.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		    <script defer src="js/bootstrap.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/sidebar.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen" />
	<title>Registro Formulario</title>
</head>
<body>
<!--
	<h1>Login</h1>
    <span>or <a href="registroform.html">SignUp</a></span>

    <form action="ingreso.php" method="POST">
      <input name="usuario" type="text" placeholder="Introduce tu usuario" required>
      <input name="contraseña" type="password" placeholder="Introduce tu contraseña" required>
      <input type="submit" value="Submit">
    </form>
  -->
<div class="container w-25">
		<div class="text-primary text-center m-5">
		<h1>Inicio de sesión</h1>
		</div>
		<form action="ingreso.php" method="POST">
			<input type="text" class="form-control" name="usuario" placeholder="Usuario">
			<br>
			<input type="password" class="form-control" name="contraseña" placeholder="Contraseña">
			<br>
			<button type="submit" class="btn btn-primary w-50">Iniciar Sesión</button>
			<!--<a href="registroform.html" class="btn btn-secondary">Registrarse</a>-->
		</form>
	</div>
</body>
</html>