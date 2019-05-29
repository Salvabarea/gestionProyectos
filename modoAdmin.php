<?php
session_start();
if ($_SESSION['rol'] != 'admin') {
	Header('Location: index.php');
}
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
					Bienvenido/a  al modo <b>ADMINISTRADOR</b>.				
				</h3>
				<p class="mb-2 mt-3">Acabas de entrar con un usuario de administración:
					<br><br>
					Ten en cuenta que tienes acceso a todos los recursos disponibles en la web.
					Deberás tener cuidado con lo que hagas.
					Se ha habilitado un log con todos los eventos ocurridos.
					<br>
					<button onclick="funcion()">Haz click</button>
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