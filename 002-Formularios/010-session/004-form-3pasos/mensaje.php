<?php
session_start();
if ($_POST){
    extract($_POST); //$volver
    if ($volver){
	session_destroy();
	header('location:index.php');
    } 
} 

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
	
	<h1>Gracias por rellenar el formulario</h1>
	<p>Sus datos son <?=$_SESSION["nombre"]." ".$_SESSION["apellido"]?></p>
	
	<a href="index.php?b=y">Volver</a>
    </body>
</html>
