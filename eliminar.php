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
	<title>Principal</title>
	<script>
		function funcion() {
		    <?php

			$file = fopen("archivos/logs.txt", "a");

			fwrite($file, "El usuario $nombre ha eliminado un proyecto.".PHP_EOL);

			fclose($file);

			?>
		}
	</script>
</head>

<!-- Cuerpo -->

<body>

	<!-- Cabecera -->
	<header>
		<div class="container">
			<h1>Gestión de proyectos I.E.S. Jacarandá</h1>
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
							Eliminar proyecto:
						</h5>
						<form method="POST" action="eliminacion.php">
							<div class="form-group mx-4 mt-4">
								<label for="IdProyecto">Id del proyecto:</label>
				            	<input type="IdProyecto" class="form-control" id= "IdProyecto" name="IdProyecto" placeholder="Id">
				            	<br>
				            	<input type="submit" class="btn btn-danger" value="ELIMINAR" onclick="funcion()">
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