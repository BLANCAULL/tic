<html>

   <head>
      <meta charset="utf-8"/>   <!--Etiqueta para activar la ñ y los acentos -->
      <link rel="icon" type="image/png" href="fotos/Mini_LOGOEUROPEANVALLEY.png" /> <!-- poner un icono en la pestaña -->
      <title>Formulario EV</title>
      <link rel=stylesheet href="formulario.css" type="text/css"/> <!-- Enlazar con la hoja de Estilo -->
      
   </head>
   
   <body>
   <h1>Formulario de Alumno</h1>
   	<form  method="post" action="registro.php"> 
   	<!-- En la etiqueta de Formulario digo como y donde mando los datos -->
   		<fieldset>
   		<label>Nombre</label>
		<input type="text" name="nombre" autofocus placeholder="Jorge"/> 
		<!-- Los datos siempre se identifican con el atributo "name" -->
		<br>
		
		<label>Apellido</label>
		<input type="text" name="apellido" size="50" value="Lopez" readonly/>
		<br>
		
   		
   		<label>DNI</label>
		<input type="text" name="dni" size="10" maxlength="9"/>
		<br>
		
	
 
		<label>Edad</label>
		<input type="number" name="edad" min="18" max="35" value="19"/>
		<br>
		
		
		
		<label>Estudios</label>		
		<select name="profesion" size="1">
		<option value="estudiante">Estudiante</option>
		<option value="Diplomado">Graduado</option>
		<option value="Licenciado">Experto - Doctor</option>
		</select>
		<br>
		
		<label>Idiomas</label>
        <select name="idiomas" multiple>
		<option value="Ingles">Ingles</option>
		<option value="Aleman">Aleman</option>
		<option value="chino">Chino</option>
		<option value="frances">Frances</option>
		</select>
        <br>
         <br>
          <br>
        
       
		<input class="btn" type="submit" value="Darme de Alta" />
        <input class="btn" type="reset" value="Borrar" />
		</fieldset>
		
		
		
   	</form>
   </body>
   
</html>
