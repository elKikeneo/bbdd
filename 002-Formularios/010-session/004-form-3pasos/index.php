<?php
session_start();

if($_SESSION){
    session_destroy();
}

if ($_POST){
    extract($_POST); //$nombre
    if ($nombre){
	$_SESSION["nombre"]=$nombre;
	header('location:form2.php');
    } 
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
	<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
	    Escriba su nombre<input type="text" name="nombre" placeholder="Nombre" required>
	    <input type="submit" value="Enviar">
	</form>
	
	
    </body>
</html>
