<?php require_once 'include/header.php'; ?>
<form action="añadirarma.php" method="post" enctype="multipart/form-data">
    <div class="container form-control bg-secondary">
        <div class="text-center">
            <h1>Armas PUBG</h1>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label">Nombre de la arma</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nombre">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label">Daño</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="daño">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label">Color</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="color">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label">Peso</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name=="peso">
            </div>
        </div>

        <div class="mb-3 container w-50">
            <input type="file" accept="image/*" class="form-control" name="imagen" value="">

        </div>
        <div class="text-center">
            <input type="submit" class="btn btn-success" name="arma" value="Enviar">
        </div>
    </div>
</form>
<?php require_once 'include/footer.php'; ?>