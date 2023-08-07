
<h1 class="text-center">Asignación de Aplicaciones</h1>
<div class="row justify-content-center mb-5">
    <form class="col-lg-8 border bg-light p-3" id="formularioAsignar">
        <input type="hidden" name="asig_id" id="asig_id">
      <div class="form-group">
        <label for="aplicacion">Seleccione una aplicación:</label>
        <select class="form-select" name="asig_app" id="asig_app" required>
          <option value="">Seleccionar aplicación</option>
          <?php foreach ($aplicaciones as $apps) { ?>
            <option value="<?php echo $apps['app_id']; ?>"><?php echo $apps['app_nombre']; ?></option>
          
          <?php } ?>
        </select>
      </div>
      <div class="form-group">
        <label for="aplicacion">Seleccione un programador</label>
        <select class="form-select" name="asig_programador" id="asig_programador">
          <option value="">Seleccionar..</option>
          <?php foreach ($programadores as $apps) { ?>
            <option value="<?php echo $apps['prog_id']; ?>"><?php echo $apps['nombre']; ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="row mb-3">
            <div class="col">
                <button type="submit" form="formularioAsignar" id="btnGuardar" data-saludo= "hola" data-saludo2="hola2" class="btn btn-primary w-100">Guardar</button>
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
        <h2>Asignación de aplicaciones a los programadores</h2>
        <table class="table table-bordered table-hover" id="tablaAsignar">
            <thead class="table-dark">
                <tr>
                    <th>NO. </th>
                    <th>PROGRAMADOR</th>
                    <th>APLICACION</th>
                    <th>MODIFICAR</th>
                    <th>ELIMINAR</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<script src="<?= asset('./build/js/asignar/index.js')  ?>"></script>