<html>
    <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<?php

  /* Creamos la sesión */
   session_start();
    $_SESSION['username'] = $_POST['username']; // Me traigo la variable del usuario
    $_SESSION['password'] = $_POST['password']; // Me traigo la variable del password


	$acierto=0;
	
	include ('connect.php');
     $consulta= "select * from Acceso;";
     
     $listado = mysqli_query ($conectar,$consulta);
     
     while($reg=  mysqli_fetch_array($listado))
     //Este bucle se ejecutará tantas veces como Usuarios hay en la tabla
      
       {
        
         
         if (($reg['nombre']==$_POST['username']) and ($reg['pass']==$_POST['password'])) {
        //El usuario es correcto le dejo pasar
        		$acierto=1;
        
		       }
        
        
       } //cierro bucle 
   
   		if ($acierto!=1)  {
		
		//El usuario es incorrecto le mando a login.php siempre	
		header('Location: intranet.php'); // Redirecciona nuevamente a la pagina
	
   			 }
   
      
   
?>
 
<!DOCTYPE html>

    <body>
  <div class="container">
   <div class="row">
    <div class="col-md-6">
       
    <div class="jumbotron">
    <h1>Restaurantes</h1>      
    <p>Listado de Restaurantes de la empresa Booking</p>
    <div class="row">
    	<div class="col-md-4">
    	<button type="button" class="btn btn-success btn-block">Alojamientos</button>
    	</div>
    	<div class="col-md-4">
    	<button type="button" class="btn btn-success btn-block">Museos</button>
    	</div>
    	<div class="col-md-4">
    	<button type="button" class="btn btn-success btn-block">Rutas</button>
    	</div>
    </div> 	
        
    </div>
    
    <button type="button" onClick='http://www.facebook.com/' class="btn btn-info btn-block">RESERVAR</button>
    
    </div>

    <div class="col-md-6">
      <div class="thumbnail">
       
          <img src="http://editor.educacloud.com/editor/workspace/TIC/MySQL/photos/photo1.jpeg" class="img-rounded" alt="Nature" style="width:100%">
        
      </div>
    </div>
  	    
    </div></div>


<!-- con este PHP me conecto a la Base de Datos y realizo la consulta -->
<?php
     //include ('connect.php');
     $consulta2= "select * from Restaurantes;";
     
     $listado2 = mysqli_query ($conectar,$consulta2);
     
     
      ?>
      
 <!-- En HTML dibujo la cabecera de la Tabla, que siempre será fija -->     
    <div class="container">
    <table class="table" border="1">
    <tr class="alert alert-success">
      <th>Nombre</th>
      <th>Tipo</th>
      <th>Ciudad</th>
    </tr>
      
      
  <!-- En PHP y con un bucle WHILE voy sacando todos los datos de la tabla en relación a la consulta anterior -->      
      <?php
        
       while($reg2=  mysqli_fetch_array($listado2))
      
       {
        
         echo '<tr>';
         echo '<td>'.$reg2['Nombre'].'</td>';
         echo '<td>'.$reg2['Tipo'].'</td>';
         echo '<td>'.$reg2['Ciudad'].'</td>';
         echo '</tr>';
        
       }
        
        ?>
      </table>  
</div>
</body>
</html>
