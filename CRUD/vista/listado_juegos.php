

<?php
  $lista = include("../controlador/listado.php");
  include("header.php");
?>
    
<div class="row">
  <div class="col-12">
    <h1 class="text-center">Listado de juegos</h1>
  </div>
  <div class=" offset-9 col-3">
    <a href="form.php" class="btn btn-primary">Crear juego</a>
  </div>
  <div class="col-12">

  </div>
  <table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">ID #</th>
        <th scope="col">Nombre</th>
        <th scope="col">Sinopsis</th>
        <th scope="col">Imagen</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($lista as $registro){ ?>
      <tr>
        <th> <?php echo $registro["id"]; ?> </th>
        <td> <?php echo $registro["nombre"]; ?> </td>
        <td> <?php echo $registro["descripcion"]; ?> </td>
        <td> <img src="<?php echo $registro["imagen"]; ?>" width="100px" alt="cover"> </td>
        <td> <a href="../controlador/editando.php?id=<?php echo $registro["id"]; ?>" class="btn btn-warning">Editar</a> </td>
        <td> <a href="../controlador/eliminar.php?id=<?php echo $registro["id"]; ?>" class="btn btn-danger">Eliminar</a> </td>
      </tr>
</div>



    <?php
    }
    ?>
  </tbody>
</table>
</body>
</html>
<?php
    include("footer.php"); ?>