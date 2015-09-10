<?php
//Sentencias para cuando venga información del fichero validador "location.php", el cual envía información por la URL index.php?error=1
$mng="";
if ($_GET){
    extract($_GET);
    switch ($error){ //$error
	case 1:
	    $mng="El usuario no existe";
	    break;
	case 2:
	    $mng="La pass no es correcta";
	    break;
    }
}

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
    </head>
    <body>
	<h1>Login</h1>
	<form action="location.php" method="post">
	    <input type="email" placeholder="Email" name="email" required>
	    <input type="password" placeholder="Pass" name="pass" required>
	    
	    <input type="submit" value="Enviar">
	
	</form>
	<p><?= $mng ?></p>
    </body>
</html>