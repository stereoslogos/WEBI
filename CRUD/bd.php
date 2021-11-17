<?php
    /* 1 indicar a donde se va a conectar / localhost
       2 indicar el usuario / root
       3 indicar la base de datos / ocho_php
       4 indicar la contraseña del usuario / "" */
    
    $host = "localhost";
    $user = "root";
    $bd = "ocho_php";
    $pass = "";

    /* single=mysqli
       poo=PDO */
    # Conectar a la bdd
    $connect = new mysqli($host, $user, $pass, $bd);

    # Check connection
    if($connect->connect_error)
        echo "Can't connect to DB".$connect->connect_error;
    else
        echo "Successful connection to DB";
    return $connect;