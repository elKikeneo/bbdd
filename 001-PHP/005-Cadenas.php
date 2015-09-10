<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadenas</title>
    </head>
    <body>
	
	<h2>Longitud de cadenas de texto</h2>
	<?php
	//Función strlen($var_name)= devuelve el número de caracteres que tiene un string
	echo strlen('hola Elena')."<br><br>";
	
	$texto="Hola Elena";
	echo strlen($texto)."<br><br>";
	
	$length=  strlen($texto);
	echo "$texto tiene $length caracteres";

	?>
	
	<!-------------------------------------------------------------------->
	<h2>Longitud de cadena de textos con caracteres especiales</h2>
	<?php
	//Función mb_strlen($var_name,encoding)= devuelve el número de caracteres incluyendo los caracteres especiales
	echo mb_strlen("Hola Tomás","UTF-8")."<br><br>";
	
	$texto="Hola Tomás"; 
	$length= mb_strlen($texto,"UTF-8");
	echo "$texto tiene $length caracteres.";
	
	?>
	
	<!-------------------------------------------------------------------->
	
	<h2>Número de palabras de una cadena</h2>
	<?php
	//Función str_word_count($var_name)= devuelve el número de palabras que componen una cadena de texto. 
	echo str_word_count("Hola soy Kike")."<br>";
	$texto="Hola soy Kike";
	echo str_word_count($texto)."<br>";
	
	echo $texto." tiene ".str_word_count($texto)." palabras.<br>"; //se puedee hacer de esta forma, más que nada porque ocupa menos espacio en la memoria. Se usa menos variables...
	
	$length=str_word_count($texto);
	
	echo "'$texto' tiene $length palabras.<br>";
	echo '"$texto" tiene $length palabras.<br>';
	echo "\"$texto\" tiene $length palabras.<br>";
	
	//str_word_count($var_name,0,caracteres especiales)=pasamos más parámetros de entrada a la función si la cadena de texto a contabilizar contiene caracteres especiales. 
	$texto="Los 10 mandamientos";
	echo str_word_count($texto,0,"123456789")."<br>";
	
	$texto="Tengo un á rbol";
	echo str_word_count($texto,0,"áéíóúÁÉÍÓÚÑñ0123456789")."<br>";
	
	?>
	
	<!-------------------------------------------------------------------->
	<h2>Texto en mayúsculas</h2>
	<?php
	//Función mb_strtoupper($var_name,encoding)=función que devuelve la cadena de texto convertida a mayúsculas. 
	echo strtoupper("este texto lo quiero en mayúsculas")."<br>";
	//Función multibyte "mb_"(permite pasar el encoding como parámetro de entrada)
	echo mb_strtoupper("este texto lo quiero en mayúsculas","UTF-8")."<br>";
	
	$texto="este texto lo quiero en mayúsculas";
	echo mb_strtoupper($texto,"UTF-8")."<br><br>";
	
	$txt_may= mb_strtoupper($texto,"UTF-8");
	echo $txt_may;
	
	?>
	
	<!-------------------------------------------------------------------->
	
	<h2>Convertir texto en minúscula</h2>
	<?php
	//Función mb_strtolower($var_name,encoding)=función que devuelve la cadena de texto convertida a minúsculas.
	echo mb_strtolower($txt_may,"UTF-8")."<br><br>";
	$txt_min= mb_strtolower($txt_may,"UTF-8");
	
	echo $txt_min."<br><br>";

	?>
	<!-------------------------------------------------------------------->
	
	<h2>Convertir primera letra de la oración en mayúscula</h2>
	<?php
	//Función ucfirst($$var_name)= función que devuelve la primera letra en mayúsculas. No permuite el encoding por tanto tendremos problemas con los caracteres especiales. 
	
	echo ucfirst("primera letra de la oración en mayúsculas")."<br>";
	$texto="primera letra de la oración en mayúsculas";
	echo ucfirst($texto)."<br><br>";
	
	//ejercicio
	$texto="pRimEra leTra En mAyÚscula";
	
	echo ucfirst(mb_strtolower($texto,"UTF-8"))."<br><br>"; //ejercicio Elena: nuevamente se puede hacer sin formar otra variable y así ahorrar memoria. 
	
	$txt_min=mb_strtolower($texto,"UTF-8");
	echo ucfirst($txt_min);
	
	?>
	
	<!-------------------------------------------------------------------->
	<h2>Convertir la primera letra de cada palabra en mayúscula</h2>
	<?php
	//Función ucwords($var_name)= función que devuelvela oración con la primera letra de cada palabra en mayúscula. No permite el encoding por tanto tendremos problemas con los caracteres.
	$texto="pRiMera letRa de caDa paLaBra en mAyúsculAS";
	echo ucwords(mb_strtolower($texto,"UTF-8"))."<br><br>";
	
	?>
	
	<!-------------------------------------------------------------------->
	<h2>Conversión en función de método</h2>
	<?php
	//Función mb_convert_case($var_name,método,encoding)= según el método que le especifiquemos a la función, realiza una conversión u otra. Dispone de tres métodos posibles (MB_CASE_UPPER, MB_CASE_LOWER, MB_CASE_TITLE) que equiparan a las funciones mb_strtoupper, mb strtolower, ucwords.
	
	$texto="tengo un árbol en mi jardín";
	
	echo mb_convert_case($texto, MB_CASE_UPPER,"UTF-8")."<br><br>";
		
	$txt_may=mb_convert_case($texto, MB_CASE_UPPER,"UTF-8");
	
	echo $txt_may."<br><br>";
	
	echo mb_convert_case($txt_may, MB_CASE_LOWER,"UTF-8")."<br><br>";
	echo mb_convert_case($texto, MB_CASE_TITLE,"UTF-8")."<br><br>";
	
	?>
	<!-------------------------------------------------------------------->
	
	<h2>Cortar string y concatenar funciones</h2>
	<?php
	//Función mb_substr ($var_name, start pos, lenght-cantidad, encoding)= devuelve una parte de la cadena (substrings)
	$texto ="árbol verde";

	//http://php.net/manual/es/function.mb-substr.php
	
	//Resultado de los deberes
	$first_letter=mb_substr($texto,0,1,"UTF-8"); //Con esto tenemos "á"
	$first_letter_may=mb_strtoupper($first_letter,"UTF-8"); //Con esto tenemos la "Á"
	$resto_txt=mb_substr($texto,1,mb_strlen($texto,"UTF-8")-1,"UTF-8"); //($texto,1 {es la posición de la palabra donde quiero empezar "rbol verde"},mb_strlen($texto,"UTF-8")-1 {este comando te saca el número de letras de la frase y el "-1" de resta una letra que en este caso sería la "á"},UTF-8)
	echo $first_letter_may.$resto_txt."<br>";
	
	//La mejor manera de hacerlo sin tener que hacer muchas variables. Se ahorra memoria
	
	echo mb_strtoupper(mb_substr($texto, 0, 1, "UTF-8"),"UTF-8").mb_substr($texto,1,mb_strlen($texto,"UTF-8")-1,"UTF-8")."<br><br>";
		
	?>
	
	<!----------------------------------------------------------------->
	
	<?php
	$texto="áRbol VerDe en Mi jarDïn"; //Árbol verde en mi jardín
	
	echo mb_strtoupper(mb_substr($texto, 0, 1, "UTF-8"),"UTF-8").  mb_strtolower(mb_substr($texto,1,mb_strlen($texto,"UTF-8")-1,"UTF-8"),"UTF-8");
	
	?>
	
	<!----------------------------------------------------------------->
	
	<h2>Quitar espacios o caracteres al inicio o final de una cadena</h2>
	<?php
	//Función trim($var_name, caracter a eliminar)= elimina los caracteres buscados del principio y final de la cadena, sino indico caracter por defecto elimina los espacios.
	//Función rtrim($var_name, caracter a eliminar)= elimina los caracteres buscados del final (right) de la cadena, sino indico caracter por defecto elimina los espacios.
	//Función ltrim($var_name, caracter a eliminar)= elimina los caracteres buscados del final (left) de la cadena, sino indico caracter por defecto elimina los espacios.
	
	$texto=" elena@cice.es ";
	$texto=trim($texto);
	echo mb_strlen($texto,"UTF-8")."<br>";
	
	echo mb_strlen(trim($texto),"UTF-8")."<br>";
	
	////////////////////////////////////////
	
	$texto="**/-Hol-a**/";
	
	echo trim($texto,"*/-")."<br>";
	echo rtrim($texto,"*/-")."<br>";
	echo ltrim($texto,"*/-")."<br>";	
	
	?>
	<!------------------------------------------------------------->
	<h2>Buscar y remplazar</h2>
	<?php
	//Función str_replace(palabra a buscar, palabra de reemplazo, $var_name)= devuelve la cadena de texto modificada.
	//Función str_ireplace(palabra a buscar, palabra de reemplazo, $var_name)=no es sensible al uso de may o min...
	
	$texto="Debo comer más Helado para estar sano";
	
	echo str_replace("Helado","verdura",$texto)."<br>";//busca coincidencia exacta
	echo str_ireplace("Helado","verdura",$texto)."<br>";//le da igual may o min lo modifica
	//////////////////////////////
	$texto="Tengo una oración con palabras malsonantes del tipo tonto, bobo, FEO";
	$listado_palabras= array ("tonto", "feo", "bob");
	echo str_ireplace($listado_palabras, $texto, "***")."<br>";
	
	
	$texto="1 2 3 4 5 6 7 8 9 "; //1 - 2 - 3 - ...
	echo rtrim(str_replace(" "," - ",$texto)," - ")."<br>";
		
	?>
	<!------------------------------------------------------------->
	<h2>Devolver una subcadena</h2>
	<?php
	//Función strchr($var_name, elemento a buscar desde la izq)= devuelve los caracteres en sentido de lectura, a partir del caracter buscado y encontrado desde la izquierda (incluido este)
	//Función strrchr($var_name, elemento a buscar desde la derecha)= devuelve los caracteres en sentido de lectura, a partir del caracter buscado y encontrado desde la derecha (incluido este)
	$fichero="foto.gatito.bonito.jpg";
	echo strchr($fichero, ".")."<br>";
	echo strrchr($fichero, ".")."<br>";
	echo ltrim(strrchr($fichero, "."),".")."<br>";
	
	
	?>


				
	
    </body>
</html>
