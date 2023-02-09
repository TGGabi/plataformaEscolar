<?php

	session_start();
	include("conexion.php");

	$usuario = $_POST['user'];
	$password = $_POST['pass'];

	$sql = "SELECT * FROM login WHERE usuario = '$usuario'" AND "pass = '$password'";
	
	$resultados = mysqli_query($conexion,$sql);

	while ($row = mysqli_fetch_array($resultados)){
		$usuar = $row['usuario'];
		$pass = $row['contraseña'];
		$tipoUs = $row['tipoUsuario'];
	}

	if ($resultados -> num_rows > 0) {
		$_SESSION['usuario'] = $usuario;
		$_SESSION['tipoUsuario'] = $tipoUs;
		header('location: panel.php');
	} else {
		echo "Usuario o contraseña incorrectos";
	}
	
?>
