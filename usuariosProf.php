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
				<br>
				<h6><strong>Modificar información de usuario:</strong></h6>
				<a class="btn btn-outline-success" href="panelModificacion.php" role="button">Modificar usuario</a>
				<br><br>
				<h6><strong>Dar de alta a un usuario:</strong></h6>
				<a class="btn btn-outline-success" href="panelAlta.php" role="button">Alta usuario</a>

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