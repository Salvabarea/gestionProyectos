<?php
session_start();
include('_con.php');
error_reporting(0);

	$IdProyecto = $_SESSION['IdProyecto'];
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];
	$año = $_POST['año'];
	$alumno = $_POST['alumno'];
	$nota = $_POST['nota'];

	mysqli_query($conexion, "UPDATE proyecto SET Nombre='$nombre' WHERE IdProyecto=$IdProyecto");
	mysqli_query($conexion, "UPDATE proyecto SET Descripcion='$descripcion' WHERE IdProyecto=$IdProyecto");
	mysqli_query($conexion, "UPDATE proyecto SET Año= '$año' WHERE IdProyecto=$IdProyecto");
	mysqli_query($conexion, "UPDATE proyecto SET Alumno='$alumno' WHERE IdProyecto=$IdProyecto");
	mysqli_query($conexion, "UPDATE proyecto SET Nota='$nota' WHERE IdProyecto=$IdProyecto");

Header('Location: proyectosProfesor.php');
?>