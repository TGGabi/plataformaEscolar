<h2 class="text-center bold" style="font-size: 50px;">Asignaturas</h2>

<div id="form">
    
</div>
<a class='btn btn-primary' role='button' onclick='peticionRegAsis()' id='registrarAsignatura' style="text-decoration:none;">Registrar asignatura.</a>
<table class="table table-dark table-hover">

    <thead class="fs-4 text-center">


        <th>ID</th>
        <th>Asignatura</th>
        <th>Descripcion</th>
        <th></th>
        <th></th>
    </thead>

    <?php
    include '../includes/conexion.php';

    $sql_aT = 'SELECT * FROM asignaturas';
    $query_aT = mysqli_query($conexion, $sql_aT);
    while ($asig = mysqli_fetch_array($query_aT)) {
       
        ?>
        <tbody class="text-center">
            <tr>
                <th><h6><?php echo $asig['idasignatura'] ?></h6></th>
                <th><h6><?php echo $asig['nombreAsignatura'] ?></h6></th>
                <th><h6><?php echo $asig['descripcionAsignatura'] ?></h6></th>
                
                <th><a role='button' onclick='peticionActAsig("<?php echo $asig["idasignatura"] ?>")' id='actualizarAsignatura' style="text-decoration:none;">Editar</a></th>
                <th><a role='button' onclick='peticionElimAsig("<?php echo $asig["idasignatura"]?>")'>Eliminar</a></th>
                <br>
            </tr>
            </tbody>
 
        <?php
        }
        ?>
    </table>