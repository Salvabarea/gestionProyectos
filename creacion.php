<?php
session_start();
include('_con.php');
$nombre = $_SESSION['nombre'];
$id = $_SESSION['id'];

 	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$rol = $_POST['rol'];
	$curso = $_POST['curso'];
	$pass = $_POST['pass'];

	mysqli_query ($conexion, "INSERT INTO usuario (nombre, pass, email, imagen, apellido, rol) VALUES ('$nombre', '$pass', '$email','img/hm3.jpg','$apellido',$rol)");

	$busqueda = mysqli_query ($conexion, "SELECT idUsuario FROM usuario WHERE email='$email");

	$file = fopen("archivos/logs.txt", "a");

	fwrite($file, "El usuario $nombre ha dado de alta un usuario.".PHP_EOL);

	fclose($file);

	mysqli_query ($conexion, "INSERT INTO log (accion, usuario, fecha) VALUES ('Alta usuario','$id', NOW())");
header("Location: usuariosProf.php");
?>