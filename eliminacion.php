<?php
session_start();
include('_con.php');
error_reporting(0);
$id = $_SESSION['id'];

$IdProyecto = $_POST['IdProyecto'];

mysqli_query($conexion, "DELETE FROM proyecto WHERE IdProyecto=$IdProyecto");
mysqli_query ($conexion, "INSERT INTO log (accion, usuario, fecha) VALUES ('Eliminar','$id', NOW())");
header("Location: proyectosProfesor.php");
?>