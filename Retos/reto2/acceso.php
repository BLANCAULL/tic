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
$numero1 = ($_POST['numero1']); // Los datos se recogen con el metodo POST
$numero2 = ($_POST['numero2']); // Y se guardan en una variable


if (($usuario == "jorge") and ($password == "casa") and ( 6 + $numero1 == $numero2)) {

echo "<h3>";
echo "Bienvenido ".$usuario." a su zona de clientes"; //Unimos dos cadenas
echo "<br>";
echo "En esta web tendrá una serie de ventajas en los productos <br>";
echo "<img src='http://www.lamarihuana.com/wp-content/uploads/2012/06/correcto.jpg'>";
}

else { echo "<h1>Su usuario o password no son correctos</h1><br>"; 
		echo "<img src='http://grupozucol.com/images_/error.png'>";	
}
?> <!-- Cerramos el PHP y seguimos programando en HTML -->
</body>
<br>
<a href="index.php">Volver</a> 
</html>