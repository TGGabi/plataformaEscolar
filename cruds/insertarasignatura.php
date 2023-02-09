
<h4 class="text-center mb-5">Registro de asignaturas</h4>

<form class="text-center mb-4" action="insertarEnAsignaturas.php" method="POST">
    <div class="mb-3 m-5 form-floating">
        <div>
            <label for="CTTitulo" class="form-label">Nombre de la asignatura.</label>
            <input class="form-control mb-3" type="text" name="CTTitulo" id="CTTitulo" placeholder="Asignatura">
        </div>
        
        <div>
            <label for="CTDescripcion" class="form-label">Descripción de la asignatura.</label>
            <input class="form-control mb-3" type="text" name="CTDescripcion" id="CTDescripcion" placeholder="Descripcion">
        </div>
        
    </div>

    <a class='btn btn-primary btn-sm mb-1 m-3' role='button' onclick='insertarEnAsignatura()'>Registrar</a>
    <a class="btn btn-secondary btn-sm mb-1 m-3" role='button' onclick='peticionGet("asignaturas")' style="text-decoration:none;">Volver</a>
</form>
