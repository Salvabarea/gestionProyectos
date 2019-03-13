<?php

$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];

$conexion = mysqli_connect("localhost","alexlp","Asir2php2.");

mysqli_select_db($conexion, 'bootstrap');

$busqueda = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Email='$correo'");
print_r(mysqli_fetch_array($busqueda));

$email = mysqli_fetch_array($busqueda)[4];
$pass = mysqli_fetch_array($busqueda)[3];

print_r($email);
print_r($pass);
/*
if ($correo == $email && $contraseña == $pass) {
	echo "Estás dentro.";
} else {
	echo "La shupas.";
}*/

?>