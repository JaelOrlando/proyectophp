<?php
if (isset($_POST['libro'])){
    $titulo=$_POST['basic-addon1'];
    $autor=$_POST['basic-addon2'];
    $genero=$_POST['basic-addon3'];
    $fecha=$_POST['basic-addon4'];
    $precio=$_POST['basic-addon5'];
    $imagen=$_FILES['imagen'];

    $target_dir='imagenes/';
    $orig_file=$_FILES["imagen"]["tmp_name"];
    $destination=$target_dir.$titulo;
    move_uploaded_file($orig_file, $destination);

    header("Location: libros.php");
}
?>
