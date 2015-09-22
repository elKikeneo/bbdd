<?php
$mng="";
if($_POST){
    if( (isset($_POST['email']) && !empty($_POST['email'])) &&  (isset($_POST['password']) && !empty($_POST['password'])) &&  (isset($_POST['nombre']) && !empty($_POST['nombre'])) ){
        
        include './inc/connect.php';
        extract($_POST);
        
        $sql="select * from usuarios where nombre='$nombre' or email='$email' ";
        $result=mysqli_query($link, $sql);
        $nfilas=  mysqli_num_rows($result);
        if($nfilas>0){
            $mng="Ya existe usuario. Inténtalo de nuevo";
        }else{
            //logaritmo de reducción criptográfica. La codificación "md5()" da 128bits mientras que "sha1()" da 160bits, por lo que es más dificil de corromper
            $pass_code=sha1($password);
            $sql="insert into usuarios (nombre,email,password,fecha) values ('$nombre','$email','$pass_code',NOW())";
            $result=mysqli_query($link, $sql);
            if($result){
                
                $header = "To: $nombre <$email>"."\r\n";
                $header .= "From: Admin <no-reply@miblog.com>"."\r\n";
                $header .= "MIME-Version: 1.0\r\n";
                $header .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                if(mail($email, "Alta de usuario", "Ha sido registrado correctamente en el blog M108 con el email $email y la contraseña $password. Y tu link de activación es <a href='activar.php?email=$email'>Activar</a>", $header)){
                    $mng="Se te ha enviado más info al correo";
                }else{
                    $mng="Usuario registrado correctamente pero hemos tenido problemas en el envío del email";
                }
                
                
            }else{
                $mng="Error en el registro. Contacte con el <a href='mailto:..'>administrador</a>.";
            }
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
                <h1>Nuevo Usuario</h1>
                <input type="text" name="nombre" placeholder="Nombre" required autofocus>
                <input type="email" name="email" placeholder="user@email.com" required>
                <input type="password" name="password" placeholder="****" required>
                <input type="submit" value="Crear cuenta">
                
                <!--Ocultar este enlace si no queremos que nadie se registre-->
                <a href="index.php">Ya soy usuario</a> 
                
            </form>
        </div>
        
        <!--Mensaje---------------------------------->
        <span class="mng_">
            <?=$mng?>
        </span>
       
    </body>
</html>
