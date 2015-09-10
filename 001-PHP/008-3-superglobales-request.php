<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Superglobales-get</title>
    </head>
    <body>
	<?php
	//	var_dump($_GET);
	
	?>
	<h1><?php echo $_REQUEST["nombreUser"] ?></h1>
	
	<!--	Buenos días elena naranjo, tus datos son:-->
	
	<p>Buenos días <b><?php echo $_REQUEST["nombreUser"]." ".$_REQUEST["apellUser"]?></b>, tus datos son: <?php echo $_REQUEST["tlfnoUser"]." y ".$_REQUEST["emailUser"] ?> </p>
					
	
	<p>Buenos días <b><?php echo $_POST["nombreUser"]." ".$_POST["apellUser"]?></b>, tus datos son: <?php echo $_POST["tlfnoUser"]." y ".$_POST["emailUser"] ?> </p>
	
	
	
    </body>
</html>
	
