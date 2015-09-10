<?php

$miNombre = 'Kike'; //tipo string
$edad = 33; //tipo integer
$altura = 1.7; //tipo double
$hombre=true; //Tipo boolean
$futuro="";
$peso; //--->$peso=Null

//Funcion empty($var_name)=función que nos devuelve true (1) si la variable NO contiene valor devolverá false () si la variable SI contiene valor. 

echo '¿$miNombre está vacía?: '.empty($miNombre)."<br>";
echo '¿$edad está vacía?: '.empty($edad)."<br>";
echo '¿$altura está vacía?: '.empty($altura)."<br>";
echo '¿$hombre está vacía?: '.empty($hombre)."<br>";
echo '¿$futuro está vacía?: '.empty($futuro)."<br>";
echo '¿$peso está vacía?: '.empty($peso)."<br>";


//empty($a,$b,$c) no está permitido, ya que no puedo pasarle más de un argumento.



?>