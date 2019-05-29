<?php
session_start();

if ($_SESSION['rol'] == 'profesor') {
	Header('Location: usuariosProf.php');
} else {
	Header('Location: usuariosAlmn.php');
}

?>