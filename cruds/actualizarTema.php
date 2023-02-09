
<h2 class="mb-5" >REGISTRO DE NUEVO TEMA</h2>
<?php
    
    include '../includes/conexion.php';
    $idt = $_GET['IDtema'];
    //$asignatura = $_GET['asignatura'];
    //$tema = $_GET['tema'];
    //$descrip = $_GET['descripcionT'];

    $sql = "SELECT * FROM temas WHERE idtema = '$idt' ";
    $query = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_array($query);
    
    $sql_asignaturas = "SELECT * FROM asignaturas";
    $query_asignaturas = mysqli_query($conexion, $sql_asignaturas);
#    $asignatura = mysqli_fetch_array($query_asignatura);
    
?>    
<form action="actualizarEnTema.php" method="post" class="mb-3" required>    
    <div class="mb-3">
        <label for="tema" class="form-label">ID</label>
        <input type="text" value= '<?php echo $row['idtema']?>' name="id" id="id" class="form-control" required readonly>
    </div>

    <div class="mb-3">
        <label for="CBAsignatura" class="form-label">Asignatura</label>
        <select name="CBAsignatura" id="CBAsignatura" class="form-select">
        #while($asignatura = mysqli_fetch_array($query_asignatura)){
                #echo $row['idusuarios'].$row['nombre'];
                #$libro = mysqli_fetch_array(mysqli_query($conexion, "SELECT * FROM libros"));
                #$usuario = mysqli_fetch_array(mysqli_query($conexion, "SELECT idusuarios,nombre FROM usuarios"));
               
            <option value="<?php echo $row['asignaturas_idasignatura'] ?>"><?php echo $row['asignaturas_idasignatura'] ?></option>
            <?php
                while($asignaturas = mysqli_fetch_array($query_asignaturas)){
                    #echo $row['idusuarios'].$row['nombre'];
                    #$libro = mysqli_fetch_array(mysqli_query($conexion, "SELECT * FROM libros"));
                    #$usuario = mysqli_fetch_array(mysqli_query($conexion, "SELECT idusuarios,nombre FROM usuarios"));
                    
            ?>
                <option value="<?php echo $asignaturas['idasignatura']."-".$asignaturas['nombreAsignatura'] ?>"><?php echo $asignaturas['idasignatura']."-".$asignaturas['nombreAsignatura'] ?></option>
            <?php
                }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="tema" class="form-label">Titulo del Tema</label>
        <input type="text" value= "<?php echo $row['nombreTema']?>" name="tema" id="tema" class="form-control" required>
    </div>
    <label for="TAdescrpcion" class="form-label">Descripción del Tema</label>
    <div class="form-floating mb-3">
        <textarea class="form-control" value= "<?php echo $row['descripcionTema']?>" placeholder="Leave a comment here" rows="10" cols="50" name="descripcionT" id="descripcionT" style="height: 100px"><?php echo $row['descripcionTema']?></textarea>
        <label for="descripcionT">Descripcion</label>
    </div>
    
    <a class='btn btn-primary btn-sm mb-1 m-3' role='button' onclick='actualizarEnTema()' id='verEjercicios'>Actualizar</a>
        
    <a class="btn btn-secondary btn-sm mb-1 m-3" role='button' onclick='peticionGet("temas")' style="text-decoration:none;">Volver</a>
</form>