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
        $('#proyectos').DataTable({

        });
      });
    </script>
    <title>Proyectos</title>
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
		<div class="row mb-3 mt-3">
			<div class="col-md-4">
				<?php
					include("buscador.php");
				?>
				<h6><strong>Subir un proyecto:</strong></h6>
				<a class="btn btn-outline-success" href="subirProyecto.php" role="button">Subir</a>
				<br><br>
				<h6><strong>Calificar o modificar un proyecto:</strong></h6>
				<a class="btn btn-outline-success" href="calificar.php" role="button">Calificar</a>
				<br><br>
				<h6><strong>Eliminar un proyecto:</strong></h6>
				<a class="btn btn-outline-danger" href="eliminar.php" role="button">Eliminar</a>  
			</div>
			<div class="col-md-8">
				<h4>Resultado:</h4>
					<?php
						include ("resultadoBusqueda.php");
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