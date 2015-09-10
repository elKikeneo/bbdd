<form action="<?=$_SERVER["PHP_SELF"]?>?a=register" method="post">
    <h1>Registro</h1>
    <label for="username">Username
	<input type="text" name="username" id="username">
    </label>
    
    <label for="password">Password
	<input type="password" name="password" id="password">
    </label>        
    
    <input type="submit" value="Registrarse" class="small button">
    
    <div>
	<a href="<?=$_SERVER["PHP_SELF"]?>">Volver</a>
	
    </div>

</form>

