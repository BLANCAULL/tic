<?php

echo "<h2>Codificar</h2>";

$texto="adios"; //Guardo la palabra que quiero codificar
$longitud=strlen($texto); //Uso srten para saber la longitud de la palabra a codificar

for ($i=0; $i<=$longitud; $i++){ //Hago un bucle donde recorro la palabra letra por letra
	echo $texto[$i]; //Imprimo cada letra
	echo "<br>"; //Pongo un espacio en blanco
}



?>
