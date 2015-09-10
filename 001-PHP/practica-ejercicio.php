<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Bucles prácticas</title>
    </head>
    <body>
	<h2>Ejercicios</h2>
	<form action="<?=$_SERVER["PHP_SELF"] ?>" method="get">
	    <fieldset>
		<legend>Pedido</legend>
		<select name="bebidas">
		    <option value="Coca Cola">Coca Cola</option>
		    <option value="Pepsi Cola">Pepsi Cola</option>
		    <option value="Fanta Naranja">Fanta Naranja</option>
		    <option value="Trina Manzan">Trina Manzana</option>

		</select>
		<input type="number" name="pedido" placeholder="Cantidad" required>

		<input type="submit" value="Calcular">
	    </fieldset>
	</form>
	<?php
	if ($_GET){
	    extract($_GET);
	    
	    if($bebidas=="Coca Cola"){
		echo "Has pedido ".$pedido. " botella(s) de ".$bebidas." que hacen ".$pedido."€";
	    }if($bebidas=="Pepsi Cola"){
		echo "Has pedido ".$pedido. " botella(s) de ".$bebidas." que hacen ".$pedido*0.8."€";
	    }if($bebidas=="Fanta Naranja"){
		echo "Has pedido ".$pedido. " botella(s) de ".$bebidas." que hacen ".$pedido*0.9."€";
	    }if($bebidas=="Trina Manzana"){
		echo "Has pedido ".$pedido. " botella(s) de ".$bebidas." que hacen ".$pedido*1.2."€";
	    }	    
	    }			
	?>

    
    
    
    </body>
</html>