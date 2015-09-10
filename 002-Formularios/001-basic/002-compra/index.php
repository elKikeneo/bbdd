
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
    </head>
    <body>
	
	<form action="pedido.php" method="post">
	    <fieldset>
		<legend>Tus datos</legend>
		<label>Nombre</label>
		<input type="text" name="nombreUser" placeholder="Nombre" required autofocus>
		<label>Dirección</label>
		<input type="text" name="direUser" placeholder="Dirección" required>
		<br>
		<input type="checkbox" name="productos[]" value="patatas">patatas
		<input type="checkbox" name="productos[]" value="tomates">tomates
		<input type="checkbox" name="productos[]" value="limones">limones
		<input type="checkbox" name="productos[]" value="manzanas">manzanas
		<input type="checkbox" name="productos[]" value="kikwis">kikwis
		<input type="checkbox" name="productos[]" value="lechuga">lechuga
                
		<br>
		
		<input type="submit" value="Pedir">
	    </fieldset>
	</form>
	
	
    </body>
</html>