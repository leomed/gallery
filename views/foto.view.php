<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
	<title>Document</title>
</head>
<body>

	<header>
<div class="container">
	<div class="tittle">	

	<h1><?php if (!empty($foto['titulo'])) {
		echo $foto['titulo'];
	}else {
		echo $foto['imagen'];
	} ?></h1>
	</div>	

	<div class="imagensola">
		<img src="fotos/<?php 	echo $foto['imagen']; ?>" alt="">

	</div>
		<div class="textosolo">	

		<p><?php 	echo $foto['texto']; ?></p>
		</div>

	<div class="botones">
			<a href="index.php" class="izquierda"><i class="bi bi-arrow-left-circle-fill"></i> <p> Regresar</p> </a>
			
		</div>

</div>
			
		
	</section>
</body>
</html>