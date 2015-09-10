<?php
if(!file_exists("upload")){
    header("location:index.php");
}


$nameCarpeta="upload/";
$directorio=  opendir($nameCarpeta);
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
                <li><a href="galeria.php">Ver galería</a></li>
            </ul>
        </nav>
        
        <main id="galeria">
            <h1>Galería</h1>
            
            <?php $i=0; ?>
            <?php while( $archivo=readdir($directorio) ){ ?>
                <?php if( substr($archivo,0,1) != "." ){ ?>
                    <div>
                        <a href="watch.php?pos=<?=$i++?>">
                            <img src="<?=$nameCarpeta.$archivo?>">
                            <p><?= ucfirst( str_replace(array("-","_")," ",rtrim(ltrim(strchr($archivo,"_"),"_"), strchr($archivo,"."))) )?></p>
                        </a>
                    </div>
                <?php } ?>
            <?php } ?>
            
            <?php closedir($directorio) ?>
            
        </main>
        
        
    </body>
</html>
