<?php
$conexion = mysqli_connect("localhost", "root", "", "proyectofinal");
if ($conexion->connect_error) {
        die("Connection failed: " . $conexion->connect_error);
        echo mysqli_error($conexion);
    }
?>