<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
	
	<h1>Conversor</h1>
	<form action="validar.php" method="post">
            Cantidad: <input type="number" name="cantidad" min="0" required autofocus>
	    <br><br>
	    <label>Moneda de origen: </label>
	    
	    <select name="origen">
                <option value="0">Euro €</option>
                <option value="1">Dolar $</option>
                <option value="2">Libra £</option>
	    </select>
	    <label>Moneda de destino: </label>
	    
	    <select name="destino">
                <option value="0">Euro €</option>
                <option value="1">Dolar $</option>
                <option value="2">Libra £</option>
	    </select>
	    <br><br>
	    <input type="submit" value="Convertir">
	</form>
    </body>
</html>