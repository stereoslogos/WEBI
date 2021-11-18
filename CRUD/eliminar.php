<?php
    $bd = include("bd.php");

    # Recibir variables del formulario eliminar
    $id = $_GET['id'];
    echo $id;

    # Sentencia para guardar cambios
    $sentencia =$bd->prepare("DELETE FROM juegos WHERE id = ?");

    # Pasar id a parametros
    $sentencia->bind_param("i", $id);
    $sentencia->execute();

    header("Location: listado_juegos.php");