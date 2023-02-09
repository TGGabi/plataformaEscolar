
<h2 class="CBAsignatura" >Registrar tema.</h2>
<?php
    include '../includes/conexion.php';
    $sql_asignatura = "SELECT * FROM asignaturas";/*ORDER BY fechaPrestamo*/
    
    $query_asignaturas = mysqli_query($conexion, $sql_asignatura);
    
    #while($row = mysqli_fetch_array($query_usuarios)){
    #    echo $row['idusuarios'].$row['nombre'];
        #$libro = mysqli_fetch_array(mysqli_query($conexion, "SELECT * FROM libros"));
        #$usuario = mysqli_fetch_array(mysqli_query($conexion, "SELECT idusuarios,nombre FROM usuarios"));
    #    ?>
<form action="insertarEnTema.php" method="post" class="mb-3" required>    
    <div class="mb-3">
        <label for="CBAsignatura" class="form-label">Asignatura</label>
        <select name="CBAsignatura" id="CBAsignatura" class="form-select">
            <option value="Nuevo">Nuevo</option>
            <?php
                while($asignatura = mysqli_fetch_array($query_asignaturas)){
                    #echo $row['idusuarios'].$row['nombre'];
                    #$libro = mysqli_fetch_array(mysqli_query($conexion, "SELECT * FROM libros"));
                    #$usuario = mysqli_fetch_array(mysqli_query($conexion, "SELECT idusuarios,nombre FROM usuarios"));
                    
            ?>
                <option value="<?php echo $asignatura['idasignatura']."-".$asignatura['nombreAsignatura'] ?>"><?php echo $asignatura['idasignatura']."-".$asignatura['nombreAsignatura'] ?></option>
            <?php
                }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="tema" class="form-label">Titulo del Tema</label>
        <input type="text" name="tema" id="tema" class="form-control" required>
    </div>
    <label for="TAdescrpcion" class="form-label">Descripción del Tema</label>
    <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Leave a comment here" rows="10" cols="50" name="descripcionT" id="descripcionT" style="height: 100px"></textarea>
        <label for="descripcionT">Descripción</label>
    </div>
    
    <a class='btn btn-primary btn-sm mb-1 m-3' role='button' onclick='insertarEnTema()'>Registrar</a>
    <a class="btn btn-secondary btn-sm mb-1 m-3" role='button' onclick='peticionGet("temas")' style="text-decoration:none;">Volver</a>
</form>
