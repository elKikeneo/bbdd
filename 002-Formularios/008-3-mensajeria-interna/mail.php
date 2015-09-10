<?php
if(!$_POST){
    header("location:mensajeria.php");
}

extract($_POST);

$header="To: Mi Contacto<$para>"."\r\n";
$header.="From: Elena Naranjo <elena@cice.es>"."\r\n";
$header.="BBC:<$oculto>";

if(mail($para,$asunto,$mensaje,$header)){
    $codigo=1;
} else {
    $codigo=2;
}
header("location:mensajeria.php?c=$codigo");