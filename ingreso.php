<?php

session_start();

include 'conexion.php';

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$contraseñaHash = hash('sha512', $contraseña);

$validar_login = mysqli_query($conexion, "SELECT * FROM login WHERE usuario = '$usuario' and contraseña = '$contraseñaHash'");
$row = mysqli_fetch_array($validar_login);
if(mysqli_num_rows($validar_login) > 0){
	$_SESSION['usuario'] = $usuario;
	header("location: index.php?usuario=".$_SESSION['usuario']);
	exit;
}else{
	echo '
		<script>
			alert("Usuario no existe, por favor verifque los datos introducidos");
			window.location = "ingresoform.php";
		</script>
	';

	exit;
}

?>