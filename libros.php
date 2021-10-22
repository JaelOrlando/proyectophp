<?php require_once 'include/header.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $titulo=$_POST['basic-addon1'];
    $autor=$_POST['basic-addon2'];
    $genero=$_POST['basic-addon3'];
    $fecha=$_POST['basic-addon4'];
    $precio=$_POST['basic-addon5'];
    $imagen=$_FILES['imagen'];

    $target_dir='imagenes/';
    $orig_file=$_FILES["imagen"]["tmp_name"];
    $destination=$target_dir.$imagen['name'];
    move_uploaded_file($orig_file, $destination);

    header("Location: libros.php");

    include_once 'db/conexion.php';
    
    $query = mysqli_query($con, "INSERT INTO libros (titulo, autor, genero, fecha, precio, imagen) VALUES ('$titulo', $autor, '$genero', $fecha, $precio, '$imagen')");

    echo '<div class="alert alert-success container" role="alert">Arma guardada correctamente</div>';
}
?>

<form action="añadirlibro.php" method="post" enctype="multipart/form-data">
    <div class="container bg-secondary form-control">
       <div class="text-center"> 
           <h2>Libros</h2>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nombre del libro</span>
            <input type="text" class="form-control" name="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon2">Nombre del autor</span>
            <input type="text" class="form-control" name="basic-addon2">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" >Genero</span>
            <input type="text" class="form-control" name="basic-addon3">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" >Fecha de publicacion</span>
            <input type="text" class="form-control" name="basic-addon4">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" >Precio</span>
            <input type="text" class="form-control" name="basic-addon5">
        </div>

        <div class="mb-3 container w-50">
            <input type="file" accept="image/*" class="form-control" name="imagen" value="">
        </div>

        <div class="text-center">
            <input type="submit" class="btn btn-success" name="libro" value="Enviar">
        </div>
    </div>


    <?php require_once 'include/footer.php'; ?>