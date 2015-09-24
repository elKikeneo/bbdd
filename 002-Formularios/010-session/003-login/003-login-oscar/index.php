<?php
session_start();
$class="";
$mng="";

//Primero preguntamos si existe dato almacenado, ya que ello querría decir que el usuario ya se había logueado
if(isset($_SESSION["emailUser"])){
    header("location:perfil.php");
}else{
    //sino es así, me mantengo a la espera de recibir info del formulario y validarlo
    if($_POST){
        extract($_POST);//$email,$password
        if($email=="elena@cice.es" && $password=="1234"){
            //Si los datos correctos almaceno en session y redirecciono
            $_SESSION["emailUser"]=$email;
            header("location:perfil.php");
        }else{
            $class="2";
            $mng="Usuario o contraseña incorrectos";
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
    <body id="login">
        
        <main>
            <h1>Login</h1>
            <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" value="Entrar">
            </form>
            
            <p class="mng_<?=$class?>">
               <?=$mng?>
            </p>
        <main>
        
    </body>
</html>
