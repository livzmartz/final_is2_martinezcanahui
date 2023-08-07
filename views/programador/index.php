<h1 class="text-center mt-3">Formulario del Registro de Programadores</h1>
<div class="row justify-content-center mb-5">
<form class="col-lg-8 border bg-light p-3" id="formularioProgramadores">
    <input type="hidden" name="prog_id" id="prog_id">    
            <div class="row mb-3">
                <label for="prog_nombre">Nombres:</label>
                <input type="text" class="form-control" name="prog_nombres" id="prog_nombres">
            </div>
            <div class="row mb-3">
                <label for="prog_apellidos" class="fs-5">Apellidos:</label>
                <input type="text" class="form-control" name="prog_apellidos" id="prog_apellidos">
            </div>
            <div class="row mb-3">
                <label for="prog_grados" class="fs-5">Grado y arma:</label>
                <select class="form-select" name="prog_grado" id="prog_grado" required>
                    <option value="">Seleccionar...</option>
                    <?php foreach ($grados as $grado) : ?>
                        <option value="<?= $grado['gra_id'] ?>"><?= $grado['gra_nombre'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="row mb-3">
                <label for="prog_correo" class="fs-5">Correo:</label>
                <input type="email" class="form-control" name="prog_correo" id="prog_correo">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <button type="submit" form="formularioProgramadores" id="btnGuardar" data-saludo= "hola" data-saludo2="hola2" class="btn btn-primary w-100">Guardar</button>
            </div>
            <div class="col">
                <button type="button" id="btnModificar" class="btn btn-warning w-100">Modificar</button>
            </div>
            <div class="col">
                <button type="button" id="btnBuscar" class="btn btn-info w-100">Buscar</button>
            </div>
            <div class="col">
                <button type="button" id="btnCancelar" class="btn btn-danger w-100">Cancelar</button>
            </div>
        </div>
    </form>
</div>
<div class="row justify-content-center" id="divTabla">
    <div class="col-lg-8">
        <h2>Listado de programadores</h2>
        <table class="table table-bordered table-hover" id="tablaProgramadores">
            <thead class="table-dark">
                <tr>
                    <th>NO. </th>
                    <th>GRADO</th>
                    <th>NOMBRES</th>
                    <th>APELLIDOS</th>
                    <th>CORREO</th>
                    <th>MODIFICAR</th>
                    <th>ELIMINAR</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    </div>
</div>
<script src="<?= asset('./build/js/programadores/index.js')  ?>"></script>