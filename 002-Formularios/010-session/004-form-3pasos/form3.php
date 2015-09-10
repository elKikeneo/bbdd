<?php
session_start();

if(!isset($_SESSION["nombre"],$_SESSION["apellido"])){
    header("location:index.php");
}

if ($_POST){
    extract($_POST); //$si,$no
    if ($si){
	
	header('location:mensaje.php');
    } else {
	header('location:index.php');
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
	<p>¿Su nombre es <?=$_SESSION["nombre"]." ".$_SESSION["apellido"]?>?</p>
	<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
	    <input type="submit" value="Sí" name="si">
	    <input type="submit" value="No" name="no">
	</form>
    </body>
</html>
