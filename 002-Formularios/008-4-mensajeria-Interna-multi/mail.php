<?php
if(!$_POST){
    header("location:mensajeria.php");
}

extract($_POST); //$asunto,$para,$mensaje,$oculto

$header = "To: Mi contacto <$para>"."\r\n"; //receptor
$header .= "From: Elena Naranjo <elena@cice.es>"."\r\n"; //emisor
$header .= "CC: Elena Naranjo <elena@cice.es>"."\r\n"; 
$header .= "BCC: <$oculto>";

if(mail($para,$asunto,$mensaje,$header)){
    $codigo=1;
}else{
    $codigo=2;
}
header("location:mensajeria.php?mng=$codigo");