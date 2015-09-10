<?php 
//Conexión de la bbdd (pasos 1-2)
include './connect.php';

//3-Hacemos la consulta SQL a la bbdd
$sql="select * from productos";
$result = mysqli_query($link, $sql);

//4- Obtener y procesar resultados
//////////Averiguar el número de registros devueltos tras la sentencia
$nfilas=  mysqli_num_rows($result);
//echo $nfilas;



?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //Si no devuelve registros querrá decir que no hay elementos para pintar
        if ($nfilas > 0) {
            //Creamos un bucle que dartá tantas vueltas como número de filas haya en la tabla pedida con la query, para así en cada vuelta, convertir cada registro en un array asociativo y pintar los valores accediendo a travé de las claves.
            for ($i = 0; $i < $nfilas; $i++) { 
                $fila=  mysqli_fetch_array($result)?>
        
        <p><?= $fila["producto"]?> | <?= $fila["precio"]?>€</p>
            <?php }
        } else {
            $mng = "No hay productos";
        }
        ?>
    </body>
</html>
