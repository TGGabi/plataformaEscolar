<?php
include '../includes/conexion.php';
$id = $_GET['ID'];


$sql = "SELECT * FROM asignaturas WHERE idasignatura = '$id'";
$query = mysqli_query($conexion, $sql);

$row = mysqli_fetch_array($query);
?>
<h4 class="text-center bold mb-5">Actulizar datos</h4>
<form action="cruds/actualizarEnAsignatura.php" class="mb-3" method="POST">
    <div class="mb-3 m-5 form-floating">
        <div>
            <label for="ID" class="form-label">ID</label>
            <input class="form-control mb-3" type="text" name="ID" id="ID" value="<?php echo $row['idasignatura']?>" readonly>
        </div>
        <div>
            <label for="Titulo" class="form-label">Nombre de la asignatura</label>
            <input class="form-control mb-3" type="text" name="Titulo" id="Titulo" value="<?php echo $row['nombreAsignatura']?>">
        </div>
        <div>
            <label for="Descripcion" class="form-label">Descripción de la asignatura</label>
            <textarea class="form-control mb-3" value= "<?php echo $row['descripcionAsignatura']?>" placeholder="Leave a comment here" rows="10" cols="50" name="Descripcion" id="Descripcion" style="height: 100px"><?php echo $row['descripcionAsignatura']?></textarea>
        </div>
        <a class='btn btn-primary btn-sm mb-1 m-3' role='button' onclick='actualizarEnAsignatura()' id='verEjercicios'>Actualizar</a>
        
        <a class="btn btn-secondary btn-sm mb-1 m-3" role='button' onclick='peticionGet("asignaturas")' style="text-decoration:none;">Volver</a>
    </div>
</form>


