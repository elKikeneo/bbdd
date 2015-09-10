<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Condicioneales if, else</title>
    </head>
    <body>
	<h2>Condicionales if, else (operadores de comparación)</h2>
	<?php
	$tope=8;
	$precio_copa_bar=10;
	if ($precio_copa_bar<=$tope){
	    echo "Ponme una copa";
	}else{
	    echo "No gracias, $precio_copa_bar € me parece un timo."."<br>";
	}
	/////////////////////////////////
	$edad=15;
	
	if ($edad>=18){
	    echo "Puedes pasar.";
	}else{
	    echo "No puedes pasar, porque tienes $edad años.";
	}
	?>
	
	<!------------------------------------------------------------>
	<h2>Condicionales if/else (operadores de igualdad)</h2>
	<?php
	$a=1;
	$b="1";
	
	if ($a===$b){
	    echo "Son iguales.";
	}else{
	    echo "No son iguales.";
	}
	
	?>
	
	<!------------------------------------------------------------>
	<h2>Condicionales if/else (operadores lógicos)</h2>
	<?php
	//Función rand(inicio, final)= devuelve un número aleatorio comprendido dentro del rango que se especifique.
	$num=  rand(0,10);
	
	if ($num==2||$num==5){
	    echo "Has ganado con el número $num :)";
	}else{
	    echo "Has perdido con el $num :`(";
	}
	
	?>
	
	<!------------------------------------------------------------>
	<h2>Condicionales if/else (con variables booleanas)</h2>
	<?php
	$mujer=false;
	
	if ($mujer){
	    echo "Bienvenida!";
	}else{
	    echo "Bienvenido!"."<br>";
	}
	////////////////////////////////////////////////////////////////
	$edad=15;
	$zapatillas=false;
	if ($edad>=18 && !$zapatillas){
	    echo "Puedes pasar";
	}else{
	    echo "No puedes pasar";
	}
	?>
	
	<!------------------------------------------------------------>
	<h2>Condicionales if/else (con función true/false)</h2>
	<?php
	$txt="Hola";
	
	if (isset($txt)){
	    echo "Está iniciada"."<br>";
	}else{
	    echo "No está iniciada"."<br>";
	}
	//////////////////////////////////////////////////////////
	$txt="Hola";
	
	if (!isset($txt)){
	    echo "No está iniciada";
	}else{
	    echo "Está iniciada"."<br>";
	}
	
	//////////////////////////////////////////////////////////
	$c=2;
	
	if (isset($c)){
	    $c=8;
	}
	echo $c."<br>";
	
	?>	
	<!---------------------------------------------------------->
	<h2>Prácticas</h2>
	<h4>Comprobar número de palabras</h4>
	<?php
	$txt="Hola soy Joaquín";
	$num_perm=3;
	if (str_word_count($txt,0,'áéíóú')<=$num_perm){
	    echo "Tiene el número de palabras permitido: $num_perm"."<br>";
	}else{
	    echo "No tiene el número de palabras permitido: $num_perm"."<br>";
	}
	///////////////////////////////////////////////////////
	$txt_array=explode(" ",$txt);
	$num_perm=3;
	if (count($txt_array)<=$num_perm){
	    echo "Tiene el número de palabras permitido: $num_perm";
	}else{
	    echo "No tiene el número de palabras permitido: $num_perm"."<br>";
	}
	
	?>
	<!--------------------------------------------------------------->
	<h4>Validación de extensión</h4>
	<?php
	$file="foto.gatito.bonito.jpg";
	$ext_perm="jpg";
	//Ficher permitido	
	?>
	<p><b>Opción con strrchr():</b></p>
	<?php
	
	if (ltrim(strrchr($file, "."),".")==$ext_perm){
	    echo "Fichero permitido"."<br>";
	}else{
	    echo "Fichero no permitido"."<br>";
	}
	
	?>
	
	<p><b>Opción con count():</b></p>
	<?php
	$cadena=explode(".",$file);
	if ($cadena[count($cadena)-1]==$ext_perm){
	    echo "Fichero permitido"."<br>";
	}else{
	    echo "Fichero no permitido"."<br>";
	}
	?>
	
	<p><b>Opción con end():</b></p>
	<?php
	if (end($cadena)==$ext_perm){
	    echo "Fichero permitido"."<br>";
	}else{
	    echo "Fichero no permitido"."<br>";
	}
	?>
	<!------------------------------------------------------------->
	<h2>Estructura de embudo</h2>
	<?php
	$edad=25;
	$mujer=false;
	if ($edad >=18) {
	    if ($mujer) {
		echo "Bienvenida! no pagas entrada" . "<br>";
	    } else {
		echo "Bienvenido! tienes que pagar" . "<br>";
	    }
	} else {
	    echo "Lo siento, no puedes pasar, eres menor de edad." . "<br>";
	}
	//////////////////////////////////////////////////////////////////
	
	
	$billete=true;
	$destino="Francia";
	$mujer=false;
	if ($billete) {
	    if ($destino=="Francia") {
		if ($mujer) {
		    echo "Buen viaje Señorita" . "<br>";
		} else {
		    echo "Buen viaje Señor" . "<br>";
		}
	    } else {
		echo "Buen viaje" . "<br>";
	    }
		
	} else {
	    echo "Necesita comprarse un billete primero" . "<br>";
	}
	?>
	
	
	
	
    </body>
</html>
	
