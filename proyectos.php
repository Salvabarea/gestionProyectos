<?php
session_start();
include('_con.php');
error_reporting(0);
if ($_SESSION['rol'] == 1) {
	Header('Location: proyectosProfesor.php');
}

function alerta1 ($alerta1) {
	echo "<?php <script>jQuery(function(){swal(\"¡Bien!\", \"Condición cumplida\", \"success\");});</script> >?";
}
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
					include("buscador.php");
				?> 
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