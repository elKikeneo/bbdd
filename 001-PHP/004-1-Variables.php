<?php
//$variable=contenedor que almacena datos de tipo string, integer, double, boolean. 
//Inicialización de variable=asignamos valores a las variables.

$miNombre = '$miNombre'; //tipo string
$nombre = 'Kike';
$Nombre = 'Kike';
$edad = 33; //tipo integer
$altura = 1.7; //tipo double
$hombre=true; //Tipo boolean

echo '<p>Kike tiene 33 años y mide 1.7 m.</p>';

echo "<p>$miNombre tiene $edad años y mide $altura m.</P>";

//práctica.
//Las variables introducidas entre comillas simples se interpretan de manera literal mientras que con comillas dobles o sin ellas muestran el valor que almacenan. 
echo "<p>$miNombre vale $Nombre</p>"; //mi respuesta bien echa pero mal formulada. Hace falta concatenar...

echo '<p>$miNombre'." vale $nombre</p>";

//Concatenar= unión entre dos o más caracteres o cadenas de texto. El carácter para señalar una concatenación en php es el '.'

echo '$miNombre'." vale ".$nombre.'<br><br>';
echo $nombre.' tiene '.$edad." años y mide ".$altura.' m. <br>';

echo '$edad'." vale $edad y ".'$altura'." vale $altura.";

?>


