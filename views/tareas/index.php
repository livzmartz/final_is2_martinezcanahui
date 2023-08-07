<h1 class="text-center">Asignación de tareas</h1>
<div class="row justify-content-center mb-5">
    <form class="col-lg-8 border bg-light p-3" id="formularioTareas">
    <input type="hidden" name="tar_id" id="tar_id">  
    <div class="row mb-3">
        <div class="col">
            <label for="aplicacion">Seleccione una aplicación:</label>
            <select class="form-select" name="tar_app" id="tar_app">
          <option value="">Seleccionar aplicación</option>
          <?php foreach ($Aplicacion as $apps) { ?>
            <option value="<?php echo $apps['APP_ID']; ?>"><?php echo $apps['APP_NOMBRE']; ?></option>
          <?php } ?>
        </select>
      </div>
 
      <div class="row mb-3">
            <div class="col">
        <label for="descripcion">Descripción de la tarea:</label>
        <textarea class="form-control" name="tar_descripcion" id="tar_descripcion"></textarea>
      </div>
      <div class="row mb-3">
            <div class="col">
        <label for="fecha">Fecha de asignacion</label>
        <input type="date" class="form-control" name="tar_fecha" id="tar_fecha">
      </div>
      <div class="row mb-3">
            <div class="col">
                <button type="submit" form="formularioTareas" id="btnGuardar" data-saludo= "hola" data-saludo2="hola2" class="btn btn-primary w-100">Guardar</button>
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
        <h2>Listado de tareas</h2>
        <table class="table table-bordered table-hover" id="tablaTareas">
            <thead class="table-dark">
                <tr>
                    <th>NO. </th>
                    <th>TAREA</th>
                    <th>DESCRIPCION</th>
                    <th>FECHA</th>
                    <th>MODIFICAR</th>
                    <th>ELIMINAR</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<script src="<?= asset('./build/js/tareas/index.js')  ?>"></script>