<?php
session_start();
include('_con.php');
error_reporting(0);
?>

<!DOCTYPE html>
<html>

<!-- Cabecera -->

<head>
	<?php
	include('head.php');
	?>
	<title>Alta usuario</title>
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
							Alta Usuario:
						</h5>
						<form action="creacion.php" method="POST">
				          <div class="form-group mx-4 mt-4">
				            <label for="nombre">Nombre:</label>
				            <input type="text" class="form-control" id= "nombre" name="nombre">
				            <label for="apellido">Apellido:</label>
				            <input type="text" class="form-control" id= "apellido" name="apellido">
				            <label for="pass">Contraseña:</label>
				            <input type="text" class="form-control" id= "pass" name="pass">           
				            <label for="email">Email:</label>
				            <input type="email" class="form-control" id= "email" name="email">
				          	<label for="rol">Rol:</label>
				            <select type="text" class="form-control" id= "rol" name="rol">
							    <option>Profesor</option>
            					<option>Alumno</option>
							</select>
							<br>
							<input type="submit" class="btn btn-primary" value="Alta usuario">
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