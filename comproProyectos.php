<?php
session_start();

if ($_SESSION['rol'] == 'profesor') {
	Header('Location: proyectosProfesor.php');
} elseif ($_SESSION['rol'] == 'admin') {
	Header('Location: proyectosAdmin.php');
} else {
	Header('Location: proyectosAlumn.php');
} 
?>