<?php
session_start();
include('_con.php');
$id = $_SESSION['id'];

	$nombre = $_POST['nombreArchivo'];
	$extension = $_FILES['archivo']['type'];
	$tamaño = $_FILES['archivo']['size'];
	$descripcion = $_POST['descripcionArchivo'];

	move_uploaded_file($_FILES['archivo']['tmp_name'], "archivos/$nombre.pdf");

	mysqli_query ($conexion, "INSERT INTO proyecto (nombre, url, descripcion) VALUES ('$nombre','archivos/$nombre.pdf','$descripcion')");
	mysqli_query ($conexion, "INSERT INTO log (accion, usuario, fecha) VALUES ('Subir','$id', NOW())");

header("Location: subirProyecto.php");
?>