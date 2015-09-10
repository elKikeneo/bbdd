<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Superglobales</title>
    </head>
    <body>
	<h2>Formulario ejecutado en fichero externe con método get</h2>
<!--	nombre, apellidos, telefono, email-->
<form action="008-2-superglobales-get.php" method="get">
            <fieldset><!--Agrupa campos de un formulario-->
                <legend>Datos de usuario</legend>
                <label>Nombre</label>
                <input type="text" name="nombreUser" placeholder="Nombre" autofocus>
                <br><br>
		<label>Apellidos</label>
                <input type="text" name="apellUser" placeholder="Apellidos" required>
                <br><br>
                <label>Teléfono</label>
                <input type="text" name="tlfnoUser" value="+34">
                <br><br>
                <label>Email</label>
                <input type="email" name="emailUser">
		<br><br>
		
		<input type="submit" value="Enviar formulario">
                
                               
            </fieldset>
	</form>

<!----------------------------------------------------------------------------->

<h2>Formulario ejecutado en fichero externe con método request</h2>
<!--	nombre, apellidos, telefono, email-->
<form action="008-3-superglobales-request.php" method="get">
            <fieldset><!--Agrupa campos de un formulario-->
                <legend>Datos de usuario</legend>
                <label>Nombre</label>
                <input type="text" name="nombreUser" placeholder="Nombre" autofocus>
                <br><br>
		<label>Apellidos</label>
                <input type="text" name="apellUser" placeholder="Apellidos" required>
                <br><br>
                <label>Teléfono</label>
                <input type="text" name="tlfnoUser" value="+34">
                <br><br>
                <label>Email</label>
                <input type="email" name="emailUser">
		<br><br>
		
		<input type="submit" value="Enviar formulario">
                
                               
            </fieldset>
	</form>
<!----------------------------------------------------------------------------->
<?php // var_dump($_SERVER) ?>
<h2>Formulario ejecutado en en el mismo documento con metodo get</h2>
<!--	nombre, apellidos, telefono, email-->
	<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
            <fieldset><!--Agrupa campos de un formulario-->
                <legend>Datos de usuario</legend>
                <label>Nombre</label>
                <input type="text" name="nombreUser" placeholder="Nombre" autofocus>
                <br><br>
		<label>Apellidos</label>
                <input type="text" name="apellUser" placeholder="Apellidos" required>
                <br><br>
                <label>Teléfono</label>
                <input type="text" name="tlfnoUser" value="+34">
                <br><br>
                <label>Email</label>
                <input type="email" name="emailUser">
		<br><br>
		
		<input type="submit" value="Enviar formulario">
                
                               
            </fieldset>
	</form>
	
	

	
	
	
<p>Buenos días <b><?php echo $_GET["nombreUser"]." ".$_GET["apellUser"]?></b>, tus datos son: <?php echo $_GET["tlfnoUser"]." y ".$_GET["emailUser"] ?> </p>
	
	<!--------------------------------------------------------------------->
	<hr>
	<!--------------------------------------------------------------------->
	
	<h2>Formulario ejecutado en fichero externo con método post</h2>
<!--	nombre, apellidos, telefono, email-->
<form action="008-4-superglobales-post.php" method="post">
            <fieldset><!--Agrupa campos de un formulario-->
                <legend>Datos de usuario</legend>
                <label>Nombre</label>
                <input type="text" name="nombreUser" placeholder="Nombre" autofocus>
                <br><br>
		<label>Apellidos</label>
                <input type="text" name="apellUser" placeholder="Apellidos" required>
                <br><br>
                <label>Teléfono</label>
                <input type="text" name="tlfnoUser" value="+34">
                <br><br>
                <label>Email</label>
                <input type="email" name="emailUser">
		<br><br>
		
		<input type="submit" value="Enviar formulario">
                
                               
            </fieldset>
	</form>
	
	<!--------------------------------------------------------------------->
	<hr>
	<!--------------------------------------------------------------------->
	
	<h2>Formulario ejecutado en fichero externo con método post</h2>
<!--	nombre, apellidos, telefono, email-->
<form action="008-3-superglobales-request.php" method="post">
            <fieldset><!--Agrupa campos de un formulario-->
                <legend>Datos de usuario</legend>
                <label>Nombre</label>
                <input type="text" name="nombreUser" placeholder="Nombre" autofocus>
                <br><br>
		<label>Apellidos</label>
                <input type="text" name="apellUser" placeholder="Apellidos" required>
                <br><br>
                <label>Teléfono</label>
                <input type="text" name="tlfnoUser" value="+34">
                <br><br>
                <label>Email</label>
                <input type="email" name="emailUser">
		<br><br>
		
		<input type="submit" value="Enviar formulario">
                
                               
            </fieldset>
	</form>
	
	<!--------------------------------------------------------------------->
	<hr>
	<!--------------------------------------------------------------------->
	
	<h2>Formulario ejecutado en fichero externo con método post</h2>
<!--	nombre, apellidos, telefono, email-->
<form action="008-2-superglobales-get.php" method="post">
            <fieldset><!--Agrupa campos de un formulario-->
                <legend>Datos de usuario</legend>
                <label>Nombre</label>
                <input type="text" name="nombreUser" placeholder="Nombre" autofocus>
                <br><br>
		<label>Apellidos</label>
                <input type="text" name="apellUser" placeholder="Apellidos" required>
                <br><br>
                <label>Teléfono</label>
                <input type="text" name="tlfnoUser" value="+34">
                <br><br>
                <label>Email</label>
                <input type="email" name="emailUser">
		<br><br>
		
		<input type="submit" value="Enviar formulario">
                
                               
            </fieldset>
	</form>
	
	<!--------------------------------------------------------------------->
	<hr>
	<!--------------------------------------------------------------------->
	
	<h2>Formulario ejecutado en fichero externo con método post</h2>
<!--	nombre, apellidos, telefono, email-->
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
            <fieldset><!--Agrupa campos de un formulario-->
                <legend>Datos de usuario</legend>
                <label>Nombre</label>
                <input type="text" name="nombreUser" placeholder="Nombre" autofocus>
                <br><br>
		<label>Apellidos</label>
                <input type="text" name="apellUser" placeholder="Apellidos" required>
                <br><br>
                <label>Teléfono</label>
                <input type="text" name="tlfnoUser" value="+34">
                <br><br>
                <label>Email</label>
                <input type="email" name="emailUser">
		<br><br>
		
		<input type="submit" value="Enviar formulario">
                
                               
            </fieldset>
	</form>

<p>Buenos días <b><?php echo $_POST["nombreUser"]." ".$_POST["apellUser"]?></b>, tus datos son: <?php echo $_POST["tlfnoUser"]." y ".$_POST["emailUser"] ?> </p>
	
    </body>
</html>
	
