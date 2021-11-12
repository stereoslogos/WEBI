<?php
    include("header.php"); ?>
    <div class="col-sm-6 ">
        <h1 class="text-center">GAMES!</h1>

        <form action="crear_juego.php" method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nombre del juego</label>
                <input name="nombre" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Escriba el nombre del juego">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Sinopsis del juego</label>
                <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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