<?php
session_start();
include('_con.php');
error_reporting(0);

$IdProyecto = $_POST['IdProyecto'];

mysqli_query($conexion, "DELETE FROM proyecto WHERE IdProyecto=$IdProyecto");

Header('Location: eliminar.php');
?>