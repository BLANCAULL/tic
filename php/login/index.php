<!DOCTYPE html>
<?php
    session_destroy();  // Se destruye la session existente de esta forma no permite el duplicado.
?>
 
<html lang="es">
    <head>
            <title>Acceso a clientes</title>
    </head>
 
    <body>
            <h1>Creación de una sesión</h1>
            <form action="entrar.php" method="POST">
                    <p>
                            <label>Nombre de usuario en EuropeanValley</label> <br />
                            <input type="text" name="username" />
                    
                            <input type="submit" value="Acceso con usuario" />
                    </p>
            </form>
    </body>
</html>
