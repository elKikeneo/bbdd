<?php
//Abrimos la carpeta que queremos leer -> opendir(carpeta)
$directorio=  opendir("img/");

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
       
    </head>
    <body>
	
	<!--Función readdir($directorio)= devuelve los nombres de los ficheros almacenados en la carpeta previamente abierta con opendir(). Esta lectura se realiza en el orden en el que fueron almacenados por el sistema de ficheros (alfabéticamente)-->
	<ul>
	    <?php while ($nameArchivo=readdir($directorio)){ ?>
		<?php if (substr($nameArchivo,0,1)!="."){ ?>
		    <li><img src="img/<?=$nameArchivo?>"></li>
		<?php } ?>
	    <?php } ?>
	</ul>
	
	
	<!--Cerramos el directorio previamente abierto-->
	<?php closedir($directorio)?>
	
    </body>
</html>