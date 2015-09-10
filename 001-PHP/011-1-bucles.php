<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Bucles</title>
    </head>
    <body>
	<h1>Bucles</h1>
	<p>Nos sirven para ejecutar un código N veces (mientras la condici´n se cumpla)o para pintar el valor de la variable en cada una de las vueltas.</p>
	
	<!------------------------------------------------------------------>
	<h2>Bucle while</h2>
	<?php
	//Sintaxis;
	//Inicialización;
	//While (condición){
	//  Sentencias;
	//  Incremento;
	$a=3;
	while ($a<10){ //Genera un bucle infinito
	    echo 'Hola';
	    //Para solucionarlo, debemos incrementar el valor de la variable inicializada para que en alguna de las vueltas deje de cumplirse la condición
	    $a++;
	}	
	?>
	
	<h3>Contar hasta 10</h3>
	<?php
	$a=0; //0-1-2-3-4-5-6-7-8-9-10-
	while ($a<=10){
	    echo $a++."-";
	}
	?>
	
	<h3>Cuenta atrás</h3>
	<?php
	$a=10; //10-9-8-7-6-5-4-3-2-1-0-
	while ($a>=0){
	    echo 
	    $a--."-";
	}
	?>
	
	<h3>recorrer array tradicional</h3>
	<?php
	$alumnos=array("óscar","jairo","jesús","imanol");
	//óscar, jairo, jesús, imanol
	$i=0;
	while ($i<  count($alumnos)){
	    echo $alumnos[$i++].', ';
	}
		
	?>
	<hr>
	<h2>Bucle for</h2>
	<?php
	$a=0;
	for ($a==0; $a<=10;$a++){
	    echo $a."-";
	}
	
	$a=10;
	for ($a==10; $a>=0;$a--){
	    echo $a."-";
	}
	
	?>
	
	<h3>recorrer array tradicional</h3>
	<?php
	$alumnos=array("óscar","jairo","jesús","imanol");
	//óscar, jairo, jesús, imanol
	
	for ($i=0; $i<count($alumnos);$i++){
	    echo $alumnos[$i].', ';
	}
		
	?>
	<hr>
	<!--------------------------------------------------------->
	<h2>Bucle de tipo -> foreach</h2>
	<?php
	//Sintaxis
	//foreach($var_array as $clave=>$valor){
	//  echo $clave." ".$valor.// sentencias
	//}	
	
	?>
	<h3>Recorrer array asociativo</h3>
	<?php
	$usuarios=array("u1"=>"Óscar","u2"=>"Jairo","u3"=>"Carmen");
	foreach($usuarios as $user=>$nombreUser){
	    echo $user."=>".$nombreUser.", ";
	}
	
	?>
	<br>
	<?php
	$usuarios=array("Óscar","Jairo","Carmen");
	foreach($usuarios as $user=>$nombreUser){
	    echo $user."=>".$nombreUser.", ";
	}
	
	?>
	
	<br>
	
	    <?php $usuarios=array("u1"=>"Óscar","u2"=>"Jairo","u3"=>"Carmen") ?>
	<ul>
	<?php foreach($usuarios as $user=>$nombreUser){?>
	    
	    <li><?php echo $nombreUser ?></li>
	<?php } ?>
	</ul>
	
	<br>
	
    </body>
</html>
