<?php
include('../functions/functions.php');
session_start();

if(!isset($_SESSION["username"]) || empty($_SESSION["username"])){
    session_destroy();
    header("location:index.php");
    exit();
}
$a=  check_get("a");
switch ($a){
    case "login": check_login(); break;
    case "register": echo '¿quieres registrarte?'; break;
    case "forgot": echo '¿quieres recuperar tu contraseña?'; break;
    case "logout": end_session(); break;
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
      
      <h1>Bienvenido <?=$_SESSION["username"]?></h1>
      <a href="<?=$_SERVER["PHP_SELF"]?>?a=logout" class="tiny button alert">Log Out</a>
    
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
