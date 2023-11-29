<br>
<form class="card" method="post" action=<?php echo site_url('Form_editar_controller/editar/'.$auto['id'])?>>
    <h5 class="card-header">Editar vehiculo</h5>
    <div class="card-body form-row">
        <div class="col-5">
            <input type="text" name="marca" class="form-control" placeholder="Marca" value=<?php echo $auto['marca']; ?>>
        </div>
        <div class="col-4">
            <input type="text" name="modelo" class="form-control" placeholder="Modelo" value=<?php echo $auto['modelo']; ?>>
        </div>
        <div class="col">
            <input type="text" name="patente" class="form-control" placeholder="Patente" value=<?php echo $auto['patente']; ?>>
        </div>
        <div class="col">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>
