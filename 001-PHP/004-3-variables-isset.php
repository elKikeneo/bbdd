<?php
$miNombre = 'Kike'; //tipo string
$edad = 33; //tipo integer
$altura = 1.7; //tipo double
$hombre=true; //Tipo boolean
$futuro="";
$peso; //--->$peso=Null

//Función isset($var_name)= función que devuelve true (1) si la variable está definida, es decir, si contiene valor. Devolverá false () si la variable no está definida, es decir, si no contiene valor. 

echo '¿$miNombre está iniciada?: '.isset($miNombre)."<br>";
echo '¿$peso está iniciada?: '.isset($peso)."<br>";
echo '¿$edad está iniciada?: '.isset($edad)."<br>";
echo '¿$altura está iniciada?: '.isset($altura)."<br>";
echo '¿$hombre está iniciada?: '.isset($hombre)."<br>";
echo '¿$futuro está iniciada?: '.isset($futuro)."<br>";

//isset($a,$b,$c) permite varios argumentos o parámetros de entrada, para que devuelva true (1) todas ellas deben estar iniciadas, si una no lo está devolverá false ().

echo '¿$miNombre, $edaad, $hombre están iniciadas?: '.isset($miNombre, $edad, $hombre).'<br>';
echo '¿$miNombre, $peso están iniciadas?: '.isset($miNombre, $peso).'<br>';



?>
