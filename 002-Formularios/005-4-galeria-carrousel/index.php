<?php
//Listado de fotos############################
$fotos=array(
            array("img"=>"foto1.jpg","titulo"=>"Chica feliz"),
            array("img"=>"foto2.jpg","titulo"=>"Boda perfecta"),
            array("img"=>"foto3.jpg","titulo"=>"Bebe en red")
        );
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
       
        <h1>Galería de fotografía</h1>
        
        <section id="galeria">
        <?php for ($i=0; $i < count($fotos); $i++){ ?>    
                <a href="watch.php?pos=<?=$i?>">
                    <img src="img/<?= $fotos[$i]["img"] ?>">
                </a>
	<?php } ?>    
        </section>
        
    </body>
</html>
