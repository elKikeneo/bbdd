<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
	<h1>Crear pagPersonalizada</h1>
	
	<form action="validar.php" method="post">
	    Nombre: <input type="text" name="nombre" required autofocus>
	    <br><br>
	    Color Fondo: <input type="color" name="bgFondo" value="#dddddd">
	    <br><br>
	    Color Texto: <input type="color" name="colorTexto" value="#dddddd">
	    <br><br>
	    Mensaje: <textarea name="mng"></textarea>
	    <br><br>
	    <input type="submit" value="Probar">
	</form>
    </body>
</html>