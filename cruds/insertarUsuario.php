<h4 class="text-center mb-5">Registro de usuario</h4>

<form class="text-center mb-4" action="insertarEnUsuario.php" method="POST">
    <div class="mb-3 m-5 form-floating">
        <div>
            <label for="txtnombre" class="form-label">Nombre.</label>
            <input class="form-control mb-3" type="text" name="txtnombre" id="txtnombre" placeholder="Nombre">
        </div>
        <div>
            <label for="txtusuario" class="form-label">Usuario.</label>
            <input class="form-control mb-3" type="text" name="txtusuario" id="txtusuario" placeholder="Usuario">
        </div>
        <div>
            <label for="txtcontrasenna" class="form-label">Contraseña.</label>
            <input class="form-control mb-3" type="text" name="txtcontrasenna" id="txtcontrasenna" placeholder="Contraseña">
        </div>
        <div>
            <label for="txtcodigo" class="form-label">Código.</label>
            <input class="form-control mb-3" type="number" name="txtcodigo" id="txtcodigo" placeholder="Código">
        </div>
        <div class="mb-3">
            <label for="CBTipo" class="form-label">Permisos</label>
            <select name="CBTipo" id="CBTipo" class="form-select">
                <option value="alumno">Alumno</option>
                <option value="maestro">Maestro</option>
                <option value="admin">Administrador</option>
            </select>
        </div>
        
    </div>

    <a class='btn btn-primary btn-sm mb-1 m-3' role='button' onclick='insertarEnUsuario()'>Registrar</a>
    <a class="btn btn-secondary btn-sm mb-1 m-3" role='button' onclick='peticionGet("usuarios")' style="text-decoration:none;">Volver</a>
</form>