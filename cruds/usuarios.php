<h2 class="text-center bold" style="font-size: 50px;">Usuarios</h2>

<div id="form">
    
</div>
<a class='btn btn-primary' role='button' onclick='peticionRegUsuario()' id='registrarUsuario' style="text-decoration:none;">Registrar usuario.</a>
<table class="table table-dark table-hover">

    <thead class="fs-4 text-center">


        <th>ID</th>
        <th>Nombre</th>
        <th>Usuario</th>
        <th>Permisos</th>
        <th></th>
        <th></th>
    </thead>

    <?php
    include '../includes/conexion.php';

    $sql_aT = 'SELECT * FROM login';
    $query_aT = mysqli_query($conexion, $sql_aT);
    while ($login = mysqli_fetch_array($query_aT)) {
       
        ?>
        <tbody class="text-center">
            <tr>
                <th><h6><?php echo $login['idlogin'] ?></h6></th>
                <th><h6><?php echo $login['nombre'] ?></h6></th>
                <th><h6><?php echo $login['usuario'] ?></h6></th>
                <th><h6><?php echo $login['tipoUsuario'] ?></h6></th>
                
                <th><a role='button' onclick='peticionActUsuario("<?php echo $login["idlogin"] ?>")' id='actualizarUsuario' style="text-decoration:none;">Editar</a></th>
                <th><a role='button' onclick='elimUsuario("<?php echo $login["idlogin"]?>")'>Eliminar</a></th>
                <br>
            </tr>
            </tbody>
 
        <?php
        }
        ?>
    </table>