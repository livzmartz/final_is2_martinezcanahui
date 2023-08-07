<div class="row justify-content-center" id="divTabla">
    <div class="col-lg-8">
        <h2>Detalle de las aplicaciones:</h2>
        <table class="table table-bordered table-hover" id="tablaDetalles">
            <thead class="table-dark">
                        <tr>
                            <th>NO. </th>
                            <th>APLICACIÓN</th>
                            <th>VER</th>
                        </tr>
                    </thead>
                    <tbody>
    <?php if (count($tareas) > 0) : ?>
        <?php foreach ($tareas as $key => $tareas) : ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $tareas['app_nombre'] ?></td>
                <td>
                    <?php if ($tareas['app_estado'] == 1) { ?>
                    <?php } else { ?>
                        no asignada aún
                    <?php } ?>
                </td>  
            </tr>
        <?php endforeach ?>
    <?php else : ?>
        <tr>
            <td colspan="4">NO EXISTEN REGISTROS</td>
        </tr>
    <?php endif ?>
</tbody>
                </table>
        </div>
    </div>   
</div>
<script src="<?= asset('./build/js/detalles/index.js')  ?>"></script>
