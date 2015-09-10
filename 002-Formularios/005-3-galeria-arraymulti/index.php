<?php
$fotos=array(
	    array("img"=>"foto1.jpg","titulo"=>"Chica Feliz"),
	    array("img"=>"foto2.jpg","titulo"=>"Boda Perfecta"),
	    array("img"=>"foto3.jpg","titulo"=>"Bebé en Red")
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
	    <?php for($i=0;$i<count($fotos);$i++){ ?>
	    <a href="watch.php?nombreFoto=<?=$fotos[$i]["img"]?>&titulo=<?=$fotos[$i]["titulo"]?>">
		<img src="img/<?=$fotos[$i]["img"]?>">
	    </a>
	    <?php } ?>

	</section>
	
    </body>
</html>
	
