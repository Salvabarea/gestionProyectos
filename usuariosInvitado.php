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
	        include("navbarInvitado.php");
	    ?> 
	</header>
	<div class="container fluid">
		<div class="row mb-3 mt-3">
			<div class="col-md-4">
				<?php
					include ("buscadorUsuarios.php");
					include ("buscadorIdInvitado.php");
				?>

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