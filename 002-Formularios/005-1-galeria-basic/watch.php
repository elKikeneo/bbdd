<?php
if(!isset($_GET["nombreFoto"],$_GET["titulo"])){//si no viene la información por GET que necesita para funcionar quiere decir que han intentado ejecutar este fichero sin pasar previamente por la galería, por tanto le enciamos a ella para que pinchen una foto.
    header("location:index.php");
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
	<h1><?=$_GET["titulo"]?></h1>
	
	<section id="watch">
	    <img src="img/<?=$_GET["nombreFoto"]?>" alt="">
	    <a href="index.php">Ver Galería</a>
	</section>
    </body>
</html>
	
