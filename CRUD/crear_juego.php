<?php
    # incluir conexion a bdd
    $bd = include("bd.php");

    if(isset($_FILES['imagen'])){
        $nombre = $_POST['nombre'];
        $des = $_POST['descripcion'];
        $img = $_FILES['imagen']['name'];

        # Ruta imgs
        $ruta = "http://localhost/ochophp/crud/img/$img";

        $directorio = $_SERVER['DOCUMENT_ROOT']."/ochophp/crud/img/";
        $subir_img_proyecto = $directorio.basename($_FILES['imagen']['name']);
        if(move_uploaded_file($_FILES['imagen']['tmp_name'],$subir_img_proyecto)){

            # Sentencia SQL
            $sentencia = $bd->prepare("INSERT INTO
            juegos (nombre, descripcion,imagen)
            values (?, ?, ?)");
    
            # Pasar datos a sentencia
            $sentencia->bind_param("sss", $nombre, $des, $ruta);
    
            # Comprobar si se registraron los datos
            if($sentencia->execute())
                echo "<script> alert('Data registered') </script>";
            else
                echo "<script> alert('Data NOT registered') </script>";
    
            
            header("Location: listado_juegos.php");
        }else{ 
            echo "Can not save image on address.";
        }

        
    }else{
        echo "Image NOT added";
    }

