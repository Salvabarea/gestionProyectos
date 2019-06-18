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
        $('#usuarios').DataTable({

        });
      });
    </script>
	<title>Principal</title>
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
					include ("buscadorUsuarios.php");
					include ("buscadorId.php");
				?>
				<br>
				<h6><strong>Modificar información de usuario:</strong></h6>
				<a class="btn btn-outline-success" href="panelModificacionAdmin.php" role="button">Modificar usuario</a>
				<br><br>
				<h6><strong>Dar de alta a un usuario:</strong></h6>
				<a class="btn btn-outline-success" href="panelAltaAdmin.php" role="button">Alta usuario</a>
				<br><br>
				<h6><strong>Curso Alumno:</strong></h6>
				<a class="btn btn-outline-success" href="cursosAlumno.php" role="button">Cursos alumno</a>
				<br><br>
				<h6><strong>Curso Profesor:</strong></h6>
				<a class="btn btn-outline-success" href="cursosProfesor.php" role="button">Cursos profesor</a>
				<br><br>
				<h6><strong>Eliminar un usuario:</strong></h6>
				<a class="btn btn-outline-danger" href="eliminarUsuarioAdmin.php" role="button">Eliminar</a>  

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