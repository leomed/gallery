<?php 


require 'admin/admin.php';
require 'functions.php';

$conexion = conexion($bdconfig);


if (!$conexion) {
    die();
}


$fotos_por_pagina = 8;


// PARA SABER EN QUE PAGINA ESTA EL USUARIO
$pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1); 

// CALCULANDO CUANTAS FOTOS VOY A MOSTRAR POR PAGINA
$inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina : 0;

// TRAIGO LAS FOTOS DEL BASE DE DATOS
$statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $inicio, $fotos_por_pagina");

$statement->execute();
$fotos = $statement->fetchAll();

if (!$fotos) {
    header('Location: index.php');
}


// CALCULAR CUANTAS IMAGENES HAY EN TOTAL
$statement = $conexion->prepare("SELECT FOUND_ROWS() as total_filas");
$statement-> execute();
$total_post = $statement->fetch()['total_filas'];

$total_paginas = ceil($total_post / $fotos_por_pagina);

require 'views/index.view.php';


 ?>