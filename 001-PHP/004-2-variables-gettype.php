<?php

$miNombre = 'Kike'; //tipo string
$edad = 33; //tipo integer
$altura = 1.7; //tipo double
$hombre=true; //Tipo boolean

//Función gettype ($var_name) = función que devuelve el tipo de dato que almacena una variable, es decir, nos muestra si es de tipo string, integer, double o boolean. 

echo 'La variable $miNombre es de tipo: '.gettype($miNombre).'<br>';
echo 'La variable $edad es de tipo: '.gettype($edad).'<br>';
echo 'La variable $altura es de tipo: '.gettype($altura).'<br>';
echo 'La variable $hombre es de tipo: '.gettype($hombre).'<br>';

?>
