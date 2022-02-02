<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Datos registrados</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bulma.min.css">
</head>
<body>


    <section class="section is-medium columns">
        
<?php
    

    echo "Gracias ;)"; 
	$nombre = $_POST['nombre'];
	$autor = $_POST['autor'];


	$crearMusica = fopen("musica.txt", "a+");

	    fwrite($crearMusica, "Nombre de la canción: " . $nombre);
		fputs($crearMusica, "   Autor: " . $autor);
		

	  fclose($crearMusica);	

?>


    </section>

    
</body>
</html>