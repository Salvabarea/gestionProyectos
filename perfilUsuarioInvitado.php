<?php
session_start();
include ("_con.php");
?>

<!DOCTYPE html>
<html>

<!-- Cabecera -->

<head>
	<?php
		include('head.php');
	?>
	<title>Perfil usuario</title>
</head>

<!-- Cuerpo -->

<body>

	<!-- Cabecera -->
	<header>
		<div class="container">
			<div class="row">
				<img src="img/jacalogo2.jpeg">
				<h1>Gestión de proyectos I.E.S. Jacarandá</h1>
			</div>
		</div>
		<?php
	        include("navbarInvitado.php");
	    ?> 
	</header>

	<?php
	$IdUsuario = $_POST['IdUsuario'];
	$busqueda = mysqli_query($conexion, "SELECT * FROM usuario WHERE IdUsuario=$IdUsuario");
	$nombre = mysqli_fetch_array($busqueda)[1];
	$busqueda = mysqli_query($conexion, "SELECT * FROM usuario WHERE IdUsuario=$IdUsuario");
	$apellido = mysqli_fetch_array($busqueda)[6];
	$busqueda = mysqli_query($conexion, "SELECT * FROM usuario WHERE IdUsuario=$IdUsuario");
	$email = mysqli_fetch_array($busqueda)[4];
	$busqueda = mysqli_query($conexion, "SELECT a.Curso FROM alumno a, usuario u WHERE a.IdUsuario=$IdUsuario");
	$curso = mysqli_fetch_array($busqueda)[0];
	$busqueda = mysqli_query($conexion, "SELECT * FROM usuario WHERE IdUsuario=$IdUsuario");
	$imagen = mysqli_fetch_array($busqueda)[5];
	$busqueda = mysqli_query($conexion, "SELECT * FROM usuario WHERE IdUsuario=$IdUsuario");
	$rol = mysqli_fetch_array($busqueda)[7];
	?>

	<div class="container fluid">
		<div class="row">
			<div class="col-md-8">
				<h3 class="mb-2 mt-3">
					Perfil del <?php 
						if ($rol == 1) {
							echo "profesor";
						} else {
							echo "alumno";
						}
					 ?> <?php print_r($nombre) ?>.
				</h3>
				<div class="card form-index mx-4 mt-4">
					<h5 class="mt-3 mx-2">
						Nombre y apellidos:
					</h5><p class="mx-2"><?php print_r($nombre) ?> <?php print_r($apellido) ?></p>
					<h5 class="mt-3 mx-2">
						Curso:
					</h5><p class="mx-2"><?php print_r($curso) ?></p>
					<h5 class="mt-3 mx-2">
						Imagen de perfil:
					</h5>
					<img src="<?php print_r($imagen) ?>" border='0' width='200' height='200'>
					<h5 class="mt-3 mx-2">
						Email:
					</h5><p class="mx-2"><?php print_r($email) ?></p>
					<h5 class="mt-3 mx-2">
						Rol:
					</h5><p class="mx-2"><?php 
						if ($rol == 1) {
							echo "Profesor";
						} else {
							echo "Alumno";
						}
					 ?></p>
				</div>
			</div>
			<div class="col-md-4 mb-10 mt-3">
				<img src="img/hm2.jpg">
				<br>
			</div>
		</div>
	</div>
	<br>
	<!-- Pie -->
	<?php
        include("pie.php");
    ?> 

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>