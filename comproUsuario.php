<?php
session_start();

if ($_SESSION['rol'] == 1) {
	Header('Location: usuariosProf.php');
} else {
	Header('Location: usuariosAlmn.php');
}

?>