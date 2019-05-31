<?php
session_start();
include('_con.php');
$nombre = $_SESSION['nombre'];
 	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$rol = $_POST['rol'];
	$pass = $_POST['pass'];

	if ($rol == 'Profesor') {
		$rol = 1;
	} else {
		$rol = 0;
	}

	$consulta = mysqli_query ($conexion, "INSERT INTO usuario (Nombre, Contrasena, Email, Imagen, Apellido, Rol) VALUES ('$nombre', '$pass', '$email','img/hm3.jpg','$apellido',$rol)");


	$file = fopen("archivos/logs.txt", "a");

	fwrite($file, "El usuario $nombre ha dado de alta un usuario.".PHP_EOL);

	fclose($file);

Header('Location: usuariosProf.php');
?>