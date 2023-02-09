<h2 class="mb-5" >Actualizar datos de usuario</h2>
<?php
    
    include '../includes/conexion.php';
    $idt = $_GET['id'];

    $sql = "SELECT * FROM login WHERE idlogin = '$idt' ";
    $query = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_array($query);
    
?>    
<form action="actualizarEnUsuario.php" method="post" class="mb-3" required>    
    <div class="mb-3">
        <label for="tema" class="form-label">ID</label>
        <input type="text" value= '<?php echo $row['idlogin']?>' name="id" id="id" class="form-control" required readonly>
    </div>

    <div class="mb-3 m-5 form-floating">
        <div>
            <label for="txtnombre" class="form-label">Nombre.</label>
            <input class="form-control mb-3" type="text" name="txtnombre" id="txtnombre" placeholder="Nombre" value="<?php echo $row['nombre'] ?>">
        </div>
        <div>
            <label for="txtusuario" class="form-label">Usuario.</label>
            <input class="form-control mb-3" type="text" name="txtusuario" id="txtusuario" placeholder="Usuario" value="<?php echo $row['usuario'] ?>">
        </div>
        <div>
            <label for="txtcontrasenna" class="form-label">Contraseña.</label>
            <input class="form-control mb-3" type="text" name="txtcontrasenna" id="txtcontrasenna" placeholder="Contraseña" value="<?php echo $row['contraseña'] ?>">
        </div>
        <div>
            <label for="txtcodigo" class="form-label">Código.</label>
            <input class="form-control mb-3" type="number" name="txtcodigo" id="txtcodigo" placeholder="Código" value="<?php echo $row['codigo'] ?>">
        </div>
        <div class="mb-3">
            <label for="CBTipo" class="form-label">Permisos</label>
            <select name="CBTipo" id="CBTipo" class="form-select">
                <option value="<?php echo $row['tipoUsuario'] ?>"><?php echo $row['tipoUsuario'] ?></option>
                <option value="alumno">Alumno</option>
                <option value="maestro">Maestro</option>
                <option value="admin">Administrador</option>
            </select>
        </div>
        
    </div>
    
    <a class='btn btn-primary btn-sm mb-1 m-3' role='button' onclick='actualizarEnUsuario()'>Actualizar</a>
        
    <a class="btn btn-secondary btn-sm mb-1 m-3" role='button' onclick='peticionGet("usuarios")' style="text-decoration:none;">Volver</a>
</form>