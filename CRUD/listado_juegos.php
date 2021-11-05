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
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</body>
</html>
<?php
    include("footer.php"); ?>