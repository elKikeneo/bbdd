<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
    </head>
    <body>
	
	<form action="bienvenida.php" method="post">
	    <fieldset>
		<legend>Tus datos</legend>
		<label>Nombre</label>
		<input type="text" name="nombreUser" placeholder="Nombre" required autofocus>
		<label>Apellidos</label>
		<input type="text" name="apellidosUser" placeholder="Apellidos" required>
		<br>
		<input type="radio" name="sexo" value="Hombre" checked>Hombre
                <input type="radio" name="sexo" value="Mujer">Mujer 
		<br>
		
		<input type="submit" value="Enviar">
	    </fieldset>
	</form>
	
	
    </body>
</html>