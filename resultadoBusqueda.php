<table class="display" id="proyectos">
  <thead>
    <tr>
      <th>#</th>
      <th>Nombre</th>
      <th>Descripción</th>
      <th>Año</th>
      <th>Nota</th>
      <th>URL</th>
    </tr>
  </thead>
  <?php
    $buscar = $_POST["proyectoNombre"];
    $buscar2 = $_POST["año"];
    $busqueda= mysqli_query ($conexion, "SELECT * FROM proyecto WHERE Nombre like '%$buscar%'");
    while($registro = mysqli_fetch_array($busqueda)) {
      echo '
        <tr>
          <td>'.$registro[0].'</td>
          <td>'.$registro[1].'</td>
          <td>'.$registro[2].'</td>
          <td>'.$registro[4].'</td>
          <td>'.$registro[3].'</td>
          <td><a href='.$registro[5].'><img src="img/dw.png"></td>
        </tr>
      ';
    };
  ?> 
</table>