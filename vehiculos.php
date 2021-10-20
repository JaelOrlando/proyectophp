<?php require_once 'include/header.php'; ?>
<form action="añadirvehiculo.php" method="post" enctype="multipart/form-data">
    <div class="form-control bg-secondary container">
        <div class="text-center">
            <h1>
                Vehiculos PUBG
            </h1>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" >Nombre:</span>
            <input type="text" class="form-control" id="" name="nombre_vehiculo">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Marca:</span>
            <input type="text" class="form-control" id="" name="marca_vehiculo">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">HP:</span>
            <input type="text" class="form-control" id="hp_vehiculo" name="hp_vehiculo">
        </div>
        
        <div class="mb-3 container w-50">
            <input type="file" accept="image/*" class="form-control" name="imagen" value="" multiple>
        </div>

        <div class="text-center">
            <input type="submit" name="vehiculo" class="btn btn-success" value="Enviar">
        </div>
    </div>


</form>

<?php require_once 'include/footer.php'; ?>