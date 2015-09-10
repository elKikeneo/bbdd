<?php

$mng="";

if (isset($_COOKIE["emailUser"])) {
    header("location:perfil.php");
} else {
    if ($_POST) {
	extract($_POST); //$email, $password
	if ($email == "luis@cice.es" && $password == "1234") {
	    /* Si los datos son correctos almacenamos la info en una cookie y redireccionamos */
	    setcookie("emailUser", $email, time() + 60);
	    header("location:perfil.php");
	} else {
	    $mng = "Usuario no encontrado";
	}
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
	
	<h1>Login</h1>
	<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
	    <input type="email" name="email" placeholder="Email" required>
	    <input type="password" name="password" placeholder="Password" required>
	    <input type="submit" value="Entrar">
	</form>
	<p><?=$mng?></p>

    </body>
</html>
