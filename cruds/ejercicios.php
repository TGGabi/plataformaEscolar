<h2 class="text-center bold" style="font-size: 50px;">Ejercicios registrados</h2>

<a class='btn btn-primary mb-5' role='button' onclick='peticionRegEjercicio()' id='registrarAsignatura' style="text-decoration:none;">Registrar ejercicio.</a>

<table class="table table-dark table-hover">

<thead class="fs-4 text-center">
    <th>ID</th>
    <th>Tema</th>
    <th>Tipo</th>
    <th>Descripcion</th>
    <th></th>
    <th></th>
</thead>

<?php
include '../includes/conexion.php';

$sql = "SELECT * FROM ejercicios";
$query = mysqli_query($conexion, $sql);
while ($row = mysqli_fetch_array($query)) {
   $sql_as ="SELECT * FROM temas WHERE idtema='".$row['temas_idtema']."'";
   $query_as = mysqli_query($conexion, $sql_as);
   $tema = mysqli_fetch_array($query_as)
    ?>
    <tbody class="text-center">
        <tr>
            <th><h6><?php echo $row['idejercicio'] ?></h6></th>
            <th><h6><?php echo $tema['nombreTema'] ?></h6></th>
            <th><h6><?php echo $row['tipoEjercicio'] ?></h6></th>
            <th><h6><?php echo $row['descripcion'] ?></h6></th>
            
            <th><a role='button' onclick='peticionActEjercicio("<?php echo $row["idejercicio"] ?>")' style="text-decoration:none;">Editar</a></th>
            <th><a role='button' onclick='elimEjercicio("<?php echo $row["idejercicio"] ?>")' style="text-decoration:none;">Eliminar</a></th>

        </tr>
        </tbody>

    <?php
    }
    ?>
</table>