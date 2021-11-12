<?php
    # incluir conexion a bdd
    $bd = include("bd.php");

    $nombre = $_POST['nombre'];
    $des = $_POST['descripcion'];
    $img = $_POST['imagen'];

    # Ruta imgs
    $ruta = "http://localhost/ochophp/crud/img/$img";

    # Sentencia SQL
    $sentencia = $bd->prepare("INSERT INTO
    juegos (nombre, descripcion,imagen)
    values (?, ?, ?)");

    # Pasar datos a sentencia
    $sentencia->bind_param("ss", $nombre, $des, $img);

    # Comprobar si se registraron los datos
    if($sentencia->execute())
        echo "<script> alert('Data registered') </script>";
    else
        echo "<script> alert('Data NOT registered') </script>";

    //Header("Location: form.php");