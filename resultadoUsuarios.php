<table class="display" id="usuarios">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Rol</th>
    </tr>
  </thead>
  <?php
    $buscar = $_POST["usuario"];
    $busqueda= mysqli_query ($conexion, "SELECT * FROM usuario WHERE Nombre like '%$buscar%'");
    while($registro = mysqli_fetch_array($busqueda)) {
      if ($registro[6] == 'profesor') {
        $rol='Profesor';
        } elseif ($registro[6] == 'alumno') {
            $rol='Alumno';
        } else {
            $rol='Administrador';
        }
      echo '
        <tr>
          <td>'.$registro[0].'</td>
          <td>'.$registro[1].'</td>
          <td>'.$registro[2].'</td>
          <td>'.$rol.'</td>
        </tr>
      ';
    };
  ?> 
</table>