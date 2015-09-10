<?php

$size = $_FILES["archivo"]["size"];
$type = $_FILES["archivo"]["type"];
$name = $_FILES["archivo"]["name"];
$error = $_FILES["archivo"]["error"];

$tmp_name=$_FILES["archivo"]["tmp_name"];

$name_array=  explode(".", $name);
$ext=  mb_strtolower(end($name_array),"UTF-8");

//Extensiones img permitidas
$imgPermitidas=array("jpg","png","gif","jpeg");
//Tipos mime de img permitidos
$typePermitidos=array("image/jpeg","image/png","image/gif","image/pjpeg","application/pdf","application/msword");

$sizeMax=1048576;

//Extensiones docs permitidas
$docsPermitidos=array("pdf","doc","docx");

if (in_array($ext, $imgPermitidas) && in_array($type, $typePermitidos)){
    if ($size<=$sizeMax){
	if ($error==0){
	    if (move_uploaded_file($tmp_name,"docs/".$name)){
		$codigo=3;//fichero subido correctamente
	    }
	} else {
	    $codigo=2; //error en el fichero
	}
    } else {
	$codigo=1; //fichero supera el máximo permitido
    }
} else {
    $codigo=0; //fichero no cumple la extensión  
}
if (in_array($ext, $docsPermitidos) && in_array($type, $typePermitidos)){
    if ($size<=$sizeMax){
	if ($error==0){
	    if (move_uploaded_file($tmp_name,"docs/".$name)){
		$codigo=3;//fichero subido correctamente
	    }
	} else {
	    $codigo=2; //error en el fichero
	}
    } else {
	$codigo=1; //fichero supera el máximo permitido
    }
} else {
    $codigo=0; //fichero no cumple la extensión  
}

header("location:index.php?c=$codigo");

//CORREGIR...


