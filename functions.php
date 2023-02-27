<?php 	

require	'admin/admin.php';

function conexion($bdconfig){
	try {
	$conexion = new PDO('mysql:host=localhost;dbname='.$bdconfig['basedatos'] , $bdconfig['usuario'] , $bdconfig['pass'] );
	return $conexion;

	} catch (PDOException $e) {
	  return false;
		}
}



function limpiarDatos($datos){
	$datos = trim($datos);
	$datos = stripslashes($datos);
	$datos = htmlspecialchars($datos);
	return $datos;
}




function comprobarsession(){
	if (!isset($_SESSION['admin'])) {
		header('Location: ' . 'https://localhost/Galeria/index.php');
	}

}


 ?>