<?php

    $titulo = $_GET['CTTitulo'];
    $descrip = $_GET['CTDescripcion'];
   

    include '../includes/conexion.php';
    $sql = "INSERT INTO asignaturas (nombreAsignatura, descripcionAsignatura) VALUES ('$titulo','$descrip')";
if($conexion->query($sql)== TRUE){
    echo '<div class="alert alert-success"><strong>Registrado correctamente!</strong><br> Se ha registrado la información correctamente.</div>';
    echo "<a class='btn btn-primary btn-sm mb-1 m-3' role='button' onclick='peticionGet(`asignaturas`)' id='verAsignaturas'>Volver</a>";
}else{
    echo "Error: " . $sql . "<br>" . $conexion_GET->error;
}

?>