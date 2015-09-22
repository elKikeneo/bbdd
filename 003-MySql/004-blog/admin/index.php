<?php
$mng="";
if($_POST){
    if( (isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['password']) && !empty($_POST['password'])) ){
        include './inc/connect.php';
        extract($_POST);
        $sql="select * from usuarios where email='$email' and password='$password'";
        
        
    }else{
        $mng="Debes rellenar todos los datos"
    }
}

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="sitemedia/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <!--Formulario de mi login-->
        <div class="login">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <h1>Login</h1>
                <input type="email" name="email" placeholder="user@email.com" required autofocus>
                <input type="password" name="password" placeholder="****" required>
                <input type="submit" value="Entrar">
                
                <!--Ocultar este enlace si no queremos que nadie se registre-->
                <a href="registrar.php">Nuevo Usuario</a> 
                <a href="recuperar.php">¿Has olvidado tus datos?</a>
                
                    
            </form>
        </div>
        
        <!--Mensaje----------------------------------------------------------->
        <span class="mng">Error</span>
        
        
        
    </body>
</html>
