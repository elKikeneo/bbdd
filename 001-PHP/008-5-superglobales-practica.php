<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Superglobales practica</title>
    </head>
    <body>
	<!--	$_GET=array("n1"=>"elena","n2"=>"paco","n3"=>"lucia");-->
	<!--	array_rand($_GET): obtengo n1 o n2 o n3, que son las claves del array, o lo que es lo mismo, los names de mis inputs.-->
	<!--	$_GET["n1"]: le pido al array que me devuelva el valor asociado con la clave que he obtenido de forma aleatoria.-->
	
	<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
            <fieldset>
                <legend>Prueba Suerte</legend>
                <label>Nombre 1*</label>
                <input type="text" name="nombre1" placeholder="Nombre1" autofocus required>
                <br><br>
		<label>Nombre 2*</label>
                <input type="text" name="nombre2" placeholder="Nombre2" required>
                <br><br>
		<label>Nombre 2*</label>
                <input type="text" name="nombre3" placeholder="Nombre3" required>
                
		<br><br>
		
		<input type="submit" value="probar">
                
                               
            </fieldset>
	</form>
	
	
		
<p>El ganador es: <?php echo $_GET[array_rand($_GET)]?> </p>
	
	

		
    </body>
</html>
	

