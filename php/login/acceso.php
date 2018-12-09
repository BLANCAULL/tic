<?php

session_start(); //Creo una sesion para que no pueda acceder cualquier a esta página

$_SESSION['nombre']  = 'jorge'; //A esta sesión le doy un valor, en este caso "jorge"

if ($_POST['username'] != $_SESSION['nombre']) { //Comparo la sesión con el valor que traigo del formulario
		header('Location: index.php'); // Redirecciona nuevamente a la pagina si no es el correcto
	
}

else { //Si es el correcto muestro el contenido de la web
echo "<h1>Bienvenido a la pagina ".$_POST['username']."</h1>";
}
?>
