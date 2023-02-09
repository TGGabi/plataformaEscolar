<?php

    $nombre = $_GET['nombre'];
    $usuario = $_GET['usuario'];
    $contrasenna = $_GET['contrasenna'];
    $codigo = $_GET['codigo'];
    $tipousuario = $_GET['tipousuario'];
   

    include '../includes/conexion.php';
    $contrasenna = hash('sha512', $contrasenna);


    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM login WHERE usuario='$usuario'");

    if(mysqli_num_rows($verificar_usuario)==0){
        $sql = "INSERT INTO login (usuario, contraseña, codigo, tipoUsuario, nombre) VALUES ('$usuario', '$contrasenna', '$codigo', '$tipousuario', '$nombre')";
        if($conexion->query($sql)== TRUE){
            echo '<div class="alert alert-success"><strong>Registrado correctamente!</strong><br> Se ha registrado la información correctamente.</div>';
            echo "<a class='btn btn-primary btn-sm mb-1 m-3' role='button' onclick='peticionGet(`usuarios`)' id='verAsignaturas'>Volver</a>";
        }else{
            echo "Error: " . $sql . "<br>" . $conexion_GET->error;
        }
    } else {
        echo '<div class="alert alert-danger"><strong>Ya está ese usuario registrado!</strong><br> Intente con uno diferente</div>';
        echo "<a class='btn btn-primary btn-sm mb-1 m-3' role='button' onclick='peticionRegUsuario()' id='verAsignaturas'>Volver</a>";
    }

    
/*
    $query = "INSERT INTO login(usuario, contraseña, codigo, tipoUsuario, nombre) VALUES ('$usuario', '$contrasenna', '$codigo', '$tipossuario', '$nombre')";

    $ejecutar = mysqli_query($conexion, $query);
    */

?>