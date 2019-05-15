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
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<title>Calendario</title>

	<!-- FullCalendar -->
	<link href='core/main.css' rel='stylesheet' />
    <link href='daygrid/main.css' rel='stylesheet' />

    <script src='core/main.js'></script>
    <script src='daygrid/main.js'></script>
    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ 'dayGrid' ]
        });

        calendar.render();
      });

    </script>

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

	<div id='calendar'></div>

	<!-- Pie -->
	<?php
        include("pie.php");
    ?> 


</body>
</html>