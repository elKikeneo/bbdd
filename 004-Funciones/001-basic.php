<?php

//Definición de funciones:

//Funciones sin parámetros de entrada
function saludar(){
    return "Hola";
}

$saludos=saludar (); 


//Función con parámetros de entrada
function pintarMensajeMay($str){
    return mb_strtoupper($str, "UTF-8");
}


?>

<p><?=  saludar() ?></p><!--Pintamos el valor devuelto por la función-->
<p><?=  $saludos ?></p><!--Pintamos el valor almacenado por la función en la variable-->

<p><?= pintarMensajeMay("bueos dias") ?></p>

