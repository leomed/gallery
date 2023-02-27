<?php 
require 'admin/admin.php';
require 'functions.php';


$conexion = conexion($bdconfig);

if (!$conexion) {
    echo "Problemas con la base de datos";
}


// SI EL USUARIO EN EL GET OSEA EN EL ID ESCRIBE CUALQUIER COSA QUE NO SEA VERDADERAMENTE UNA PAGINA DE LA BASE DE DATOS LO REDIRECCIONA
$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

if (!$id) {
    header('Location: index.php');
}


$statement = $conexion->prepare('SELECT * FROM fotos WHERE id = :id');
$statement->execute(array(
':id' => $id


));


$foto = $statement->fetch();

if (!$foto) {
    header ('Location: index.php');
}
require 'views/foto.view.php';

 ?>