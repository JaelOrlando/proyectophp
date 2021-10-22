<?php require_once 'include/header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $daño = $_POST['daño'];
    $color = $_POST['color'];
    $peso = $_POST['peso'];
    $imagen = $_FILES['imagen'];

    $target_dir = 'imagenes/';
    $orig_file = $_FILES["imagen"]["tmp_name"];
    $destination = $target_dir . $imagen['name'];
    move_uploaded_file($orig_file, $destination);

    include_once 'db/conexion.php';

    $query = mysqli_query($con, "INSERT INTO armas (nombre_arma, daño, color, peso, imagen) VALUES ('$nombre', $daño, '$color', $peso, '$nombre')");

    echo '<div class="alert alert-success container" role="alert">Arma guardada correctamente</div>';
}

?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="container form-control bg-secondary mb-5">
        <div class="text-center">
            <h1>Armas PUBG</h1>
        </div>
        <div class="w-50 mx-auto">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nombre de la arma</span>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Daño</span>
                <input type="text" class="form-control" name="daño">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Color</span>
                <input type="text" class="form-control" name="color">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Peso</span>
                <input type="text" class="form-control" name="peso">
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