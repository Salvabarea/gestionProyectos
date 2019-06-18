<?php
session_start();
include('_con.php');
error_reporting(0);
$id = $_SESSION['id'];

 	$IdUsuario = $_SESSION['formIdUsuario'];
	$nuevoNombre = $_POST['nombre'];
	$nuevoApellido = $_POST['apellido'];
	$nuevoEmail = $_POST['email'];
	$nuevaImagen = $_POST['imagen'];
	$nuevoRol = $_POST['rol'];

	mysqli_query($conexion, "UPDATE usuario SET nombre='$nuevoNombre' WHERE IdUsuario=$IdUsuario");
	mysqli_query($conexion, "UPDATE usuario SET apellido='$nuevoApellido' WHERE IdUsuario=$IdUsuario");
	mysqli_query($conexion, "UPDATE usuario SET email='$nuevoEmail' WHERE IdUsuario=$IdUsuario");
	mysqli_query($conexion, "UPDATE usuario SET rol='$nuevoRol' WHERE IdUsuario=$IdUsuario");
	mysqli_query($conexion, "UPDATE usuario SET imagen='img/$nuevaImagen' WHERE IdUsuario=$IdUsuario");

	mysqli_query ($conexion, "INSERT INTO log (accion, usuario, fecha) VALUES ('Modificar usuario','$id', NOW())");

if ($_SESSION['rol'] == 'profesor') {
	header("Location: usuariosProf.php");
} else {
	header("Location: usuariosAdmin.php");
}
?>