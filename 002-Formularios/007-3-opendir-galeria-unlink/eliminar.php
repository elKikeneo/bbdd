<?php
$nombreFoto=$_GET["name"];

//Función unlink(nameFichero) = elimina el fichero y además devuelve T/F si se ha eliminado correctamente el fichero
if(unlink("upload/".$nombreFoto)){
    header("location:galeria.php");
}else{
    echo "error en la eliminación";
}