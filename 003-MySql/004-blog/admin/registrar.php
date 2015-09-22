<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="sitemedia/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <!--Formulario de mi login-->
        <div class="login">
            <form action="" method="post">
                <h1>Nuevo Usuario</h1>
                <input type="text" name="nombre" placeholder="Nombre" required autofocus>
                <input type="email" name="email" placeholder="user@email.com" required>
                <input type="password" name="password" placeholder="****" required>
                <input type="submit" value="Crear Cuenta">
                
                <!--Ocultar este enlace si no queremos que nadie se registre-->
                <a href="index.php">Ya soy usuario</a> 
                
                
                    
            </form>
        </div>
        
        <!--Mensaje----------------------------------------------------------->
        <span class="mng">Error</span>
        
        
        
    </body>
</html>
