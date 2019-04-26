<table id="tabla_1" class="table table-hover" width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
  <thead>
    <tr>
      <th width="100" align="center"><strong>Id</strong></th>
      <th width="100" align="center"><strong>Nombre</strong></th>
      <th width="100" align="center"><strong>Apellido</strong></th>
      <th width="100" align="center"><strong>Rol</strong></th>
    </tr>
  </thead> 

  <?php
    $buscar = $_POST["usuario"];
    $busqueda= mysqli_query ($conexion, "SELECT * FROM usuario WHERE Nombre like '%$buscar%'");
    while($registro = mysqli_fetch_array($busqueda)) {
    ?>
        <tbody>
           <tr>
              <td class="estilo-tabla" align="center"><?=$registro[0]?></td>
              <td class="estilo-tabla" align="center"><?=$registro[1]?></td>
              <td class="estilo-tabla" align="center"><?=$registro[6]?></td>
              <?php
                if ($registro[7] == 1) {
                  $rol='Profesor';
                } else {
                  $rol='Alumno';
                }
              ?>
              <td class="estilo-tabla" align="center"><?=$rol?></td>
           </tr>
        </tbody>  
    <?php 
       } //fin blucle
    ?>
</table>