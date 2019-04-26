<?php
session_start();
include('_con.php');
error_reporting(0);
if ($_SESSION['rol'] == 0) {
	Header('Location: usuariosAlmn.php');
}

?>

<!DOCTYPE html>
<html>

<!-- Cabecera -->

<head>
	<title>Principal</title>
	<?php
	include('head.php');
	?>
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
		<div class="row mb-3 mt-3">
			<div class="col-md-4">
				<?php
					include ("buscadorUsuarios.php");
					include ("buscadorId.php");
				?>
				<h6><strong>Modificar usuario:</strong></h6>
				<a class="btn btn-outline-success" href="panelModificacion.php" role="button">Modificar</a>

			</div>
			<div class="col-md-8">
				<?php
					include ("resultadoUsuarios.php");
				?>
			</div>
		</div>
	</div>
	<!-- Pie -->
	<?php
        include("pie.php");
    ?> 

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>