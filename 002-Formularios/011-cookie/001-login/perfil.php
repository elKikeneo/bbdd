<?php include './inc/seguridad.php';?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
	<link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
	
	<header>
	    <h1><a href="index.php">Logotipo</a></h1>
	    <nav>
		<ul>
		    <li><a href="perfil.php">Perfil</a></li>
		    <li><a href="salir.php">Salir</a></li>
		</ul>
	    </nav>
	</header>
	<main>
	    <h3>Perfil de: <?=$_COOKIE["emailUser"]?></h3>
	</main>
	
	
    </body>
</html>
