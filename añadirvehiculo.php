<?php

    if (isset($_POST['vehiculo'])) {
        $nombre = $_POST['nombre_vehiculo'];
        $marca = $_POST['marca_vehiculo'];
        $hp = $_POST['hp_vehiculo'];

        $imagen = $_FILES['imagen'];

        $target_dir = 'imagenes/';
        $orig_file = $_FILES["imagen"]["tmp_name"];
        $destination = $target_dir . $nombre;
        move_uploaded_file($orig_file, $destination);

        header("Location: vehiculos.php");
    
    }

?>
