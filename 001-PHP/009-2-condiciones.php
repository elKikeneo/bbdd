<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Condicioneales if, else if</title>
    </head>
    <body>
	<h2>Condicionales if/else, else if</h2>
	<?php
	$nota=9;
	
	if ($nota<5) {
	    echo "suspendido";
	}else{ 
	    if ($nota<7) {
		echo 'bien';
            } else { 
                if ($nota<9) {
		    echo 'notable';
		} else {
		    echo 'sobresaliente';
                }
            }
        }
        ?>
        <br><br>
        <?php
	////////////////////////////////////////////////////////
			
	$nota = 3;
        if ($nota >= 9) {
            echo "sobresaliente";
        } else if ($nota >= 7) {
            echo "notable";
        } else if ($nota >= 5) {
            echo 'bien';
        } else {
            echo 'suspenso';
        }
        ?>
        <br><br>
        <?php
        $nota=10;
        
        if ($nota<5){
            echo 'Suspenso';
        } else if ($nota<7) {
            echo 'Bien';
        } else if ($nota<9) {
            echo 'notable';
        } else {
            echo 'Sobresaliente';
        }
        
        ?>
        <br><br>
        <?php
//COMPROBAR EJERCICIOS DE ELENA -----^
	    
	$tipo_comida="verdura";
	$animal=false;
	$tipos=array("carnivoro","vegetariano","omnivoro","vegano");		    
	
	if ($tipo_comida=="carne") {
	    echo $tipos [0];
	}else if ($tipo_comida=="verdura"){
	    if ($animal){
		echo $tipos[1];
	    }  else {
		echo $tipos[3];
	    }
	}else{
	    echo $tipos[2];
	}
////////otra manera de ejecutar creando una variable en la misma condicional ($pos)
	if ($tipo_comida=="carne") {
	    $pos=0;
	}else if ($tipo_comida=="verdura"){
	    if ($animal){
		$pos=1;
	    }  else {
		$pos=3;
	    }
	}else{
	    $pos=2;
	}
	echo $tipos[$pos];
			    
	?>	
	
    </body>
</html>
