<?php
session_start();

$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];

$conexion = mysqli_connect("localhost","root","");

mysqli_select_db($conexion, 'bluebook');

// Búsqueda para el loggin.
$busqueda = mysqli_query($conexion, "SELECT * FROM usuario WHERE Email='$correo'");
$email = mysqli_fetch_array($busqueda)[4];
$_SESSION['correo'] = $email;

$busqueda = mysqli_query($conexion, "SELECT * FROM usuario WHERE Email='$correo'");
$pass = mysqli_fetch_array($busqueda)[3];

// Búsquedas para el session.
// Nombre del usuario.
$busqueda = mysqli_query($conexion, "SELECT * FROM usuario WHERE Email='$correo'");
$nombre = mysqli_fetch_array($busqueda)[1];
$_SESSION['nombre'] = $nombre;

$busqueda = mysqli_query($conexion, "SELECT * FROM usuario WHERE Email='$correo'");
$id = mysqli_fetch_array($busqueda)[0];
$_SESSION['id'] = $id;

// Apellido del usuario.
$busqueda = mysqli_query($conexion, "SELECT * FROM usuario WHERE Email='$correo'");
$apellido = mysqli_fetch_array($busqueda)[2];
$_SESSION['apellido'] = $apellido;

// Imagen del usuario.
$busqueda = mysqli_query($conexion, "SELECT * FROM usuario WHERE Email='$correo'");
$imagen = mysqli_fetch_array($busqueda)[5];
$_SESSION['imagen'] = $imagen;

// ¿Alumno o profesor?
$busqueda = mysqli_query($conexion, "SELECT * FROM usuario WHERE Email='$correo'");
$rol = mysqli_fetch_array($busqueda)[6];
$_SESSION['rol'] = $rol;

// Curso del usuario.
if ($rol == 'alumno') {
	$busqueda = mysqli_query($conexion, "SELECT a.curso FROM alumno a, usuario u WHERE u.Email='$correo' and a.IdUsuario=u.Idusuario");
	$curso = mysqli_fetch_array($busqueda)[0];
	$_SESSION['curso'] = $curso;
} else {
	$busqueda = mysqli_query($conexion, "SELECT p.curso FROM profesor p, usuario u WHERE u.Email='$correo' and p.IdUsuario=u.Idusuario");
	$curso = mysqli_fetch_array($busqueda)[0];
	$_SESSION['curso'] = $curso;
}

// Comprobación del loggin y acceso a la página principal.
if ($correo == $email && $contrasena == $pass) {
	Header('Location: principal.php');
} else {
	Header('Location: index.php');
}

mysqli_close ($conexion);
?>