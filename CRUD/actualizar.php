<?php
    $bd = include("bd.php");

    # Recibir variables del formulario editar
    echo $id = $_POST['id'];
    echo $nombre = $_POST['nombre'];
    echo $des = $_POST['descripcion'];
    echo $img = $_POST['imagen'];
    # Ruta imgs
    $ruta = "http://localhost/ochophp/crud/img/$img";

    # Sentencia para guardar cambios
    $sentencia =$bd->prepare("UPDATE juegos SET nombre = ?, descripcion = ?, imagen = ? WHERE id = ?");

    # Parametros
    $sentencia->bind_param("sssi", $nombre, $des, $ruta, $id);
    $sentencia->execute();
    header("Location: listado_juegos.php");