<?php
session_start();
?>

<!DOCTYPE html>
<html>

<!-- Cabecera -->

<head>
	<?php
	include('head.php');
	?>
	<title>Index</title>
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
	</header>

	<!-- Filas -->
	<br>
	<div class="container fluid">
		<div class="row">
			<div class="col-md-8">
				<img src="img/jacalogo.jpeg">
			</div>
			<div class="col-md-4">
				<?php
        			include("formAcceso.php");
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