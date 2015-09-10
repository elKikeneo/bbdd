<?php
$mng="";
if($_GET){
    switch ($_GET["c"]){
        case 0:
            $mng="Fichero no cumple requisitos";
            break;
        case 1:
            $mng="Fichero renombrado y subido correctamente";
            break;
        case 2:
            $mng="Fichero subido correctamente";
            break;
        case 3:
            $mng="Error en la subida del fichero";
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
            <br>
            <input type="file" name="archivo">
            <br>
            <small>Máximo 70Kb</small>
            <br>
            <input type="submit" value="Guardar">
        </form>
        
        <p><?=$mng?></p>
        
    </body>
</html>
