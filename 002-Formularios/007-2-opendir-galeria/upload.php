<?php
$size=$_FILES["archivo"]["size"]; 
$type=$_FILES["archivo"]["type"]; 
$name=$_FILES["archivo"]["name"];
$error=$_FILES["archivo"]["error"];
$tmp_name=$_FILES["archivo"]["tmp_name"];

//Sacamos extensión del fichero
$name_array=explode(".",$name);
$ext = mb_strtolower(end($name_array),"UTF-8");


//////2º Valores permitidos
###########################################################################
//Nombre de mi carpeta
$carpeta="upload";
//Extensiones permitidas
$extPermitidas = array("jpg","png","gif","jpeg");
//Tipos mime permitidos
$typePermitidos = array("image/jpeg","image/png","image/gif","image/pjpeg");
//Tam máx
$sizeMax=2097152; //bytes


//////3º Validaciones,
//#########################################################################
if( in_array($ext,$extPermitidas) && in_array($type,$typePermitidos) && $size<=$sizeMax && $error==0 ){
    
    //Preguntar si existe la carpeta, sino la crearé
    if(file_exists($carpeta)){
        if(move_uploaded_file($tmp_name, $carpeta."/".time()."_".$name)){
            $codigo=2;
        }else{
            $codigo=3;
        }
    }else{
        //Función mkdir(ruta/nombreCarpeta, permisos) = devuelve T/F si se ha creado el directorio o carpeta
        if(mkdir($carpeta,0777)){
            if(move_uploaded_file($tmp_name, $carpeta."/".time()."_".$name)){
                $codigo=2;
            }else{
                $codigo=3;
            }
        }else{
            $codigo=4;
        }
    }
    
}else{
    $codigo=0;
}

//////4º Redirección a index enviándole el código de mensaje que debe mostrar
header("location:index.php?c=$codigo");