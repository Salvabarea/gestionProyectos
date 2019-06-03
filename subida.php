<?php
session_start();
include('_con.php');
$nombre = $_SESSION['nombre'];

	$nombre = $_POST['nombreArchivo'];
	$extension = $_FILES['archivo']['type'];
	$tamaño = $_FILES['archivo']['size'];
	$descripcion = $_POST['descripcionArchivo'];

	move_uploaded_file($_FILES['archivo']['tmp_name'], "archivos/$nombre.pdf");

	mysqli_query ($conexion, "INSERT INTO proyecto (Nombre, URL, Descripcion) VALUES ('$nombre','archivos/$nombre.pdf','$descripcion')");
	mysqli_query ($conexion, "INSERT INTO log (Accion, Usuario, Fecha) VALUES ('Subida','$nombre', NOW())");

header("Location: subirProyecto.php");
?>