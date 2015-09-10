<?php

$size=$_FILES["archivo"]["size"]; 
$type=$_FILES["archivo"]["type"]; 
$name=$_FILES["archivo"]["name"]; 
$error=$_FILES["archivo"]["error"]; 
$tmp_name=$_FILES["archivo"]["tmp_name"];


$nom_array=  explode(".", $name);
$ext=  mb_strtolower(end($nom_array),"UTF-8");

$extPermitidas=array("jpg","png","gif","jpeg");

$typePermitidos=array("image/jpeg","image/png","image/gif","image/pjpeg");


$sizeMax=70000; //bytes


if(in_array($ext, $extPermitidas) && in_array($type, $typePermitidos) && $size<=$sizeMax && $error==0){
    //Preguntar si existe la carpeta, sino la crearé
    if (file_exists("upload")){
	if (move_uploaded_file($tmp_name, "upload/".time()."_".$name)){
	    $codigo=2;
	} else {
	    $codigo=3;		  
	}
	
    } else {
	//Función mkdir(ruta/nombreCarpeta, permisos)= devuelve T/F si se ha creado el directorio o carpeta
	if (mkdir("upload",0777)){
	    if (move_uploaded_file($tmp_name,"upload/".time()."_".$name)){
		$codigo=2;
	    }  else {
		$codigo=3;
	    }
	}  else {
	    $codigo=4;
	}
    }
}  else {
    $codigo=0;
}

header("location:index.php?c=$codigo");
