<?php
session_start();
include('_con.php');
error_reporting(0);
$id = $_SESSION['id'];

 	$IdUsuario = $_SESSION['formIdUsuario'];
	$nuevoNombre = $_POST['nombre'];
	$nuevoApellido = $_POST['apellido'];
	$nuevoEmail = $_POST['email'];
	$nuevoRol = $_POST['rol'];

	mysqli_query($conexion, "UPDATE usuario SET Nombre='$nuevoNombre' WHERE IdUsuario=$IdUsuario");
	mysqli_query($conexion, "UPDATE usuario SET Apellido='$nuevoApellido' WHERE IdUsuario=$IdUsuario");
	mysqli_query($conexion, "UPDATE usuario SET Email='$nuevoEmail' WHERE IdUsuario=$IdUsuario");
	if ($nuevoRol == 'Profesor') {
		mysqli_query($conexion, "UPDATE usuario SET Rol=1 WHERE IdUsuario=$IdUsuario");
	} else {
		mysqli_query($conexion, "UPDATE usuario SET Rol=2 WHERE IdUsuario=$IdUsuario");
	}
	mysqli_query ($conexion, "INSERT INTO log (accion, usuario, fecha) VALUES ('Modificar usuario','$id', NOW())");
Header('Location: panelModificacion.php');
?>