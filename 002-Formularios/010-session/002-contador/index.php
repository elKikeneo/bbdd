<?php
session_start();

if (!isset($_SESSION["contador"])){
    $_SESSION["contador"]=1;
} else {
    $_SESSION["contador"]++;
}


?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
	
	<h3>Contador de páginas vistas por el usuario en toda su sesión</h3>
	
	<p>Desde que entraste has visto <?= $_SESSION["contador"]?> página</p>

    </body>
</html>
