<?php

$tabla = $_GET['peticion'];

switch ($tabla) {
	case 'asignaturas':
		include 'asignaturas.php';
		break;
	case 'temas':
		include 'temas.php';
		break;
	case 'ejercicios':
		include 'ejercicios.php';
	break;
	case 'actualizarAsignatura':
		include 'actualizarAsignatura.php';
		break;
	case 'usuarios':
		include 'usuarios.php';
		break;
	default:
		// code...
		break;
}

?>