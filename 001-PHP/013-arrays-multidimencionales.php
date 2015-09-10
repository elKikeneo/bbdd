<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
	<h2>Array multidimensional</h2>
	<?php
	$users=array(
	    array("nombre"=>"Paco","apellido"=>"Gómez"),
	    array("nombre"=>"Pepe","apellido"=>"Flores"),
	    array("nombre"=>"Jaime","apellido"=>"Col")
	);
	echo $users[0]["nombre"]." ".$users[2]["apellido"];
	
	/////////////////////////
	foreach ($users as $key=>$user){
	    foreach ($user as $key=>$valor){
		echo $valor." ";
	    }
	}
	
	?>
	
	
    </body>
</html>