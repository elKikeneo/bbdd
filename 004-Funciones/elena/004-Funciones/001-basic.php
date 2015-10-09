<?php
//Definición de funciones-> UNA FUNCIÓN VALE LO QUE DEVUELVE O RETORNA!!!

//Funciones SIN parámetros de entrada
function saludar(){
    return "Hola";
}
$saludo=saludar();

//Funciones CON parámetros de entrada
function pintarTitulos($str){
    return "Titulo: ".$str;
}
?>



<p><?=saludar()?></p> <!--Pintamos el valor devuelto por la función-->
<p><?=$saludo?></p> <!--Pintamos el valor almacenado por la función en la variable-->

<p><?= pintarTitulos("Hobbit") ?></p>
<p><?= pintarTitulos("El señor de los anillos") ?></p>


