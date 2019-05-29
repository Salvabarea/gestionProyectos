<?php
session_start();
?>

<!DOCTYPE html>
<html>

<!-- Cabecera -->

<head>
	<title>Panel de control</title>
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
					Perfil de <?php print_r($_SESSION['nombre']) ?>.
				</h3>
				<div class="card form-index mx-4 mt-4">
					<h5 class="mt-3 mx-2">
						Nombre y apellidos:
					</h5><p class="mx-2"><?php print_r($_SESSION['nombre']) ?> <?php print_r($_SESSION['apellido']) ?></p>
					<h5 class="mt-3 mx-2">
						Curso:
					</h5><p class="mx-2"><?php print_r($_SESSION['curso']) ?></p>
					<h5 class="mt-3 mx-2">
						Imagen de perfil:
					</h5>
					<img src="<?php print_r($_SESSION['imagen']) ?>" border='0' width='200' height='200'>
				</div>
			</div>
			<div class="col-md-4 mb-10 mt-3">
				<img src="img/hm2.jpg">
				<br>
			</div>
		</div>
		<br>
	</div>


	<!-- Pie -->
	<?php
        include("pie.php");
    ?> 

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>