<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Arrays</title>
    </head>
    <body>
	<h1>Arrays</h1>
	<p>Listado o colección de datos. Asocia con claves o posiciones.</p>
	<!----------------------------------------------------------------->
	
	<h2>Arrays asociativos</h2>
	<?php
	//A. asociativo=asocia valores con claves
	//Sintaxis: $var=array("clave"=>"valor","clave"=>"valor"...);
	
	$capitales=array("España"=>"Madrid","Francia"=>"París","Inglaterra"=>"Londres","Alemania"=>"Berlín");
	echo "La capital de España es ".$capitales["España"]."<br>";
	echo "La capital de Francia es ".$capitales["Francia"]."<br>";
	echo "La capital de Inglaterra es ".$capitales["Inglaterra"]."<br>";
	echo "La capital de Alemania es ".$capitales["Alemania"]."<br>";
	
	?>
	<p>La capital de España es <?php echo $capitales["España"] ?></p> <!--php en html(es mejor opc)-->
	<p>La capital de Francia es <?php echo $capitales["Francia"] ?></p>
	<p>La capital de Inglaterra es <?php echo $capitales["Inglaterra"] ?></p>
	<p>La capital de Alemania es <?php echo $capitales["Alemania"] ?></p>
	
	<!---------------------------------------------------------------->
	<?php
	//A. tradicional= asocia valores con índices o posiciones
	//sintaxis: $var=array("valor","valor"...).
	$capitales=array("Madrid","París","Londres","Berlín");
	echo "La capital de España ".$capitales [0]."<br>";
	echo "La capital de Francia ".$capitales [1]."<br>";
	echo "La capital de Inglaterra ".$capitales [2]."<br>";
	echo "La capital de Alemania ".$capitales [3]."<br>";
		
	?>
	<p>La capital de España es <?php echo $capitales[0] ?></p><!--php en html(es mejor opc)-->
	<p>La capital de Francia es <?php echo $capitales[1] ?></p><!--php en html(es mejor opc)-->
	<p>La capital de Inglaterra es <?php echo $capitales[2] ?></p><!--php en html(es mejor opc)-->
	<p>La capital de Alemania es <?php echo $capitales[3] ?></p><!--php en html(es mejor opc)-->
	
	<!---------------------------------------------------------------->
	<h2>Pintar por pantalla el contenido de un array</h2>
	<?php
	//no podemos pintar el contenido de un array con el constructor de lenguaje echo
	//echo$capitales;
	
	//Función var_dump($var_array)=imprime por pantalla el contenido del array, devolviendo información sobre el número de elementos que contiene, tipo de datos que contiene, longitud de caracteres de cada uno de los valores y la sintaxis "clave"=>"valor"
	var_dump($capitales)."<br>";
	
	//Función print_r($var_name)= imprime por pantalla el contenido del array, devolviendo únicamente la sintaxis "clave", "valor".
	print_r($capitales);
		
	?>
	
	<!---------------------------------------------------------------->
	<h2>Prácticas</h2>
	<?php
	$usuarios=array("elena","maría","paco");
	//Los $usuarios de mi plataforma son Elena, María y Paco
	
	echo 'Los $usuarios de mi plataforma son '.ucfirst($usuarios [0])." ".ucfirst($usuarios [1])." ".ucfirst($usuarios [2])."."."<br>";
	
	?>
        <p>Los <?php echo '$usuarios' ?> de mi plataforma son <?php echo ucfirst($usuarios[0]) ?>, <?php echo ucfirst($usuarios[1]) ?> y <?= ucfirst($usuarios[2])?>.</p>
	
	
	
	
	
	
	
	
	
	    
    </body>
</html>
	


