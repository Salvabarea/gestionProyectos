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
	<script>
      $(document).ready(function(){
        $('#cursosProfesor').DataTable({

        });
      });
    </script>
	<title>Añadir curso profesor</title>
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
		<div class="row mb-3 mt-3">
			<div class="col-md-4">
				<?php
					include ("buscadorCurso.php");
				?>
				<h6><strong>Añadir curso:</strong></h6>
				<a class="btn btn-outline-success" href="añadirCursoProfesor.php" role="button">Añadir</a>
				<br><br>
				<h6><strong>Volver atrás:</strong></h6>
				<a class="btn btn-outline-success" href="usuariosAdmin.php" role="button">Volver</a>

			</div>
			<div class="col-md-8">
				<?php
					include ("resultadoCursosprofesor.php");
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