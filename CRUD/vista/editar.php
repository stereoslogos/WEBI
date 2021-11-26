
<?php
    
    //Recibe el id del listado
    include("header.php");

    //Recibiendo los datos
    $juego = include("../controlador/editando.php");

?>
    <div class="col-sm-6 ">
        <h1 class="text-center">Edit GAMES!</h1>

        <form action="../controlador/actualizar.php" method="POST">
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