<?php
$mng="";
if($_POST){
    if( (isset($_POST['email']) && !empty($_POST['email'])) &&  (isset($_POST['password']) && !empty($_POST['password'])) ){
        
        include './inc/connect.php';
        extract($_POST);
        
        $pass_code=sha1($password);
        $sql="select * from usuarios where email='$email' and password='$pass_code' ";
        $result=mysqli_query($link, $sql);
        $nfilas=  mysqli_num_rows($result);
        if($nfilas>0){
            header("location:perfil.php");
        }else{
            $mng="Email o contraseña incorrectos";
        }
        
    }else{
        $mng="Debes rellenar todos los datos";
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
        
        <!--Formulario--------------------------->
        <div class="login">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <h1>Login</h1>
                <input type="email" name="email" placeholder="user@email.com" required autofocus>
                <input type="password" name="password" placeholder="****" required>
                <input type="submit" value="Entrar">
                
                <!--Ocultar este enlace si no queremos que nadie se registre-->
                <a href="registrar.php">Nuevo usuario</a> 
                <a href="recuperar.php">Recuperar contraseña</a>
                
            </form>
        </div>
        
        <!--Mensaje---------------------------------->
        <span class="mng_"><?=$mng?></span>
       
    </body>
</html>