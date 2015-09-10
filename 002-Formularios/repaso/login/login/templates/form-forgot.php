<form action="<?php echo $_SERVER['PHP_SELF'] ?>?a=forgot" method="POST">
	
	<h1>Recuperar contraseña</h1>

	<label for="username">Username
		<input type="text" name="username" id="username">
	</label>

	<input type="submit" value="Recuperar contraseña" class="small button">

	<div>
		<a href="<?php echo $_SERVER['PHP_SELF']?>">Volver</a>
	</div>

</form>