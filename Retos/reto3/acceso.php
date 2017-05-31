<html>
    <head>
    <title>Zona CLientes</title>
    <link rel="stylesheet" type="text/css" href="./php/formulario.css">
</head>
    <body>
        <h1>Zona Clientes</h1>


<?php  // Abrimos la programación PHP
//Empezamos recogiendo los datos, siempre refiriendonos al identificador "name" del input

$usuario = ($_POST['username']); // Los datos se recogen con el metodo POST
$password = ($_POST['password']); // Y se guardan en una variable
$bandera = ($_POST['bandera']); // Los datos se recogen con el metodo POST
$opcion = ($_POST['opcion']); // Los datos se recogen con el metodo POST


if (($usuario == "jorge") and ($password == "casa")) {
	if ((($opcion == 1) and ($bandera == "ALEMANIA")) or (($opcion == 2) and ($bandera == "FRANCIA")) or (($opcion == 3) and ($bandera == "DINAMARCA")) or (($opcion == 4) and ($bandera == "SUIZA"))) {

echo "<h3>";
echo "Bienvenido ".$usuario." a su zona de clientes"; //Unimos dos cadenas
echo "<br>";
echo "En esta web tendrá una serie de ventajas en los productos <br>";
echo "<img src='http://www.lamarihuana.com/wp-content/uploads/2012/06/correcto.jpg'>";
}
else { echo "<h1>Su bandera no es correcta</h1><br>"; 
		echo "<img src='http://grupozucol.com/images_/error.png'>";	
}

	
}

else { echo "<h1>Su usuario o password no son correctos</h1><br>"; 
		echo "<img src='http://grupozucol.com/images_/error.png'>";	
}
?> <!-- Cerramos el PHP y seguimos programando en HTML -->
</body>
<br>
<a href="index.php">Volver</a> 
</html>