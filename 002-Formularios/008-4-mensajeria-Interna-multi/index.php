<?php
$mng="";

if($_POST){
   extract($_POST); //$email,$password
   if($email=="elena@cice.es" && $password=="1234"){
       header("location:mensajeria.php");
   }else{
       $mng="Usuario incorrecto";
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
            <input type="email" name="email" placeholder="*Email" required>
            <input type="password" name="password" placeholder="*Password" required>
            <input type="submit" value="Enviar">
        </form>
        
        <p><?=$mng?></p>
        
    </body>
</html>
