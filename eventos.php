<script type="text/javascript">
	alert("Hola");
</script>
<?php
	include('_con.php');
	$busqueda = mysqli_query($conexion, "SELECT id, titulo, color, inicio, final FROM evento");
	$eventos = "[";

	while ($fila = mysqli_fetch_array($busqueda)) {
		$id = $fila['id'];
		$titulo = $fila['titulo'];
		$color = $fila['color'];
		$inicio = $fila['inicio'];
		$final = $fila['final'];

		$eventos = $eventos . 
			"{
				groupId: $id,
				title: $titulo,
				color: $color,
				start: $inicio,
				end: $final
			}";

	}
	$eventos = $eventos . "]";
	echo $eventos;
?>