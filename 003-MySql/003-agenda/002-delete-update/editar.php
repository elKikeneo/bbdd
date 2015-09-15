<?php
include './inc/connect.php';
$id_contacto=$_GET['id'];

$sql="select * from contactos where id=$id_contacto";
$result=mysqli_query($link, $sql);

//Al pedir un único registro en la sentencia, no me es necesario hacer bucle
$fila=mysqli_fetch_array($result); //datos del contacto en formato de array asociativo
extract($fila); //$id,$nombre,$apellidos,$telefono,$email,$foto


?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
    <center>
        <h2>Editar Contacto</h2>
        <form action="update.php" method="post">
            <input type="text" name="nombre" value="<?=$nombre?>" placeholder="Nombre" required>
            <input type="text" name="apellidos" value="<?=$apellidos?>" placeholder="Apellidos">
            <input type="text" name="tlfn" value="<?=$telefono?>" placeholder="Teléfono" required>
            <input type="email" name="email" value="<?=$email?>" placeholder="Email">
            <input type="text" name="foto" value="<?=$foto?>" placeholder="Foto">
            
            <input type="submit" value="Guardar">
        </form>
        
        <a href="index.php"><< Volver</a>
        
        
    </center>
        
    </body>
</html>
