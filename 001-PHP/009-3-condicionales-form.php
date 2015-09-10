<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Condicioneales Con formularios</title>
    </head>
    <body>
	<h2>Validación de Campos de un formulario</h2>	
	<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
	    
            <fieldset>
                <legend>Iniciar sesión</legend> 
                <label>Correo Electrónico<span>*</span></label>
                <input type="address" name="correoUser" placeholder="info@cice.com" autofocus>
                <br><br>
                
                <label>Password*</label>
                <input type="password" name="passUser" placeholder="Password">
                <br><br>
                
                <input type="submit" value="Iniciar">               
            </fieldset>
	</form>
	
	<?php
	
	
	//if ($_GET["correoUser"]==false || $_GET["passUser"]==false){
	
	//////otras formas correctas:
	//if ($_GET["correoUser"]=="" || $_GET["passUser"]==""){
	//if (empty($_GET["correoUser"]) || empty($_GET["passUser"])){
	//extract($_GET);---se extrae las variables de la superglobal---
	//if (empty($correoUser) || empty($passUser)){
	  
	  //  echo 'Debes rellenar todos los campos...';
	//} else {
	  //  echo 'datos correctos';    
	//}
	
	/////////////////////////// ahora hacemos de tal forma que el mensaje no aparece al iniciar el formulario, sino cuando se empieza a rellenar...
	//Al ejecutar el ejercicio por primera vez no se ha enviado información, por tanto no llega ninguna información del método get, solo cuando le damos a enviar, se vuelve a ejecutar el documento y se vuelve a preguntar si existe información procedente del formulario, como ahora sí llegan datos, se cumple la condición del isset y se pregunta por si esos datos vienen vacíos o no con empty.
	if(isset($_GET["correoUser"])){
	    if(empty($_GET["correoUser"]) || empty($_GET["passUser"])){
		echo "Debes rellenar los datos";
	    }else{
		echo 'Login correcto';
	    }
	}		
		
	?>
	<!--------------------------------------------------->
	
	<h2>Verificación de password</h2>
	<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
	    
            <fieldset>
                <legend>Iniciar sesión</legend> 
                <label>Correo Electrónico<span>*</span></label>
                <input type="address" name="correoUser" placeholder="info@cice.com" autofocus>
                <br><br>
                
                <label>Password*</label>
                <input type="password" name="passUser" placeholder="Password">
                <br><br>
                
                <input type="submit" value="Iniciar" name="form1">               
            </fieldset>
	</form>
	
	<?php
	$user_perm=array("elena@cice.es","kike@cice.es");
	$pass_perm=array("0000","1234");
	
        extract($_POST);
        
        if (isset($_POST[correoUser])){
            if (!empty($correoUser) && !empty($passUser)){
                if (($correoUser==$user_perm[0] && $passUser==$pass_perm[0]) || ($correoUser==$user_perm[1] && $passUser==$pass_perm[1])){
                    echo 'Usuario correcto';
                } else {
                    echo 'Usuario incorrecto';
                }
            } else {
                echo 'Debes rellenar todos los campos';
            }
        }		
	?>
	
	<!------------------------------------------------------------->
	
	<h2>Formulario con checkbox</h2>
	<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
	                
	    <input type="text" name="nombre" placeholder="Nombre">
	    <br><br>                
	    <input type="checkbox" name="edad">Soy mayor de edad
            <br><br>        
            
	    <input type="submit" value="Entrar" name="form2">                           
	</form>
	
	<?php
	//Debes indicar tu nombre
	//eres menor de edad y no puedes pasar
	//Bienvenid@ Pablo...
	extract($_GET);
	if (isset($_GET["form2"])){
	if (empty($nombre)) {
	    echo 'Debes indicar tu nombre';
	} else if (!isset($edad)) {
	    echo 'Eres menor de edad';
		} else {
		    echo 'Login correcto';
		    }
	}
	?>
	
	<!------------------------------------------------------------>
	<h2>Validación de extención</h2>
	<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
	                
	    <input type="text" name="archivo" placeholder="fichero.ext">
	    <br><br>                
	    
	    <input type="submit" value="Probar" name="form3">                           
	</form>
	<?php
	//Funcion in_array(valor a buscar, array con los valores)=devuelve true si el valor buscado se encuentra en el array
	$ext_perm=array("jpg","png");
	//Fichero permitido/fichero no permitido
	extract($_GET);
	
//	if (($ext_perm[0]==ltrim(strrchr($archivo, "."),".")) || ($ext_perm[1]==ltrim(strrchr($archivo, "."),"."))){
//	    echo "Fichero permitido";
//	}  else {
//	    echo 'Fichero no permitido';
//	}
	
	
//	if (isset($_GET["form3"])){
//	if (in_array(ltrim(strrchr($archivo, "."),"."),$ext_perm)){
//	    echo "Fichero permitido";
//	}  else {
//	    echo 'Fichero no permitido';
//	}
//	}
	/////como lo prefiere elena
	
	if (isset($_GET["form3"])){
	    $file_array=  explode(".",$_GET["archivo"]);
	    $ext_file=  end($file_array);
	    if (in_array($ext_file,$ext_perm)){
	    echo "Fichero permitido";
	}  else {
	    echo 'Fichero no permitido';
	}
	}
        
	?>
	<!------------------------------------------------------------->
	<h2>Formulario con radiobutton</h2>
	<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
	                
	    <input type="text" name="nombre" placeholder="Nombre" required>
	    <br><br>                
	    <input type="number" name="edad" required>
	    <br><br>                
	    <input type="radio" name="sexo" value="mujer" checked> F
	    <br><br>                
	    <input type="radio" name="sexo" value="hombre"> M
            <br><br>        
            
	    <input type="submit" value="Entrar" name="form4">                           
	</form>
	<?php
	//Eres menor Manolito
	//Bienvenido/Bienvenida
	extract($_GET);
	
	if (isset($_GET["form4"])){
	    if ($edad < 18){
		echo 'Eres menor '.$nombre;
	    }else if ($sexo=="mujer"){
		echo "Eres bienvenida ".$nombre;
	    }  else {
		echo 'Eres bienvenido '.$nombre;
	    }
	}
	
	?>	
	
    </body>
</html>

