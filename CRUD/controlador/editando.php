<?php
    # Recibo el id del listado
    $id = $_GET['id'];

    # Conectar a BD
    $bd = include("../modelo/bd.php");

    # Sentencia
    $sentencia = $bd->prepare("SELECT * FROM juegos WHERE id = ?");
    $sentencia->bind_param("i", $id);
    $sentencia->execute();

    # Resultado de la ejecucion
    $resul = $sentencia->get_result();

    # Pasar resultado a array
    $juego = $resul->fetch_assoc();

    # Comprobar que tenemos el juego en consulta
    if(!$juego){
        echo "No existe un juego con ese ID";
    }else{
        header("Location: ../vista/editar.php");
    }
    return $juego;

?>