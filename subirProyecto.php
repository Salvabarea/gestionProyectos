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
	<title>Principal</title>
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
							Subir proyecto:
						</h5>
						<form action="subida.php" enctype="multipart/form-data" method="post">
							<div class="form-group mx-4 mt-4">
								<input type="text" name="nombreArchivo" size="20" maxlength="100" placeholder="Nombre del archivo">
								<br>
								<br>
								<input type="hidden" name="MAX_FILE_SIZE" value="100000">
								<input name="archivo" type="file">
								<br><br>
				            	<input type="submit" class="btn btn-primary" value="Buscar">
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