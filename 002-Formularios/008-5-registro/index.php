
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
	<link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
	
	<h1>Nuevo Usuario</h1>
	<hr>
	<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
	    <input type="text" name="nombre" placeholder="Nombre*" required autofocus>
	    <input type="email" name="email" placeholder="Email*" required>
	    <input type="password" name="pass" placeholder="Pass*" required>
	    <input type="number" name="edad" placeholder="Edad*" required>
	    <input type="radio" name="sexo" value="hombre"><p>H</p>
	    <input type="radio" name="sexo" value="mujer"><p>M</p>
	    
	    <input type="submit" value="Enviar">
	</form>
	<br><br>
<?php
if ($_POST) {
    if (isset($_POST)) {

	extract($_POST);
	if ($edad < 18) {
	    echo "Lo siento $nombre, debes ser mayor de edad.";
	} else {
	    
	}
    }
}
?>
    </body>
</html>
