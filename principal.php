<?php
session_start();
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
		<div class="row">
			<div class="col-md-8">
				<h3 class="mb-2 mt-3">
					Bienvenido/a  <?php print_r($_SESSION['nombre']) ?>.				
				</h3>
				<p class="mb-2 mt-3">Aquí podrás encontrar una guía rápida de uso:
					<br><br>
					En "<b>Panel de control</b>" podrás acceder a los datos de tu cuenta.
					<br>
					En "<b>Proyectos</b>" podrás realizar una búsqueda de los diferentes proyectos.
					<br>
					En "<b>Roles</b>" podrás ver a todos los usuarios, tanto usuarios como profesores.
				</p>
			</div>
			<div class="col-md-4">
				<img src="img/hm.png">
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