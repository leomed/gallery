<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://localhost/Galeria/css/estilos.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
	<title>Document</title>
</head>
<body>

	<header>
<div class="container">


	<div class="contenedorformulario">	


	<form  class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">	


				<label for="foto">Titulo de foto</label>
				<input type="text" id="titulo" name="titulo">

				<label for="foto">Selecciona foto</label>
				<input type="file" id="foto" name="foto">

				
				<label for="foto">Descripcion</label>
				<textarea name="texto" id="texto" placeholder="Ingresa una descripcion"></textarea>

				<?php if (isset($error)): ?>
					<p class="error"><?php echo $error; ?></p>
				<?php endif ?>



				<input type="submit" class="submit" value="subir foto">


	</form>

	</div>

	<div class="destroy">
		

		
				<a class="cerrar" href="cerrar.php">Cerrar Sesion</a>
	</div>

</div>
			
		
	</section>
</body>
</html>