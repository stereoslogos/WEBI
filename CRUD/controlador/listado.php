<?php
    # Incluir conexion bd
    $bd = include("../modelo/bd.php");

    # Senetencia para obtener los resultados
    $sentencia = $bd->query("SELECT * FROM juegos");

    # convertir los resultados en un array
    $registros = $sentencia->fetch_all(MYSQLI_ASSOC);

    return $registros;
    
?>