<?php
session_start();
include('_con.php');
error_reporting(0);
$nombre = $_SESSION['nombre'];
?>

<!DOCTYPE html>
<html>

<!-- Cabecera -->

<head>
	<?php
	include('head.php');
	?>
	<title>Modificar usuario</title>
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
	        include("navbar.php");
	    ?> 
	</header>

	<div class="container fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card form-index mx-4 mt-4">
						<h5 class="mt-3 mx-2">
							Modificar usuario:
						</h5>
						<form method="GET">
							<div class="form-group mx-4 mt-4">
								<label for="IdUsario">Id Usuario:</label>
				            	<input type="IdUsuario" class="form-control" id= "IdUsuario" name="IdUsuario" placeholder="Id">
				            	<br>
				            	<input type="submit" class="btn btn-primary" value="Buscar">
							</div>
						</form>

						<?php
						$IdUsuario = $_GET['IdUsuario'];
						$_SESSION['formIdUsuario']=$IdUsuario;
						$busqueda = mysqli_query($conexion, "SELECT * FROM usuario WHERE IdUsuario='$IdUsuario'");
						$nombre = mysqli_fetch_array($busqueda)[1];
						$busqueda = mysqli_query($conexion, "SELECT * FROM usuario WHERE IdUsuario='$IdUsuario'");
						$apellido = mysqli_fetch_array($busqueda)[2];
						$busqueda = mysqli_query($conexion, "SELECT * FROM usuario WHERE IdUsuario='$IdUsuario'");
						$email = mysqli_fetch_array($busqueda)[4];
						$busqueda = mysqli_query($conexion, "SELECT * FROM usuario WHERE IdUsuario='$IdUsuario'");
						$rol = mysqli_fetch_array($busqueda)[6];
						$busqueda = mysqli_query($conexion, "SELECT * FROM usuario WHERE IdUsuario='$IdUsuario'");
						$imagen = mysqli_fetch_array($busqueda)[5];
						?>

						<form action="modificacion.php" method="POST">
				          <div class="form-group mx-4 mt-4">
				            <label for="nombre">Nombre:</label>
				            <input type="nombre" class="form-control" id= "nombre" name="nombre" placeholder=<?php print_r($nombre) ?>>
				            <label for="apellido">Apellido:</label>
				            <input type="apellido" class="form-control" id= "apellido" name="apellido" placeholder=<?php print_r($apellido) ?>>
				            <label for="email">Email:</label>
				            <input type="email" class="form-control" id= "email" name="email" placeholder=<?php print_r($email) ?>>
				            <label for="imagen">Imagen:</label>
				            <input type="imagen" class="form-control" id= "imagen" name="imagen" placeholder=<?php print_r($imagen) ?>>
				          	<label for="rol">Rol:</label>
				            <select type="rol" class="form-control" id= "rol" name="rol">
							    <option>profesor</option>
            					<option>alumno</option>
							</select>
							<br>
							<input type="submit" class="btn btn-primary" value="Modificar">
				           </div>
				        </form>
					</div>
					<br>
				</div>
			</div>
	</div>

	<!-- Pie -->
	<?php
        include("pie.php");
    ?> 
</body>
</html>