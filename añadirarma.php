<?php

if (isset($_POST['arma'])) {
    $nombre = $_POST['nombre'];
    $daño = $_POST['daño'];
    $color = $_POST['color'];
    $peso = $_POST['peso'];
    $imagen = $_FILES['imagen'];

    $target_dir = 'imagenes/';
    $orig_file = $_FILES["imagen"]["tmp_name"];
    $destination = $target_dir . $nombre;
    move_uploaded_file($orig_file, $destination);

    include_once 'db/conexion.php';

    $query = mysqli_query($con, "INSERT INTO armas (nombre_arma, daño, color, peso, imagen) VALUES ('$nombre', $daño, '$color', $peso, '$nombre');");

    header("Location: armas.php");
}

?>
