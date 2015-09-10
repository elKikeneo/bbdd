<?php
$nombre = 'Kike'; 

//Función unset($var_name)= función que destruye el valor de las variables que le pasamos cómo argumento o parámetro de entrada.



echo '¿Tiene valor $nombre?: '.isset($nombre).'<br>';
echo $nombre.'<br>';

unset($nombre); //borra el nombre y cambia el resultado de la siguiente petición. 

echo '¿Está vacía $nombre?: '.empty($nombre).'<br>';


//--------------------------PRÁCTICA

$curso='m108 php';

echo '¿El $curso es el '. $curso.'?:'.isset($curso).'<br>';





?>