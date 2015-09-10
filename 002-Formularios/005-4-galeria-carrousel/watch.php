<?php
//Seguridad############################
if( !isset($_GET["pos"]) ){ //sino viene la información por GET que necesita este documento para funcionar, quiere decir que han intentado ejecutar este fichero sin pasar previamente por la galería, por tanto le enviamos a ella para que pinchen una foto
    header("location:index.php");
}

//Listado de fotos############################
$fotos=array(
            array("img"=>"foto1.jpg","titulo"=>"Chica feliz"),
            array("img"=>"foto2.jpg","titulo"=>"Boda perfecta"),
            array("img"=>"foto3.jpg","titulo"=>"Bebe en red")
        );
$posActual=$_GET["pos"];//Obtenemos de la URL la posición del array en el que se encuentra la imagen y el título que quiero pintar.

//Jugamos con la posición que viene de la URL para hacer funcionar los ...
$posSiguiente=$posActual+1;
$posAnterior=$posActual-1;

if ($posActual==0){
    $posAnterior=  count($fotos)-1;
}else if ($posActual==count($fotos)-1){
    $posSiguiente=0;
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
        
        <h1><?=$fotos[$posActual]["titulo"]?></h1>
        
        <section id="watch">
            <img src="img/<?=$fotos[$posActual]["img"]?>" alt=""/>
            
	    <a href="watch.php?pos=<?=$posAnterior?>">Anterior</a>
            <a href="index.php">Ver Galería</a>
            <a href="watch.php?pos=<?=$posSiguiente?>">Siguiente</a>
            
        </section>
                        
    </body>
</html>
