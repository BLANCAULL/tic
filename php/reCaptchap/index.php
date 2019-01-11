<html lang="es">
    <head>
            <title>Acceso Clientes</title>
            <link rel="stylesheet" type="text/css" href="./php/formulario.css">
    </head>
 
	<?php
	
	$opcion=rand(1,4);
	?>
	
    <body>
            
            <form action="acceso.php" method="POST">
                    <p>
                            <label>Nombre de usuario en EuropeanValley </label>
                            <input type="text" name="username" /></br></br>
                            <label>Password </label>
                            <input type="password" name="password" />
                    </p>
                    <br>
                    <br>
                    <h3>Confirmame que no eres un robot</h3><br>
					<?php
					if ($opcion ==1) {
						echo "<img src='https://www.francobordo.com/images/productos/bandera-alemania-1-6596.jpg'><br>";
					}
						if ($opcion ==2) {
						echo "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/200px-Flag_of_France.svg.png'><br>";
					}
						if ($opcion ==3) {
						echo "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Flag_of_Denmark.svg/198px-Flag_of_Denmark.svg.png'><br>";
					}
						if ($opcion ==4) {
						echo "<img src='https://www.ecured.cu/images/thumb/2/20/Bandera_suiza.JPG/260px-Bandera_suiza.JPG'><br>";
					}
					?>
					<label>¿A que pais pertenece esta bandera? (en MAYUSCULAS)</label>
					<input type="text" name="bandera" /></br></br>
					<input style= "display: none" type="number" name="opcion" value="<?php echo $opcion?>"/></br></br>

                    <br>
                            <input type="submit" value="Acceso" />
                    </p>
            </form>
    </body>
</html>
