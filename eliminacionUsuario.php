<?php
session_start();
include('_con.php');
error_reporting(0);
$id = $_SESSION['id'];

$idUsuario = $_POST['idUsuario'];

mysqli_query($conexion, "DELETE FROM usuario WHERE idUsuario=$idUsuario");
mysqli_query ($conexion, "INSERT INTO log (accion, usuario, fecha) VALUES ('Eliminar','$id', NOW())");
if ($_SESSION['rol'] == 'profesor') {
	header("Location: usuariosProf.php");
} else {
	header("Location: usuariosAdmin.php");
}
?>