<form action="<?php echo $_SERVER['PHP_SELF'] ?>?a=login" method="POST">
	
	<h1>Login</h1>

	<label for="username">Username
		<input type="text" name="username" id="username">
	</label>

	<label for="password">Password
		<input type="password" name="password" id="password">
	</label>

	<label for="remember">Recúerdame
		<input type="checkbox" name="remember" id="remember" value="remember">
	</label>

	<input type="submit" value="Log in" class="small button">

	<div>
		<a href="<?php echo $_SERVER['PHP_SELF']?>?v=forgot">Olvidé la contraseña</a>
		<a href="<?php echo $_SERVER['PHP_SELF']?>?v=register">Registrarse</a>
	</div>

</form>