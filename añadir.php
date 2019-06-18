<?php
session_start();
include('_con.php');
$nombre = $_SESSION['nombre'];
$id = $_SESSION['id'];

 	$idUsuario = $_POST['idUsuario'];
	$curso = $_POST['curso'];

	mysqli_query ($conexion, "INSERT INTO alumno (curso, idUsuario) VALUES ('$curso', '$idUsuario')");

	mysqli_query ($conexion, "INSERT INTO log (accion, usuario, fecha) VALUES ('Alta curso','$id', NOW())");

header("Location: cursosAlumno.php");
?>