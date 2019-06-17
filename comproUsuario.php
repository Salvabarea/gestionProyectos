<?php
session_start();

if ($_SESSION['rol'] == 'profesor') {
	Header('Location: usuariosProf.php');
} elseif ($_SESSION['rol'] == 'admin') {
	Header('Location: usuariosAdmin.php');
} else {
	Header('Location: usuariosAlmn.php');
} 
?>