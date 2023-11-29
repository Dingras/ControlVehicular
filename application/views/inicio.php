<!doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <title>Practica 2do Parcial</title>
    </head>
    
    <body class="px-4">
        <br><?php echo validation_errors();?>
        <form class="card" method="post" action=<?php echo site_url("inicio_controller/guardar")?>>
            <div class="card-body form-row">
                <div class="col-5">
                    <input type="text" name="marca" class="form-control" placeholder="Marca">
                    <?php echo form_error('marca','<div class="alert alert-warning" role="alert">',"</div>");?>
                </div>
                <div class="col-4">
                    <input type="text" name="modelo" class="form-control" placeholder="Modelo">
                    <?php echo form_error('modelo');?>
                </div>
                <div class="col">
                    <input type="text" name="patente" class="form-control" placeholder="Patente">
                    <?php echo form_error('patente');?>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>
        <br>
        <div class="card">
        <h5 class="card-header">Lista de vehiculos</h5>
            <ul class="card-body list-group px-4">
                <?php
                foreach ($autos as $a){
                ?>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-3"><h4><?php echo $a['marca']?></h4></div>
                        <div class="col-3"><h4><?php echo $a['modelo']?></h4></div>
                        <div class="col-3"><h4><?php echo $a['patente']?></h4></div>
                        <span class="col-1"><a class="btn btn-success" href=""><i class="bi bi-car-front"></i></a></span>
                        <span class="col-1"><a class="btn btn-warning" href=<?php echo site_url('Inicio_controller/editar/'.$a['id']); ?>><i class="bi bi-car-front"></i></a></span>
                        <span class="col-1"><a class="btn btn-danger" href=<?php echo site_url('Inicio_controller/borrar/'.$a['id']); ?>><i class="bi bi-car-front-fill"></i></a></span>
                    </div>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>


        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    </body>
</html>