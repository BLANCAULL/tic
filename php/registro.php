<html>
    <head>
    <title>Registro Formulario</title>
    <link rel="stylesheet" type="text/css" href="formulario.css">
</head>
    <body>
        <h1>Registro</h1>


<?php  // Abrimos la programación PHP
//Empezamos recogiendo los datos, siempre refiriendonos al identificador "name" del input

$nombre = ($_POST['nombre']); // Los datos se recogen con el metodo POST Y se guardan en una variable

echo "<h3>";
echo "El usuario registrado en la web es ".$nombre; //Unimos dos cadenas
echo "</h3>";
      
?> <!-- Cerramos el PHP y seguimos programando en HTML -->
</body>
<a href="primerform.html">Volver</a> 
</html>
