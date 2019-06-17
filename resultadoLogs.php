<table class="display" id="logs">
  <thead>
    <tr>
      <th>#</th>
      <th>Accion</th>
      <th>Usuario</th>
      <th>Fecha</th>
    </tr>
  </thead>
  <?php
    $buscar = $_POST["logBuscar"];
    $busqueda= mysqli_query ($conexion, "SELECT * FROM log WHERE accion like '%$buscar%'");
    while($registro = mysqli_fetch_array($busqueda)) {

        echo '
          <tr>
            <td>'.$registro[0].'</td>
            <td>'.$registro[1].'</td>
            <td>'.$registro[2].'</td>
            <td>'.$registro[3].'</td>
          </tr>
        ';
      };
  ?> 
</table>