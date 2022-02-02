<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Leer Archivo txt con PHP</title>
	<!-- Cargar los estilos -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>

	<section class="hero is-primary">
  		<div class="hero-body">
    		<p class="title">MúSICA</p>
  		</div>
	</section>

         <section class="section">
        
		<form action="guardar.php" method="post">
			<div >
				<label>Nombre de la canción:</label>
				<input type="text" class="input is-primary" name="nombre" placeholder="Escribe el nombre de la canción" required>
				
			</div>


			<div> <br>
				<label>¿A quién pertenece?:</label>
				<textarea name="autor" class="input input is-primary" placeholder="Agregue el nombre del autor">
					
				</textarea>
			</div> <br>

			<input type="submit" class="button is-link" value="Guardar">
		</form>

	</section>
</body>
</html>