<?php
// Creando conexion
include '../includes/conexion.php';

$idt = $_GET['id'];
$tema = explode("-",$_GET['CBTema']);
$tipo = explode("-",$_GET['CBTipo']);
$descripcion = $_GET['descripcion'];
$respuesta = $_GET['respuesta'];
$ejercicio = $_GET['ejercicio'];

$descripcion = str_replace('"', '|', $descripcion);
$respuesta = str_replace('"', '|', $respuesta);
$ejercicio = str_replace('"', '|', $ejercicio);
$descripcion = str_replace("'", '|', $descripcion);
$respuesta = str_replace("'", '|', $respuesta);
$ejercicio = str_replace("'", '|', $ejercicio);


$sql="UPDATE ejercicios SET tipoEjercicio='".$tipo[0]."', descripcion = '".$descripcion."', ejercicio = '".$ejercicio."', respuesta='".$respuesta."', temas_idtema='".$tema[0]."' WHERE idejercicio = '".$idt."'";

if ($conexion->query($sql) === TRUE) {
    echo '<div class="alert alert-success"><strong>Actualizado correctamente!</strong><br> Se ha actualizado la información correctamente.</div>';
    echo "<a class='btn btn-primary btn-sm mb-1 m-3' role='button' onclick='peticionGet(`ejercicios`)'>Volver</a>";
  } else {
    echo "Se ha producido un error: " . $conexion->error;
  }
  
  $conexion->close();
?>