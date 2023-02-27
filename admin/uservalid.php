<?php 	session_start();

/* ARCHVIO INDEX DEL ADMIN */
require 'admin.php';
require '../functions.php';

$conexion = conexion($bd_config);


comprobarsession();
/* Comprobacion de sesion */
if (!$conexion) {
	header('Location: index.php');
}

?>