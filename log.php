<?php
session_start();
include('_con.php');
error_reporting(0);
if ($_SESSION['rol'] != 'admin') {
	Header('Location: index.php');
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
        $('#logs').DataTable({

        });
      });
    </script>

    <title>Logs</title>
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
					include("buscadorLogs.php");
				?>
			</div>
			<div class="col-md-8">
				<h4>Resultado:</h4>
					<?php
						include ("resultadoLogs.php");
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