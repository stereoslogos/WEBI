<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>
    <form>
        <input name="nom" type="text" placeholder="Digita Nombre"><br>
        <button type="submit"> Enviar Datos </button>
    </form>
</body>
</html>

<?php 
    if( isset( $_GET["nom"] ) ){
        function decirnombre(){
            $nombre = $_GET["nom"];
            if(is_numeric($nombre)){
                echo "Debe ingresar un nombre valido";
            }else{
                echo "el nombre es: " . $nombre;
                
            }
           
        }
        decirnombre();
    }
    


?>