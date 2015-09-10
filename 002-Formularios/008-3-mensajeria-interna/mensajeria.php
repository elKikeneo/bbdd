<?php
//Redirección desde email
$mng="";
$valor="";
if(isset($_GET["mng"])){
    $valor=$_GET[mng];
    switch ($valor){
	case 1:
	    $mng=1;
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
	
	<h1>Nuevo Mensaje</h1>
	
	<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
	    <label>Asunto: </label>
	    <input type="text" name="asunto" autofocus><br><br>
	    <label>Para: </label>
	    <input type="text" name="para" required><br><br>	    
	    <textarea name="mensaje" rows="10" placeholder="Escribe aquí tu mensaje">Mensaje</textarea><br><br>
	    <input type="submit" value="Enviar">
	</form>

    </body>
</html>
