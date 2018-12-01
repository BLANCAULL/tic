<?php

$coches = array("Volvo", "BMW", "Toyota"); //Creo un array llamado coches con 3 valores (Volvo, BMW y Toyota)

//Imprimo esos tres valores, recordando la posición que ocupa cada uno en el array 
// para mostrar el valor del array es : $nombredelarray[posición del valor que quiero sacar]
echo "<h2>Imprimir el contenido con variables</h2>";
echo "Me gusta " . $coches[0] . ", " . $coches[1] . " and " . $coches[2] . ".";


//Si quieres recorrer un array recuerda que lo puedes hacer con un bucle, usando una variable como posición de cada elemento
//Recorrer el array con un bucle FOR
echo "<h2>Imprimir el contenido con un bucle</h2>";

$longitud = sizeof($coches);

for ($i = 0; $i <= $longitud; $i++) {
    echo $coches[$i];
    echo "<br>";
}

?>
