<?php
    # Incluir conexion bd
    $bd = include("bd.php");

    # Senetencia para obtener los resultados
    $sentencia = $bd->query("SELECT * FROM juegos");

    # convertir los resultados en un array
    $registros = $sentencia->fetch_all(MYSQLI_ASSOC);
    
?>

<?php
    include("header.php"); ?>
    
<h1 class="text-center">Listado de juegos</h1>
<a href="form.php" class="btn btn-primary">Crear juego</a>

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
    <?php foreach($registros as $registro){ ?>
    <tr>
      <th> <?php echo $registro["id"]; ?> </th>
      <td> <?php echo $registro["nombre"]; ?> </td>
      <td> <?php echo $registro["descripcion"]; ?> </td>
      <td> <img src="<?php echo $registro["imagen"]; ?>" width="100px" alt="cover"> </td>
      <td> <a href="editar.php?id=<?php echo $registro["id"]; ?>" class="btn btn-warning">Editar</a> </td>
      <td> <a href="eliminar.php?id=<?php echo $registro["id"]; ?>" class="btn btn-danger">Eliminar</a> </td>
    </tr>

    <?php
    }
    ?>
  </tbody>
</table>
</body>
</html>
<?php
    include("footer.php"); ?>