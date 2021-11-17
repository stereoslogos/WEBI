<?php

$name = $_GET['name'];

if(isset($name)){
    echo "<h1>$name</h1>";
}else{
    echo "<h1>No name assigned</h1>";
}

function sayname(){
    global $name;
    echo "Name is $name";
}

sayname();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Enviar nombre</h1>

    <form>
        <input name="name" type="text" placeholder="Escriba su nombre">
        <input type="submit">
    </form>
</body>
</html>