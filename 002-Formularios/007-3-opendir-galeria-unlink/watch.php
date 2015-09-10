<?php
//Seguridad
if(!$_GET){
    header("location:galeria.php");
}

$posActual=$_GET["pos"];
$posAnterior=$posActual-1;
$posSiguiente=$posActual+1;

//Lectura de carpeta
$nameCarpeta="upload/";
$directorio=  opendir($nameCarpeta);

//Creación de array con los nombres de los archivos, para poder obtener la foto deseada con el valor numérico que viene por la URL
$array_fotos=array();
while($archivo=readdir($directorio)){
    if(substr($archivo,0,1) != "." ){
        $array_fotos []= $archivo;
    }
}
//var_dump($array_fotos);
//Sobreescribimos el valor de las variables posAnterior y posSiguiente cuándo estamos en la primera o última foto
if($posActual==0 && count($array_fotos)>1 ){    
    $posAnterior = count($array_fotos)-1;    
}else if($posActual== count($array_fotos)-1 && count($array_fotos)>1 ){    
    $posSiguiente = 0;    
}else if( count($array_fotos)==1 ){
    $posAnterior=0;
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
        
        <nav>
            <ul>
                <li><a href="index.php">Subir foto</a></li>
                <li><a href="galeria.php">Ver galería</a></li>
            </ul>
        </nav>
        
        <main id="watch">
            
            <h1><?= ucfirst( str_replace(array("-","_")," ",rtrim(ltrim(strchr($array_fotos[$posActual],"_"),"_"), strchr($array_fotos[$posActual],"."))) )?></h1>
        
            
            <img src="<?=$nameCarpeta.$array_fotos[$posActual]?>">
            
            <br>
            
            <a href="watch.php?pos=<?=$posAnterior?>">Anterior</a>
            <a href="watch.php?pos=<?=$posSiguiente?>">Siguiente</a>
            
        </main>
        
    </body>
</html>
