
<h2 class="CBAsignatura" >Registrar Ejercicio.</h2>
<?php
    include '../includes/conexion.php';
    $sql_ejercicios = "SELECT * FROM temas";/*ORDER BY fechaPrestamo*/
    
    $query_ejercicios = mysqli_query($conexion, $sql_ejercicios);
    
    #while($row = mysqli_fetch_array($query_usuarios)){
    #    echo $row['idusuarios'].$row['nombre'];
        #$libro = mysqli_fetch_array(mysqli_query($conexion, "SELECT * FROM libros"));
        #$usuario = mysqli_fetch_array(mysqli_query($conexion, "SELECT idusuarios,nombre FROM usuarios"));
    #    ?>
<form action="cruds/insertarEnEjercicio.php" method="post" class="mb-3" enctype="multipart/form-data" required>    
    <div class="mb-3">
        <label for="CBTema" class="form-label">Tema</label>
        <select name="CBTema" id="CBTema" class="form-select">
            <option value="">Seleccione un tema</option>
            <?php
                while($ejercicio = mysqli_fetch_array($query_ejercicios)){
                    #echo $row['idusuarios'].$row['nombre'];
                    #$libro = mysqli_fetch_array(mysqli_query($conexion, "SELECT * FROM libros"));
                    #$usuario = mysqli_fetch_array(mysqli_query($conexion, "SELECT idusuarios,nombre FROM usuarios"));
                    
            ?>
                <option value="<?php echo $ejercicio['idtema']."-".$ejercicio['nombreTema'] ?>"><?php echo $ejercicio['idtema']."-".$ejercicio['nombreTema'] ?></option>
            <?php
                }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="CBTipo" class="form-label">Seleccione el tipo de trabajo que es.</label>
        <select name="CBTipo" id="CBTipo" class="form-select">
            <option value="Ejercicio">Ejercicio</option>
            <option value="Ejemplo">Ejemplo</option>
        </select>
    </div>
    <label for="descripcion" class="form-label">Instrucciones.</label>
    <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Coloca una breve descripcion del ejercicio." rows="10" cols="50" name="descripcion" id="descripcion" style="height: 100px"></textarea>
        <label for="descripcion">Descripción</label>
    </div>
    <label for="ejercicio" class="form-label">Ejercicio.</label>
    <div class="form-floating mb-3">
        <pre><code><textarea class="form-control" placeholder="Coloca el ejercicio aquí." rows="10" cols="50" name="ejercicio" id="ejercicio" style="height: 100px"></textarea></code></pre>
    </div>
    <label for="respuesta" class="form-label">Respuesta.</label>
    <div class="form-floating mb-3">
        <pre><code><textarea class="form-control" placeholder="Coloca la respuesta del ejercicio." rows="10" cols="50" name="respuesta" id="respuesta" style="height: 100px"></textarea></code></pre>
    </div>
    <!--<div class="mb-3">
        <label for="imagen" class="form-label">Imagen de apoyo</label>
        <input accept="image/*" multiple type="file" name="imagen" id="imagen" class="form-control" required>
    </div>-->
    
    <a class="btn btn-primary btn-sm mb-1 m-3" role='button' onclick='insertarEnEjercicio()' style="text-decoration:none;">Registrar</a>
    <a class="btn btn-secondary btn-sm mb-1 m-3" role='button' onclick='peticionGet("ejercicios")' style="text-decoration:none;">Volver</a>
</form>
