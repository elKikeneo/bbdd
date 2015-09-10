<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Superglobales post</title>
    </head>
    <body>
	
<h1><?php echo $_POST["nombreUser"] ?></h1>
	
<!--	Buenos días elena naranjo, tus datos son:-->
	
<p>Buenos días <b><?php echo $_POST["nombreUser"]." ".$_POST["apellUser"]?></b>, tus datos son: <?php echo $_POST["tlfnoUser"]." y ".$_POST["emailUser"] ?> </p>

	
    </body>
</html>
	

