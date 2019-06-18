<?php
session_start();
include('_con.php');
$nombre = $_SESSION['nombre'];
$id = $_SESSION['id'];

 	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$rol = $_POST['rol'];
	$pass = $_POST['pass'];

	mysqli_query ($conexion, "INSERT INTO usuario (nombre, pass, email, imagen, apellido, rol) VALUES ('$nombre', '$pass', '$email','img/hm3.jpg','$apellido','$rol')");

	mysqli_query ($conexion, "INSERT INTO log (accion, usuario, fecha) VALUES ('Alta usuario','$id', NOW())");
if ($_SESSION['rol'] == 'profesor') {
	header("Location: usuariosProf.php");
} else {
	header("Location: usuariosAdmin.php");
}
?>