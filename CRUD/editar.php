<?php
    # Recibo el id del listado
    $id = $_GET['id'];

    # Conectar a BD
    $bd = include("bd.php");

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
    }
?>
<?php
    include("header.php"); ?>
    <div class="col-sm-6 ">
        <h1 class="text-center">Edit GAMES!</h1>

        <form action="actualizar.php" method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nombre del juego</label>
                <input name="nombre" type="text" value="<?php echo $juego['nombre'] ?>" class="form-control" id="exampleFormControlInput1" placeholder="Escriba el nombre del juego">
            </div>
            <input type="hidden" name="id" value="<?php echo $juego['id']; ?>">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Sinopsis del juego</label>
                <input name="descripcion" value="<?php echo $juego['descripcion'] ?>" class="form-control" id="exampleFormControlTextarea1" rows="3"></input>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Imagen del juego</label>
                <input name="imagen" type="file" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
<?php
    include("footer.php"); ?>