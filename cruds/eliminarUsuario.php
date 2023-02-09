<?php

include '../includes/conexion.php';

// sql to delete a record
$id = $_GET['id'];
$sql = "DELETE FROM login WHERE idlogin = '".$id."'";

if ($conexion->query($sql) === TRUE) {
  echo '<div class="alert alert-success"><strong>Se eliminó correctamente!</strong><br> Se ha actualizado la información correctamente.</div>';
  echo "<a class='btn btn-primary btn-sm mb-1 m-3' role='button' onclick='peticionGet(`usuarios`)' id='verAsignaturas'>Volver</a>";
} else {
  echo '<div class="alert alert-success"><strong>ERROR!</strong><br> Hubo un error al momento de eliminar.<br><b>Nota:</b> Solo puedes eliminar asignaturas que no tengan materias registradas.</div>';
  echo "<a class='btn btn-primary btn-sm mb-1 m-3' role='button' onclick='peticionGet(`usuario`)' id='verAsignaturas'>Volver</a>";
}

$conexion->close();
?>