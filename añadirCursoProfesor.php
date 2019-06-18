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
	        include("navbarAdmin.php");
	    ?> 
	</header>

	<div class="container fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card form-index mx-4 mt-4">
						<h5 class="mt-3 mx-2">
							Alta curso:
						</h5>
						<form action="añadirProfesor.php" method="POST">
				          <div class="form-group mx-4 mt-4">
				            <label for="idUsuario">Id Usuario:</label>
				            <input type="text" class="form-control" id= "idUsuario" name="idUsuario">
				            <label for="curso">Curso:</label>
				            <input type="text" class="form-control" id= "curso" name="curso">
							<br>
							<input type="submit" class="btn btn-primary" value="Alta curso">
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