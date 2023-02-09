<?php

include '../includes/conexion.php';

// sql to delete a record
$id = $_GET['ID'];
$sql = "DELETE FROM asignaturas WHERE idasignatura = '".$id."'";

if ($conexion->query($sql) === TRUE) {
  echo '<div class="alert alert-success"><strong>Eliminado correctamente!</strong><br> Se ha actualizado la información correctamente.</div>';
  echo "<a class='btn btn-primary btn-sm mb-1 m-3' role='button' onclick='peticionGet(`asignaturas`)' id='verAsignaturas'>Volver</a>";
} else {
  echo '<div class="alert alert-success"><strong>ERROR!</strong><br> Hubo un error al momento de eliminar.<br><b>Nota:</b> Solo puedes eliminar asignaturas que no tengan materias registradas.</div>';
  echo "<a class='btn btn-primary btn-sm mb-1 m-3' role='button' onclick='peticionGet(`asignaturas`)' id='verAsignaturas'>Volver</a>";
}

$conexion->close();
?>