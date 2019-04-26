<table id="proyectos" class="table table-hover" width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td width="100" align="center"><strong>#</strong></td>
    <td width="100" align="center"><strong>Nombre</strong></td>
    <td width="100" align="center"><strong>Descripción</strong></td>
    <td width="100" align="center"><strong>Año</strong></td>
    <td width="100" align="center"><strong>Nota</strong></td>
    <td width="100" align="center"><strong>URL</strong></td>
  </tr> 

  <?php
    $buscar = $_POST["proyectoNombre"];
    $buscar2 = $_POST["año"];

    $busqueda= mysqli_query ($conexion, "SELECT * FROM proyecto WHERE Nombre like '%$buscar%'");
    while($registro = mysqli_fetch_array($busqueda)) {
    ?> 
           <tr>
              <td class="estilo-tabla" align="center"><?=$registro[0]?></td>
              <td class="estilo-tabla" align="center"><?=$registro[1]?></td>
              <td class="estilo-tabla" align="center"><?=$registro[2]?></td>
              <td class="estilo-tabla" align="center"><?=$registro[3]?></td>
              <td class="estilo-tabla" align="center"><?=$registro[4]?></td>
              <td class="estilo-tabla" align="center"><a href="<?=$registro[5]?>"><img src='img/dw.png'></a></td>
           </tr> 
    <?php 
       } //fin blucle
    ?>
</table>