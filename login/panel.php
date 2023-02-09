<?php

session_start();
$name = $_SESSION['usuario'];

if (!isset($_SESSION['usuario'])) {
	header('location: index.html');
	exit();
}
if ($_SESSION['tipoUsuario'] == 'Alumno') {
	header('location: alumno.html');
	exit();
}
echo "<h1>Hola $name<h1>";

echo "<a href= 'logout.php'>Cerrar sesión</a>";

?>