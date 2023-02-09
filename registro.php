<?php

include 'conexion.php';

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$codigo =  $_POST['codigo'];
$tipoUsuario = $_POST['tipoUsuario'];
$nombre = $_POST['nombre'];

$contraseña = hash('sha512', $contraseña);


$verificar_usuario = mysqli_query($conexion, "SELECT * FROM login WHERE usuario='$usuario'");

if(mysqli_num_rows($verificar_usuario)>0){
	echo '<script>
		alert("Este usuario ya esta registrado, intenta con uno distinto");
		window.location = "registroform.html";



	</script>';
	exit();
}


$query = "INSERT INTO login(usuario, contraseña, codigo, tipoUsuario, nombre) VALUES('$usuario', '$contraseña', '$codigo', '$tipoUsuario', '$nombre')";

$ejecutar = mysqli_query($conexion, $query);

?>