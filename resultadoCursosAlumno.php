<table class="display" id="cursosAlumno">
  <thead>
    <tr>
      <th>ID</th>
      <th>Curso</th>
      <th>Usuario</th>
    </tr>
  </thead>
  <?php
    $buscar = $_POST["curso"];
    $busqueda= mysqli_query ($conexion, "SELECT * FROM alumno WHERE Curso like '%$buscar%'");
    while($registro = mysqli_fetch_array($busqueda)) {
      $idUsuario = $registro[2];
      $usuario = mysqli_query ($conexion, "SELECT nombre FROM usuario WHERE idUsuario = '$idUsuario'");
      echo '
        <tr>
          <td>'.$registro[0].'</td>
          <td>'.$registro[1].'</td>
          <td>'.mysqli_fetch_array($usuario)[0].'</td>
        </tr>
      ';
    };
  ?> 
</table>