<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" type="text/css" href="estilo.css">

<?php
    session_destroy();  // Se destruye la session existente de esta forma no permite el duplicado.
?>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Zona Alumnos EuropeanValley</h1>
            <div class="account-wall">
                <img class="profile-img" src="imagen/logo.png"
                    alt="">
                <form class="form-signin" action=acceso.php method="post">
                <input type="text" name="username" class="form-control" placeholder="Usuario" required autofocus>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <!-- <select class="form-control">
                	<option value="Administradores">Administrador</option>
                	<option value="Empleado">Empleado</option>
                </select> -->	
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Acceder</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                   Recuerda
                
                </form>
            </div>
            
        </div>
    </div>
</div>
