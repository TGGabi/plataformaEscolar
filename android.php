<?php

    #$peticion = $_POST['mensaje'];

    #echo "HOLA ".$peticion;

    $servidor = "localhost";
    $user = "root";
    $password = "";
    $database = "proyectofinal";
    $data = "";
    $conexion = mysqli_connect($servidor, $user, $password, $database);
    $sql_aT = 'SELECT * FROM ejercicios';
    $query_aT = mysqli_query($conexion, $sql_aT);
    while ($row = mysqli_fetch_array($query_aT)) {
        $data = $data."Instrucciones: ".$row['descripcion']."\nEjercicio:\n".$row['ejercicio']."\n\n\n\n";
    }
    echo $data;
?>