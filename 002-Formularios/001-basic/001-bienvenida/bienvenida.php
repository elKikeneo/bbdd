<?php
extract($_POST);
if($sexo=="Hombre"){
    $var="Bienvenido";
}  else {
    $var="Bienvenida";
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Bienvenida</title>
    </head>
    <body>
	<h2>Saludo:</h2>
	<p><?= $var." ".$nombreUser." ".$apellidosUser."." ?></p>

    </body>
</html>