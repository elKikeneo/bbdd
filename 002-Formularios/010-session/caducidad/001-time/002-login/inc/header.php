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
		    <?php $array=explode("@",$_SESSION["emailUser"])?>
		    <li>Hola, <?= ucfirst($array[0])?></li>
		    <li><a href="perfil.php">Perfil</a></li>
		    <li><a href="favoritos.php">Favoritos</a></li>
		    <li><a href="salir.php">Salir</a></li>
		</ul>
	    </nav>
	</header>
	
	<main>