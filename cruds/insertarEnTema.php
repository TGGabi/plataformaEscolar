<?php
    //$idtema = explode("-",$_GET['idtema']);
    $asignatura = explode("-",$_GET['CBAsignatura']);
    $tema = $_GET['tema'];
    $descripcionT = $_GET['descripcionT'];
    
    //var_dump($asignatura[0]);
    #Conexión a la DB
    include '../includes/conexion.php';
    #Insersión de datos
    #$idautor = mysqli_fetch_array(mysqli_query($conexion, "SELECT idautores FROM autores WHERE nombre='".$autor."'"));
    $datosInsertar = "'".$tema."','".$asignatura[0]."','".$descripcionT."'";
    $sqlInstruccion = "INSERT INTO temas (nombreTema,asignaturas_idasignatura,descripcionTema) VALUES (".$datosInsertar.")";
     if ($conexion->query($sqlInstruccion) === TRUE) {
      echo '<div class="alert alert-success"><strong>Registrado correctamente!</strong><br> Se ha registrado la información correctamente.</div>';
      echo "<a class='btn btn-primary btn-sm mb-1 m-3' role='button' onclick='peticionGet(`temas`)'>Volver</a>";
    } else {
      echo "Error: " . $sqlInstruccion . "<br>" . $conexion->error;
    }
    header("Refresh:0; temas.php")
?>