
<h2 class="text-center bold" style="font-size: 50px;">Temas registrados</h2>

<a class='btn btn-primary mb-5' role='button' onclick='peticionRegTem()' id='registrarAsignatura' style="text-decoration:none;">Registrar tema.</a>

<table class="table table-dark table-hover">

<thead class="fs-4 text-center">
    <th>ID</th>
    <th>Asignatura</th>
    <th>Tema</th>
    <th>Descripcion</th>
    <th></th>
    <th></th>
</thead>

    <?php
    include '../includes/conexion.php';

    $sql = "SELECT * FROM temas";
    $query = mysqli_query($conexion, $sql);
    while ($row = mysqli_fetch_array($query)) {
       $sql_as ="SELECT * FROM asignaturas WHERE idasignatura='".$row['asignaturas_idasignatura']."'";
       $query_as = mysqli_query($conexion, $sql_as);
       $asig = mysqli_fetch_array($query_as)
        ?>
        <tbody class="text-center">
            <tr>
                <th><h6><?php echo $row['idtema'] ?></h6></th>
                <th><h6><?php echo $row['nombreTema'] ?></h6></th>
                <th><h6><?php echo $asig['nombreAsignatura'] ?></h6></th>
                <th><h6><?php echo $row['descripcionTema'] ?></h6></th>
                
                <th><a role='button' onclick='peticionActTema("<?php echo $row["idtema"] ?>")' style="text-decoration:none;">Editar</a></th>
                <th><a role='button' onclick='elimTema("<?php echo $row["idtema"] ?>")' style="text-decoration:none;">Eliminar</a></th>

            </tr>
            </tbody>
 
        <?php
        }
        ?>
    </table>