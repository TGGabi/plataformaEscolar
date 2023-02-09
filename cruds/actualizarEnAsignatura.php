<?php
// Creando conexion
include '../includes/conexion.php';

$id = $_GET['ID'];
$titulo = $_GET['Titulo'];
$descrip = $_GET['Descripcion'];


$sql="UPDATE asignaturas SET nombreAsignatura='$titulo', descripcionAsignatura = '$descrip' WHERE idasignatura = '".$id."'";

if ($conexion->query($sql) === TRUE) {
    echo '<div class="alert alert-success"><strong>Actualizado correctamente!</strong><br> Se ha actualizado la información correctamente.</div>';
    echo "<a class='btn btn-primary btn-sm mb-1 m-3' role='button' onclick='peticionGet(`asignaturas`)' id='verAsignaturas'>Volver</a>";
    //header('refresh:0; ../perfil.php');
  } else {
    echo "Se ha producido un error: " . $conexion->error;
  }
  
  $conexion->close();
?>