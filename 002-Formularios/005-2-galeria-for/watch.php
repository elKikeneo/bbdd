<?php
if(!$_GET){//si no viene información por GET, quiere decir que han intentado ejecutar este fichero sin pasar previamente por la galería, por tanto le enciamos a ella para que pinchen una foto.
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
	
