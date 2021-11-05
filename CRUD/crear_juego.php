<?php
    # incluir conexion a bdd
    $bd = include("bd.php");

    $nombre = $_POST['nombre'];
    $des = $_POST['descripcion'];

    # Sentencia SQL
    $sentencia = $bd->prepare("INSERT INTO
    juegos (nombre, descripcion)
    values (?, ?)");
    $sentencia->bind_param("ss", $nombre, $des);
    if($sentencia->execute())
        echo "Data registered";
    else
        echo "Data NOT registered";

    Header("Location: form.php");