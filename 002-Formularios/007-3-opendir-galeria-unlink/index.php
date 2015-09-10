<?php
$mng="";
$num_codigo="";

if($_GET){    
    $num_codigo=$_GET["c"];    
    switch ($num_codigo){
        case 0:
            $mng="Fichero no cumple requisitos";
            break;
        case 1:
            $mng="Fichero ya existe";
            break;
        case 2:
            $mng="Fichero subido correctamente";
            break;
        case 3:
            $mng="Error en la subida del fichero";
            break;
        case 4:
            $mng="Error en la creación de la carpeta";
            break;
    }
    
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <nav>
            <ul>
                <li><a href="index.php">Subir foto</a></li>
                <?php if(file_exists("upload")){ ?>
                    <li><a href="galeria.php">Ver galería</a></li>
                <?php } ?>
            </ul>
        </nav>
       
        <main>
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

            <p class="mng_<?=$num_codigo?>">
                <?=$mng?>
            </p>
        
        </main>
    </body>
</html>
