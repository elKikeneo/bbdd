<?php
include("../functions/functions.php");

if(isset($_COOKIE["login"]) && !empty($_GET["login"])){
    $username=$_COOKIE["login"];
    
    if(session_status() != PHP_SESSION_ACTIVE){
	session_start();
    }
    $_SESSION["username"]=$username;
    header("location:profile.php");
    exit();
}

$a= check_get("a");

/*controlador de acciones*/
switch ($a){
    case "login": check_login(); break;
    case "register": echo '¿quieres registrarte?'; break;
    case "forgot": echo '¿quieres recuperar tu contraseña?'; break;
}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <?php
	/*Controlador de vistas*/
	$v = check_get("v");
	
	switch ($v){
	    case "register": include '../template/form_register.php'; break;
	    case "forgot": include '../template/form_forgot.php'; break;
	    default: include '../template/form_login.php';
	}
    
    ?>
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
