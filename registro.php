<?php
session_start();

$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];

$conexion = mysqli_connect("localhost","root","");

mysqli_select_db($conexion, 'bootstrap');

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

// Apellido del usuario.
$busqueda = mysqli_query($conexion, "SELECT * FROM usuario WHERE Email='$correo'");
$apellido = mysqli_fetch_array($busqueda)[6];
$_SESSION['apellido'] = $apellido;

// Imagen del usuario.
$busqueda = mysqli_query($conexion, "SELECT * FROM usuario WHERE Email='$correo'");
$imagen = mysqli_fetch_array($busqueda)[5];
$_SESSION['imagen'] = $imagen;

// Curso del usuario.
$busqueda = mysqli_query($conexion, "SELECT a.Curso FROM alumno a, usuario u WHERE u.Email='$correo' and a.IdUsuario=u.Idusuario");
$curso = mysqli_fetch_array($busqueda)[0];
$_SESSION['curso'] = $curso;

// ¿Alumno o profesor?
$busqueda = mysqli_query($conexion, "SELECT * FROM usuario WHERE Email='$correo'");
$rol = mysqli_fetch_array($busqueda)[7];
$_SESSION['rol'] = $rol;

// Comprobación del loggin y acceso a la página principal.
if ($correo == $email && $contrasena == $pass) {
	Header('Location: principal.php');
} else {
	Header('Location: index.php');
}

mysqli_close ($conexion);
?>