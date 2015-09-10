<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Arrays - Funciones</title>
    </head>
    <body>
	<h2>Número de elementos que hay en un array</h2>
	<?php
	//Función count($var_array)= devuelve el número de elementos que hay en un array.
	//A. asociativo
	$usuarios=array("u1"=>"Elena","u2"=>"Pablo","u3"=>"Luis");
	//A.tradicional
	$users=array("Elena","Pablo","Luis");			
	?>
        
	<p>El número de elementos que tiene <?php echo '$usuarios'?> es <?php echo count($usuarios) ?></p>
	<p>El número de elementos que tiene <?php echo '$users'?> es <?php echo count($users) ?></p>
	
	<!----------------------------------------------------------------------------->
	
	<h2>Crear un array a partir de un string</h2>
	<?php
	//Función explode(caracter de división, $string)= devuelve el array resultante de dividir la cadena de texto a partir del caracter buscado, es decir, divide una cadena de texto y crea un array con estos sub-textos
	$string="jairo@cice.es,carmen@cice.es,jesus@cice.es";
	$emails=explode(",",$string); //$emails=array("jairo@cice.es,carmen@cice.es,jesus@cice.es");
	var_dump($emails);
	
	echo $emails[0];
	
	?>
	
	<p>El email de <?php echo $emails[0]?> tiene <?php echo mb_strlen($emails [0],"UTF-8")?> caracteres.</p>
	
	<!--Práctica-->
	<h2>Obtener el último elemento con distintos comandos</h2>
	
	<?php
	$fichero="casa-blanca.jpg"; //jpg
	echo strchr($fichero,".")."<br>";
	echo ltrim(strchr($fichero,"."),".")."<br><br>";
	
	$fichero_array=explode(".",$fichero); //$fichero_array=("casa-blanca","jpg");
	echo $fichero_array[count($fichero_array)-1]."<br><br>";
	////////
	$fichero="gatito.bonito.jpg"; //jpg
	
	//explode()+count()
	$fichero_array=explode(".",$fichero);
	echo $fichero_array[2]."<br><br>";
	
	//strrchr()+ltrim()
	echo ltrim(strrchr($fichero, "."),".")."<br>";
		
	?>
	
	<!------------------------------------------------------------------>
	<h2>Obtener el último elemento array</h2>
	<?php
	//Función end($var_array)=devuelve el último elemento de un array
	$fichero="cice.fondo-escritorio.png"; //png
	$fichero_array=explode(".",$fichero);
	echo end($fichero_array)."<br>";
			
	?>
	
	<!------------------------------------------------------------------>
	<h2>Crear un string a partir de un array</h2>
	<?php
	//Función implode(caracter de división,$var_array)= devuelve una cadena de texto creada a partir de los elementos de un array, separándolos por el caracter de división. 
	$emails=array("oscar@cice.es","jairo@cice.es","carmen@cice.es");
	
	
	$ultimo_elemento=end($emails);
	$num_letras_ultimo_elemento=mb_strlen($ultimo_elemento,"UTF-8");
	
	$string=implode(", ",$emails);
	//echo $string;
	$num_letras_total=  mb_strlen($string,"UTF-8");
	
	echo mb_substr($string,0,$num_letras_total-($num_letras_ultimo_elemento+2),"UTF-8")." y ".$ultimo_elemento;
	
	?>
	
	<!--------------------------------------------------------------------->
	<h2>Crear variables a partir de las claves de un array asociativo</h2>
	
	<?php
	//Función extract($val_array)= crea variables a partir de las claves de un array asociativos. 
	$user=array("nombre"=>"Elena","email"=>"elena@cice.es","dni"=>"7889");
	extract($user);				
	
	?>
	<p><?php echo $nombre?> tiene el email <?php echo $email?></p>
	
	<!---------------------------Práctica------------------------------------------>
	<?php
	$obj=array("color"=>"azul","tamaño"=>"medio","forma"=>"esférica");
	//el $color de mi objeto es azul y su $forma es esférica
	
	extract($obj);
	
	?>
	<p>El <?php echo '$color'?> de mi objeto es <?php echo $color?> y su <?php echo '$forma'?> es <?php echo $forma?>.</p>
	
	<!--------------------------------------------------------------------->
	<h2>Devolver un valor aleatoria de un array</h2>
	<?php
	//Función array_rand($var_array)= devuelve un número de posición aleatorio del array
	$nombres=array("Yolanda","Imanol","Julia");
	$num_pos=array_rand($nombres); //devuelve rango entre 0 y 2
	
	echo $nombres [1];			
	
	?>
	<p>Le toca fregar los platos a <?php echo $nombres[$num_pos]?></p>

    </body>
</html>
