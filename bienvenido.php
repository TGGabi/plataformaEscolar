<?php

session_start();

if(!isset($_SESSION['usuario'])){

	echo '
		
	<script>
		alert("Por favor inicia sesion");
		window.location = "ingresoform.php"
	</script>

	';
	session_destroy();
	die();

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bienvenido</title>
</head>
<body>
	<h1>Bienvenido</h1>
	<a href="cerrarSesion.php">Cerrar Sesion</a>

</body>
</html>