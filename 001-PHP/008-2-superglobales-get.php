<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Superglobales</title>
    </head>
    <body>
	<?php
//	var_dump($_GET);
	
	?>
	<h1><?php echo $_GET["nombreUser"] ?></h1>
	
<!--	Buenos días elena naranjo, tus datos son:-->
	
<p>Buenos días <b><?php echo $_GET["nombreUser"]." ".$_GET["apellUser"]?></b>, tus datos son: <?php echo $_GET["tlfnoUser"]." y ".$_GET["emailUser"] ?> </p>








<p>Buenos días <b><?php echo $_POST["nombreUser"]." ".$_POST["apellUser"]?></b>, tus datos son: <?php echo $_POST["tlfnoUser"]." y ".$_POST["emailUser"] ?> </p>
	
	
	
	
    </body>
</html>
	
