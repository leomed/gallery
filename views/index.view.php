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
		
		<div class="galeria">
			<div class="titulo">
				
			<h1>Galeria de Fotos</h1>
			</div>
			<div class="ingresar">
				<div class="logoingreso">
					
			<a href="login.php"><p>Ingresar </p><i class="bi bi-file-person"></i></a>
				</div>
			</div>

		</div>
	</div>
	</header>

	<section class="fotos">
		<div class="container">
			<?php foreach($fotos as $foto): ?>
				<div class="thumb">
					<a href="foto.php?id=<?php echo $foto['id']; ?>">
						<img src="fotos/<?php echo $foto['imagen'] ?>" alt="">
					</a>
				</div>

			<?php endforeach; ?>
			
		<div class="botones">

			<!-- SI LA PAGIAN ES MAYOR A UNO SE VA A MOSTRAR EL BOTON DE RETROCEDER PARA PODER VOLVER -->
			<?php if ($pagina_actual > 1): ?>
				
			<a href="index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda"><i class="bi bi-arrow-left-circle-fill"></i> <p> Anterior</p> </a>

			<?php endif ?>

			<?php if ($total_paginas != $pagina_actual): ?>
				
			

			<a href="index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha"><p>Siguiente </p> <i class="bi bi-arrow-right-circle-fill"></i> </a>
			
			<?php endif ?>




		</div>
		</div>
	</section>
</body>
</html>