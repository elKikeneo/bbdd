<?php
//Redirección desde mail
$mng="";
$valor="";
if(isset($_GET["mng"])){
    $valor=$_GET["mng"];
    switch($valor){
        case 1:
            $mng="Mensaje enviado :)";
            break;
        case 2:
            $mng="Error en el envío :(";
            break;
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
        
        <h1>Gmail Elena</h1> 
        <form action="mail.php" method="post">
            <input type="text" name="asunto" placeholder="*Asunto" required>
            <input type="email" name="para" placeholder="*Para" required>
            <input type="email" name="oculto" placeholder="CCO" >
            <textarea name="mensaje" placeholder="Mensaje"></textarea>
            <input type="submit" value="Enviar">
        </form>
        
        <p class="mng_<?=$valor?>"><?=$mng?></p>
        
    </body>
</html>
