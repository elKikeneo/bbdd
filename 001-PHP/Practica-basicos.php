<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Práctica - Básicos</title>
    </head>
    <body>	
	<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">	    
            <fieldset>
                <legend>Ingresar Fecha</legend> 
                <label>Día<span>*</span></label>
                <input type="number" name="diaUser" placeholder="00" autofocus>
                <label>Mes<span>*</span></label>
                <input type="number" name="mesUser" placeholder="00">
                <label>Año<span>*</span></label>
                <input type="number" name="añoUser" placeholder="0000">
                               
                <input type="submit" value="Validar" name="form">               
            </fieldset>
	</form>
	
	<?php
	extract($_GET);
	$mes=array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	if (isset($_GET["form"])){
	    if (empty($diaUser)||empty($mesUser)||empty($añoUser)){
		echo 'Debes rellenar todos los campos';
	    }else if ($mesUser<1 || $mesUser>12){
		echo 'Los meses van del 1 al 12';
	    }  else {
		switch ($mesUser){
		    case 1:
		    case 3:
		    case 5:
		    case 7:
		    case 8:
		    case 10:
		    case 12:
			if ($diaUser<1 || $diaUser>31){
			    echo 'Los días van del 1 al 31';
			}  else {
			    echo 'Fecha correcta, '.$diaUser." de ".$mes[$mesUser-1]." de ".$añoUser;    
			}
		    break;
		    case 2:
			if ($diaUser<1 || $diaUser>28){
			    echo 'Los días van del 1 al 28';
			}  else {
			    echo 'Fecha correcta, '.$diaUser." de ".$mes[$mesUser-1]." de ".$añoUser;    
			}
		    break;
		    case 4:
		    case 6:
		    case 9:
		    case 11:
			if ($diaUser<1 || $diaUser>30){
			    echo 'Los días van del 1 al 30';
			}  else {
			    echo 'Fecha correcta, '.$diaUser." de ".$mes[$mesUser-1]." de ".$añoUser;    
			}
			break;		    
		}					    
	    }		
	}  	
	?>		
    </body>
</html>
