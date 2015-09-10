<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Switch</title>
    </head>
    <body>
	<h2>Validaciones con Switch</h2>
	
	<?php
	$lugarNacimiento="Barcelona";
	
	if ($lugarNacimiento=="Barcelona"){
	    echo "Eres catalán";
	}else if ($lugarNacimiento=="Zaragoza"){
	    echo 'Eres maño';
	}  else {
	    echo 'Eres cidudadano del mundo';
	}
	
	switch ($lugarNacimiento){
	case "Barcelona":
	    echo 'Eres catalán';
	    break;
	case "Zaragoza":
	    echo 'Eres maño';
	    break;
	default:
	    echo 'Eres ciudadano del mundo';
	}
	
	?>
	
	<!------------------------------------------------------------->
	
	<h2>Validación con switch múltiple</h2>
	
	<?php
	$lugarNacimiento="Huesca";
	
	
	if ($lugarNacimiento=="Barcelona"){
	    echo "Eres catalán";
	}else if ($lugarNacimiento=="Zaragoza"){
	    echo 'Eres maño';
	    }else if ($lugarNacimiento=="Huesca"){
	    echo 'Eres maño';
	    }else if ($lugarNacimiento=="Teruel"){
	    echo 'Eres maño';
	}else {
	    echo 'Eres cidudadano del mundo';
	}
	
	switch ($lugarNacimiento){
	    case "Huesca":
	    case "Teruel":
	    case "Zaragoza":
		echo 'Eres maño';
		break;
	    case "Barselona":
		echo 'Eres maño';
		break;
	    default:
		echo 'Eres cidudadano del mundo';
	}
	?>
	
	<!----------------------------------------------------------------------------------->
	<h2>Práctica</h2>
	
	<?php
	$edad=1996;
	$destino="Inglaterra";
	//Debes viajar en compañía de un adulto
	//Francia->von voyage, alemania->gute fahrt, Inglaterra->good trip...
	
	if ((2015 - $edad)<18) {
	    echo 'Debes viajar en compañía de un adulto';
	} else {
	    switch (mb_strtolower($destino,"UTF-8")){
		case "Francia":
		    echo 'von voyage';
		    break;
		    case "Alemania":
			echo 'gute fahrt';
			break;
			case "Inglaterra":
			    echo 'good trip';
			    break;
			default:
			    echo 'Buen viaje';
	    }
	    
	}	
	
	?>

	<!----------------------------------------------------------->
	<h2>Práctica - Validación de hora</h2>
	<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
	    <input type="number" name="hora" placeholder="Hora 0-23" required>
	    <input type="submit" value="Entrar">
	
	</form>
	
	<?php
	//Buenos días/ buenas tardes/ bueas noches/ Hora inválida
	if ($_GET){
	extract($_GET);
	if ($hora<0 || $hora > 23){
	    echo 'Hora no válida';
	}  else {
	    switch ($hora){		
		case 6:		    		    
		case 7:		    
		case 8:		    
		case 9:		    
		case 10:		    
		case 11:		    		    
		case 12:		    
		case 13:
		    echo 'Buenos días';
		    break;
		case 14:		    
		case 15:		    
		case 16:		    
		case 17:		    
		case 18:		    
		case 19:
		case 20:
		    echo 'Buenas tardes';
		    break;
		
		default:
		    echo 'Buenas noches';
	    }
	}	    
	}	
	
	?>
	
	
	
	
    </body>
</html>


