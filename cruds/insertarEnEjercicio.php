<?php
    //$idtema = explode("-",$_GET['idtema']);

    $tema1 = explode("-",$_GET['CBTema']);
    $tipo = explode("-",$_GET['CBTipo']);
    $descripcion1 = str_replace("\n", "<br>", $_GET['descripcion']);
    $respuesta1 = str_replace("\n", "<br>", $_GET['respuesta']);
    $ejercicio1 = str_replace("\n", "<br>", $_GET['ejercicio']);

    $descripcion1 = str_replace('"', '|', $descripcion1);
    $respuesta1 = str_replace('"', '|', $respuesta1);
    $ejercicio1 = str_replace('"', '|', $ejercicio1);
    $descripcion1 = str_replace("'", '|', $descripcion1);
    $respuesta1 = str_replace("'", '|', $respuesta1);
    $ejercicio1 = str_replace("'", '|', $ejercicio1);

    /*$image = $_FILES['imagen'];
    $data = fopen ($image, 'rb');

    $size = filesize ($image);

    $contents = fread ($fd, $size);

    fclose ($fd);
    $encoded = base64_encode($contents);
    echo $encoded;*/
    #echo $imagen;
    /*
    $image = $_FILES['imagen']['tmp_name'];
    $imageName = $_FILES['imagen']['name'];
    $tamanioImage = $_FILES['imagen']['size'];
    $imagenSubida = fopen($_FILES['imagen']['tmp_name'],'r');
    $binarioImagen = fread($imagenSubida, $tamanioImage);
    $imagenB64 = base64_encode($binarioImagen);
    echo $imagenB64;
    */
    //$echo $imagen;
    //var_dump($asignatura[0]);
    #Conexión a la DB
    include '../includes/conexion.php';
    #Insersión de datos
    #$idautor = mysqli_fetch_array(mysqli_query($conexion, "SELECT idautores FROM autores WHERE nombre='".$autor."'"));
    $datosInsertar = "'".$tipo[0]."','".$descripcion1."','".$ejercicio1."','".$respuesta1."','".$tema1[0]."'";
    $sqlInstruccion = "INSERT INTO ejercicios (tipoEjercicio,descripcion,ejercicio,respuesta,temas_idtema) VALUES ($datosInsertar)";//
    #echo $datosInsertar;
     if ($conexion->query($sqlInstruccion) === TRUE) {
      echo '<div class="alert alert-success"><strong>Registrado correctamente!</strong><br> Se ha registrado la información correctamente.</div>';
      echo "<a class='btn btn-primary btn-sm mb-1 m-3' role='button' onclick='peticionGet(`ejercicios`)'>Volver</a>";
    } else {
      echo "Error: " . $sqlInstruccion . "<br>" . $conexion->error;
    }
  
?>