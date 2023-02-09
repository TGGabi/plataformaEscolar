<?php
include '../includes/conexion.php';
$id = $_GET['id'];


$sql = "SELECT * FROM ejercicios WHERE idejercicio = '$id'";
$query = mysqli_query($conexion, $sql);

$row = mysqli_fetch_array($query);

$sql_temas = "SELECT * FROM temas";
$query_temas = mysqli_query($conexion, $sql_temas);

?>

<h4 class="text-center bold mb-5">Actulizar ejercicio</h4>
<form action="cruds/insertarEnEjercicio.php" method="post" class="mb-3" enctype="multipart/form-data" required>
	<div class="mb-3">
        <label for="id" class="form-label">ID</label>
        <input type="text" value= '<?php echo $row['idejercicio']?>' name="id" id="id" class="form-control" required readonly>
    </div>    
    <div class="mb-3">
        <label for="CBTema" class="form-label">Tema</label>
        <select name="CBTema" id="CBTema" class="form-select">
            <option value="<?php echo $row['temas_idtema'] ?>"><?php echo $row['temas_idtema'] ?></option>
            <?php
                while($tema = mysqli_fetch_array($query_temas)){
                    #echo $row['idusuarios'].$row['nombre'];
                    #$libro = mysqli_fetch_array(mysqli_query($conexion, "SELECT * FROM libros"));
                    #$usuario = mysqli_fetch_array(mysqli_query($conexion, "SELECT idusuarios,nombre FROM usuarios"));
                    
            ?>
                <option value="<?php echo $tema['idtema']."-".$tema['nombreTema'] ?>"><?php echo $tema['idtema']."-".$tema['nombreTema'] ?></option>
            <?php
                }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="CBTipo" class="form-label">Seleccione el tipo de trabajo que es.</label>
        <select name="CBTipo" id="CBTipo" class="form-select">
        	<option value="<?php echo $row['tipoEjercicio'] ?>"><?php echo $row['tipoEjercicio'] ?></option>
            <option value="Ejercicio">Ejercicio</option>
            <option value="Ejemplo">Ejemplo</option>
        </select>
    </div>
    <label for="descripcion" class="form-label">Instrucciones.</label>
    <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Coloca una breve descripcion del ejercicio." rows="10" cols="50" name="descripcion" id="descripcion" style="height: 100px"><?php echo str_replace("<br>", PHP_EOL, $row['descripcion']) ?></textarea>
        <label for="descripcion">Descripción</label>
    </div>
    <label for="respuesta" class="form-label">Ejercicio.</label>
    <div class="form-floating mb-3">
        <pre><code><textarea class="form-control" placeholder="Coloca el ejercicio aquí." rows="10" cols="50" name="ejercicio" id="ejercicio" style="height: 100px"><?php echo str_replace("<br>", PHP_EOL, $row['ejercicio']) ?></textarea></code></pre>
    </div>
    <label for="respuesta" class="form-label">Respuesta.</label>
    <div class="form-floating mb-3">
        <pre><code><textarea class="form-control" placeholder="Coloca la respuesta del ejercicio." rows="10" cols="50" name="respuesta" id="respuesta" style="height: 100px"><?php echo str_replace("<br>", PHP_EOL, $row['respuesta']) ?></textarea></code></pre>
    </div>
    <!--<div class="mb-3">
        <label for="imagen" class="form-label">Imagen de apoyo</label>
        <input accept="image/*" multiple type="file" name="imagen" id="imagen" class="form-control" required>
    </div>-->
    
    <a class="btn btn-primary btn-sm mb-1 m-3" role='button' onclick='actualizarEnEjercicio()' style="text-decoration:none;">Actualizar</a>
    <a class="btn btn-secondary btn-sm mb-1 m-3" role='button' onclick='peticionGet("ejercicios")' style="text-decoration:none;">Volver</a>
</form>