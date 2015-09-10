<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
	<link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
	<h1>Mándanos tu consulta</h1>
	
	<form action="gracias/" method="post">
	    <input type="text" name="nombre" placeholder="*Nombre" required>
	    <input type="text" name="apellidos" placeholder="*Apellidos" required>
	    <input type="text" name="email" placeholder="*Email" required>
	    <input type="text" name="telefono" placeholder="*Teléfono" required>
	    <select name="to" multiple required>
		<option value="">*Departamentos cib ek qye deseas cibtactar</option>
		<option value="elenea@cice.es">Secretaría - Elena</option>
		<option value="kikemedca@gmail.com">Dirección - Iván</option>
		<option value="yosune@cice.es">Bolsa de empleo - Yosune</option>
            </select>
	    <textarea name="consulta" rows="10" placeholder="*¿En qué podemos ayudarte?" required=""e></textarea>
	    <input type="submit" value="Envíanos tu consulta">
	</form>
    </body>
</html>
