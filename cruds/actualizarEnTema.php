<?php
// Creando conexion
include '../includes/conexion.php';

$idt = $_GET['id'];
$asignatura = explode("-",$_GET['CBAsignatura']);
$tema = $_GET['tema'];
$descrip = $_GET['descripcionT'];



$sql="UPDATE temas SET nombreTema='$tema', asignaturas_idasignatura = '".$asignatura[0]."', descripcionTema = '$descrip' WHERE IDtema = '".$idt."'";

if ($conexion->query($sql) === TRUE) {
    echo '<div class="alert alert-success"><strong>Actualizado correctamente!</strong><br> Se ha actualizado la información correctamente.</div>';
    echo "<a class='btn btn-primary btn-sm mb-1 m-3' role='button' onclick='peticionGet(`temas`)' id='verAsignaturas'>Volver</a>";
  } else {
    echo "Se ha producido un error: " . $conexion->error;
  }
  
  $conexion->close();
?>