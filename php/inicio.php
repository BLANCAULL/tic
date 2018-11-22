<html>
<head>
	<meta charset="utf-8"/>   <!--Etiqueta para activar la ñ y los acentos -->
      <link rel="icon" type="image/png" href="fotos/Mini_LOGOEUROPEANVALLEY.png" /> <!-- poner un icono en la pestaña -->
      <title>Primer PHP</title>

</head>
    <body>
        <h1>Variables con PHP</h1>
<?php
$nombre = 'Santi'; //Asignamos una variable llamada nombre cuyo valor es "Jorge"
$curso = 'tic'; //Cuando van entre comillas son cadenas 


echo $nombre . ' ' . $curso; //Unimos dos cadenas
echo "<br>";
echo "<h1>";
echo "Mi nombre es ".$nombre;
echo "</h1>";
echo "<br>";

$a=8;
$b=3;
$c=8;

echo "<h3>";
$suma =$a + $b;
echo $suma;
echo "<br>";
echo ++$suma;
echo "<br>";
echo --$suma;
echo "</h3>";

// Condicional Simple
if ($a > $b) {
	echo $a. " es mayor que ".$b;
}
else {
	echo " El segundo valor es mayor";
}

echo "<br>";

// Condicional Complejo
if (($a > $b) or ($a == $c)){ //con "and" Se tienen que cumplir las dos condiciones
								// con "or" solo se tiene que cumplir una condicion de las dos
	echo $a. " es mayor que ".$b;
}
else {
	echo " El segundo valor es mayor";
}

//Bucle
$contador = 0;

echo "<br>";
while ($contador < 10) {
    echo "contando ".$contador."<br>";
    $contador=$contador+2;
}






?>
</body>
</html>
