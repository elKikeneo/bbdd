<?php
$img="";
if($_GET){
    extract($_GET);
    if ($buscar=="curso"){
	$img="curso.jpg";
    } else if ($buscar=="zapatos"){
	$img="zapatos.jpg";
    } else if ($buscar=="animales"){
	$img="animales.jpg";
    } else {
	$img="No se ha encontrado";
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
	
	<form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
	    <h2>Buscador</h2>
	    <input type="text" name="buscar" placeholder="Buscar" required>
	    <input type="submit" value="Buscar">
	    
	</form>
	<p><?=$img?></p>
    
	<!-------------COMPLETAR CON EL DE ELENA Y EL EJERCICIO DE JAIRO---------->
    
    </body>
</html>

