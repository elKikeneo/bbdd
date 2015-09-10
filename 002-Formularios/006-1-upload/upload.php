<?php

//1º Obtenemos datos del fichero proceddente del formulario con la variable superglobal $_FILES=array asociativo multidimensional. 
//NO puedo acceder a los datos de un input de type="file" con $_POST ni $_GET. 
//Para que ese array $_FILES se genere, es OBLIGATORIO emplear el atributo enctype="" en la etiqueta form. 

//var_dump($_FILES);

$size=$_FILES["archivo"]["size"]; //tamaño en bytes del archivo
$type=$_FILES["archivo"]["type"]; // el tipo mime del archivo
$name=$_FILES["archivo"]["name"]; // nombre original del archivo
$error=$_FILES["archivo"]["error"]; // código de error asociado a la carga del archivo (0=no hay error, 1= la subida del fichero excede del máximo tamaño permitido por php declarado en el fichero de configuración php.in bajo el dato upload_max_filesize=2M, 2= la subida del fichero excede del máximo tamaño permitido por el formulario, 3= subida incompleta, 4=no hay fichero, 6= no encuentra la carpeta).
$tmp_name=$_FILES["archivo"]["tmp_name"];

//Sacamos extensión del fichero
//$ext=ltrim(strrchr($name, "."),".");
//echo $ext;
$nom_array=  explode(".", $name);
$ext=  mb_strtolower(end($nom_array),"UTF-8");
//echo $ext;


//2º Valores Permitidos
//############################################################################
//Extensiones permitidas
$extPermitidas=array("jpg","png","gif","jpeg");
//tipos mime
$typePermitidos=array("image/jpeg","image/png","image/gif","image/pjpeg");

//Tamaño máximo
$sizeMax=70000; //bytes

//3º Validaciones, una vez que tenemos los datos de archivo, empezamos las validaciones para subirlo a nuestra carpeta "upload"
//############################################################################
if(in_array($ext, $extPermitidas) && in_array($type, $typePermitidos) && $size<=$sizeMax && $error==0){
    //Función file_exists(ruta/namefichero)=devuelve T/F si encuentra el fichero en la ruta.
    if (file_exists("upload/".$name)){
	$codigo=0;
    }  else {
	//Función move_uploaded_file(tmp_name, rutaDestino/nameFichero)= devuelve T/F si se ha subido correctamente el fichero a la ruta de destino
	if (move_uploaded_file($tmp_name, "upload/".$name)){
	    $codigo=1;
	}  else {
	    $codigo=2;
	}
    }
}else {
    $codigo=3;
}

//4º Redirección a index enviándole el código de mensaje que debe mostrar
header("location:index.php?c=$codigo");
