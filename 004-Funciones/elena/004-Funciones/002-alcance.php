<?php

//Alcance local = una variable creada dento de una fución está limitada al ámbito local de la función, es decir, sólo puede ser utilizada dentro de la misma
$amigo="Samuel";

function pintarOracion(){
    $amigo="José";
    return "Estoy dentro de la función y mi amigo es $amigo";
}

echo "Estoy fuera de la función y mi amigo es $amigo";
echo pintarOracion();

///////////////////////////////////////////////////////////////////////////////
echo "<br>";
///////////////////////////////////////////////////////////////////////////////

//Alcance global =para que unavariable sea accesible por una función debe ser declarada cómo global dentro de la misma o debemos pasársela cómo parámetro de entrada


//Alcance global a la variable
$amigo="Samuel";
function pintarOracion2(){
    global $amigo;
    return "Estoy fuera de la función y mi amigo es $amigo";
}
echo pintarOracion2();        

///////////////////////////////////////////////////////////////////////////////
echo "<br>";
///////////////////////////////////////////////////////////////////////////////

//Parámetro de entrada
$amigo="Samuel";
function pintarOracion3($a){
    return "Estoy fuera de la función y mi amigo es $a";
}
echo pintarOracion3($amigo);        
        

//RESUMEN:
/*
-Una variable definida dentro de una función nace y muere dentro de esta (local). Por tanto si existiera el mismo nombre de variable por fuera de esta, no se machacan.
-Si queremos que una función acceda al valor de una variable definida fuera de ésta, debemos convertirla en global dentro ed la función o pasársela cómo parámetro de entrada
 *  */
        
        