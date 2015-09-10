<?php
session_start();

if(!isset($_SESSION["nombre"])){
    header("location:index.php");
}

if ($_POST){
    extract($_POST); //$apellido
    if ($apellido){
	$_SESSION["apellido"]=$apellido;
	header('location:form3.php');
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
	<p>Su nombre es: <?=$_SESSION["nombre"]?></p>
	<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
	    Escriba su apellido<input type="text" name="apellido" placeholder="Apellido" required>
	    <input type="submit" value="Enviar">
	</form>
    </body>
</html>
