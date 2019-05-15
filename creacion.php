<?php
include('_con.php');

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

Header('Location: usuariosProf.php');
?>