<?php
session_start();
include('_con.php');
error_reporting(0);
$nombre = $_SESSION['nombre'];
?>

<!DOCTYPE html>
<html>

<!-- Cabecera -->

<head>
	<?php
	include('head.php');
	?>
	<title>Calificar proyecto</title>
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
			<div class="row">
				<div class="col-md-12">
					<div class="card form-index mx-4 mt-4">
						<h5 class="mt-3 mx-2">
							Calificar proyecto:
						</h5>
						<form method="GET">
							<div class="form-group mx-4 mt-4">
								<label for="IdProyecto">Id del proyecto:</label>
				            	<input type="IdProyecto" class="form-control" id= "IdProyecto" name="IdProyecto" placeholder="Id">
				            	<br>
				            	<input type="submit" class="btn btn-primary" value="Buscar">
							</div>
						</form>

						<?php
						$IdProyecto = $_GET['IdProyecto'];
						$busqueda = mysqli_query($conexion, "SELECT * FROM proyecto WHERE IdProyecto='$IdProyecto'");
						$nombre = mysqli_fetch_array($busqueda)[1];
						$busqueda = mysqli_query($conexion, "SELECT * FROM proyecto WHERE IdProyecto='$IdProyecto'");
						$descripcion = mysqli_fetch_array($busqueda)[2];
						$busqueda = mysqli_query($conexion, "SELECT * FROM proyecto WHERE IdProyecto='$IdProyecto'");
						$año = mysqli_fetch_array($busqueda)[4];
						$busqueda = mysqli_query($conexion, "SELECT * FROM proyecto WHERE IdProyecto='$IdProyecto'");
						$nota = mysqli_fetch_array($busqueda)[3];
						$busqueda = mysqli_query($conexion, "SELECT * FROM proyecto WHERE IdProyecto='$IdProyecto'");
						$alumno = mysqli_fetch_array($busqueda)[6];
						$_SESSION['IdProyecto'] = $IdProyecto;

						?>

						<form action="calificacion.php" method="POST">
				          <div class="form-group mx-4 mt-4">
				            <label for="nombre">Nombre:</label>
				            <input type="text" class="form-control" id= "nombre" name="nombre" placeholder=<?php print_r($nombre) ?>>
				            <label for="descripcion">Descripción:</label>
				            <input type="text" class="form-control" id= "descripcion" name="descripcion" placeholder=<?php print_r($descripcion) ?>>
				            <label for="año">Año:</label>
				            <input type="text" class="form-control" id= "año" name="año" placeholder=<?php print_r($año) ?>>
				            <label for="nota">Nota:</label>
				            <input type="text" class="form-control" id= "nota" name="nota" placeholder=<?php print_r($nota) ?>>
				            <label for="alumno">Alumno:</label>
				            <input type="text" class="form-control" id= "alumno" name="alumno" placeholder=<?php print_r($alumno) ?>>
							<br>
							<input type="submit" class="btn btn-primary" value="Modificar">
				           </div>
				        </form>

						</form>
					</div>
				</div>
			</div>
		<br>
	</div>

	<!-- Pie -->
	<?php
        include("pie.php");
    ?> 
</body>
</html>