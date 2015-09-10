<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Bucles prácticas</title>
    </head>
    <body>
	<h2>Formulario con checkbox</h2>
	<form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
	    <input type="checkbox" name="ciudad[]" value="Madrid">Madrid
	    <input type="checkbox" name="ciudad[]" value="Zaragoza">Zaragoza
	    <input type="checkbox" name="ciudad[]"value="Barcelona">Barcelona
	    
	    <input type="submit" value="comprobar">	    
	</form>
	
	<?php
	if($_GET){
	    extract($_GET);
	    $string_ciudades=implode(", ",$ciudad);
	    
		echo "Te gustaría viajar a: ".$string_ciudades;
	    }	    		
	?>
	<!---------------------------------------------------------->
	
	<h2>Formulario con select múltiple</h2>
	<form action="<?=$_SERVER["PHP_SELF"] ?>" method="get">
	    <select name="paises[]" multiple>
		<option>España</option>
		<option>Italia</option>
		<option>Portugal</option>
			
	    </select>
	    
	    <input type="submit" value="Comprobar">
	
	</form>
	<?php
	//Op. asignación(.=)->España, Italia, Portugal
	if(isset($_GET["paises"])){
	    extract($_GET);	    	
	    $b="";
	    foreach ($paises as $pais){
		$b.=$pais.".";
	    }
	    echo $b;
//	    for($a=0; $a<=count($pais); $a++){
//		echo $b.=$pais[$a];
//	
//	}
	}
	
	?>
<!--mirar el de elena    -->
    
    
    </body>
</html>