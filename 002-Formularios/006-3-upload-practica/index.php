<?php

$mng="";
if ($_GET){
    switch ($_GET["c"]){
        case 0:
            $mng="fichero no cumple la extensión";
            break;
        case 1:
            $mng="fichero supera el máximo permitido";
            break;
        case 2:
            $mng="error en el fichero";
            break;
        case 3:
            $mng="fichero subido correctamente";
            break;
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
        <h1>Subida de imágenes</h1>
        
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label><b>Selecciona foto:</b></label>
            <br><br>
            <input type="file" name="archivo">
            <br><br>
            <small>Máximo 70Kb</small>
            <br><br>
            <input type="submit" value="Guardar">
        </form>
        
        <p><?=$mng?></p>
        
    </body>
</html>