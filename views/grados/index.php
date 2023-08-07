<h1 class="text-center">Grados y armas del Oficial</h1>
  <div class="row justify-content-center mt-5">
  <form class="col-lg-8 border bg-light p-3" id="formularioGrados">
  <input type="hidden" name="gra_id" id="gra_id">    
  <div class="row mb-3">
        <div class="col">
          <label for="gra_nombre">Ingrese un grado y arma</label>
          <input type="text" name="gra_nombre" id="gra_nombre" class="form-control">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col">
                <button type="submit" form="formularioGrados" id="btnGuardar" data-saludo= "hola" data-saludo2="hola2" class="btn btn-primary w-100">Guardar</button>
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
        <h2>Listado de grados y armas</h2>
        <table class="table table-bordered table-hover" id="tablaGrados">
            <thead class="table-dark">
                <tr>
                    <th>NO.</th>
                    <th>GRADO Y ARMA</th>
                    <th>MODIFICAR</th>
                    <th>ELIMINAR</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<script src="<?= asset('./build/js/grados/index.js')  ?>"></script>