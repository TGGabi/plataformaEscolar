<?php
    $conexion = new mysqli("localhost","root","","proyectoFinal");

    if ($conexion->connect_error) {
        die("Connection failed: " . $conexion->connect_error);
        echo mysqli_error($conexion);
    }
?>