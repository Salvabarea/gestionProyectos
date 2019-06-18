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
	<title>Eliminar usuario</title>
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
							Eliminar usuario:
						</h5>
						<form method="POST" action="eliminacionUsuario.php">
							<div class="form-group mx-4 mt-4">
								<label for="idUsuario">Id del usuario:</label>
				            	<input type="idUsuario" class="form-control" id= "idUsuario" name="idUsuario" placeholder="Id">
				            	<br>
				            	<input type="submit" class="btn btn-danger" value="ELIMINAR">
							</div>
						</form>
					</div>
				</div>
			</div>
		<br>
	</div>

	<!-- Pie -->
	<?php
        include("pie.php");
    ?> 
</body>
</html>