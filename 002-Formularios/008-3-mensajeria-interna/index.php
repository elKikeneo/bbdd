<?php
//Redirección desde index
if($_POST){
    //VER EJEMPLO DE ELENA
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
	<link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
	<h1>LOGIN</h1>
	
	<form action="mensajeria.php" method="post">
	    <label>Usuario* </label>
	    <input type="text" name="usuario" required autofocus><br><br>
	    <label>Contraseña* </label>
	    <input type="password" name="pass" placeholder="******" required><br><br>
	    <input type="submit" value="Ingresar">
	</form>

    </body>
</html>
