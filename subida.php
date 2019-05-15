<?php
session_start();
include('_con.php');

	$nombre = $_POST['nombreArchivo'];
	$extension = $_FILES['archivo']['type'];
	$tamaño = $_FILES['archivo']['size'];

	move_uploaded_file($_FILES['archivo']['tmp_name'], "archivos/$nombre.pdf");

	mysqli_query ($conexion, "INSERT INTO proyecto (Nombre, URL) VALUES ('$nombre','archivos/$nombre.pdf')");

header("Location: subirProyecto.php");
?>