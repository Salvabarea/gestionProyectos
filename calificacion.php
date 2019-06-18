<?php
session_start();
include('_con.php');
error_reporting(0);
$id = $_SESSION['id'];

	$IdProyecto = $_SESSION['IdProyecto'];
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];
	$año = $_POST['año'];
	$alumno = $_POST['alumno'];
	$nota = $_POST['nota'];

	mysqli_query($conexion, "UPDATE proyecto SET Nombre='$nombre' WHERE IdProyecto=$IdProyecto");
	mysqli_query($conexion, "UPDATE proyecto SET Descripcion='$descripcion' WHERE IdProyecto=$IdProyecto");
	mysqli_query($conexion, "UPDATE proyecto SET year= '$año' WHERE IdProyecto=$IdProyecto");
	mysqli_query($conexion, "UPDATE proyecto SET Alumno='$alumno' WHERE IdProyecto=$IdProyecto");
	mysqli_query($conexion, "UPDATE proyecto SET Nota='$nota' WHERE IdProyecto=$IdProyecto");
	mysqli_query ($conexion, "INSERT INTO log (accion, usuario, fecha) VALUES ('Calificar','$id', NOW())");
if ($_SESSION['rol'] == 'profesor') {
	header("Location: proyectosProfesor.php");
} else {
	header("Location: proyectosAdmin.php");
}
?>