<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Bucles prácticas</title>
    </head>
    <body>
	<h2>Recorrer un array tradicional</h2>
	<?php $colores=  array("azúl","violeta","verde","rojo"); ?>
	
	<h3>Bucle while</h3>
	<ul>
	    <?php
	    $n =0;
	    while ($n < count($colores)) { 
	    ?>
    	    <li> <?= $colores[$n++].', '; ?></li><!--el *<?+= es equivalente al echo-->	    
<?php } ?>


	</ul>
	
	<!-------------------------------------------------------->
	
	<h3>Bucle for</h3>
	<ul>
	    <?php for ($a = 0; $a < count($colores); $a++) { ?>
    	    <li><?= $colores[$a] . ', '; ?></li>
	    <?php } ?>
	</ul>
	
	<!-------------------------------------------------------->
	
	<h3>Bucle foreach</h3>
	<ul>
	    <?php foreach ($colores as $color) {?>
	    <li><?= $color ?></li>
	    <?php } ?>
	    
	</ul>
	<!-------------------------------------------------------->
	
	<h2>Concatenar valores de un array tradicional</h2>
	<?php $telefonos=array("976 562 456","123 520 789","912 456 852"); ?>
	<h3>Bucle foreach</h3>
	<?php 
	$listin="";
	foreach ($telefonos as $telefono){
	    $listin.=$telefono."/";
	}
	echo rtrim($listin,"/");
	?>
	
	<!--------------------------------------------------------->
	<h3>Bucle for</h3>
	
	<?php 
	$listin="";
	for ($a = 0; $a < count($telefonos); $a++) {
	    $listin.=$telefonos[$a]."/";	    
	}
	echo rtrim($listin,"/");
	?>
	
	<!--------------------------------------------------------->
	
	<h2>Operadores de concatenación</h2>
	<h3>Bucle while</h3>
	<?php
	//0-1-2-3-4-5-6-7-8
	$a=0;
	$b="";
	while ($a<9){
	    $b.=$a."-";
	    $a++;
	}
	echo rtrim($b,"-");
	?>
	
	<!--------------------------------------------------------->
	
	<h3>Bucle for</h3>
	<?php
	$b="";
	for ($a=5; $a>=1; $a--){
	    $b.=$a."*";
	}
	echo rtrim($b,"*");
	?>
	
	<!------------------------------------------------------------->
	<h2>Suma de valores de un array asociativo</h2>
	<?php
	$numeros=array("n1"=>1,"n2"=>10,"n3"=>2);
	$suma="";
	$suma1="";
	//1+10+2=13
	foreach ($numeros as $num=>$val){
	    $suma.=$val."+";
	    $suma1+=$val;	    
	}
	echo rtrim($suma,"+")."=".$suma1;
		
	?>
	
	<!------------------------------------------------------------->
	<h2>Lista de números pares con op. aritmético módulo</h2>
	<?php
	//0 2 4 6 8...100
	$pares="";
	for ($a=0; $a <= 100; $a++){
	    if ($a%2==0){
		echo $a." ";
	    }	    
	}	
	?>
	
	<!------------------------------------------------------------->
	<h2>Lista de números impares con op. aritmético módulo</h2>
	<?php
	//1 3 5 7 9...99
	$pares="";
	for ($a=0; $a <= 100; $a++){
	    if ($a%2!=0){
		echo $a." ";
	    }	    
	}	
	?>
	
	<!------------------------------------------------------------->
	
	<h2>Crear array de valores consecutivos</h2>
	<?php
	//Función range= genera un array tradicional de valores consecutivos establecidos dentro de un rango
	//0 1 2 3 4 5 6 7 8 9 10
	
	$serie=range(0,10); //$serie=array(0 1 2 3 4 5 6 7 8 9 10)
	foreach ($serie as $num){
	    echo $num." ";
	}
	
	
	?>
	<br><br>
	<?php
	$serie=range(0,100,2); //$serie=array(0 1 2 3 4 5 6 7 8 9 10)
	foreach ($serie as $num){
	    echo $num." ";
	}
	?>
	
    </body>
</html>
