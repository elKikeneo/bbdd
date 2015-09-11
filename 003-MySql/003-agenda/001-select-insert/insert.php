<?php 
//Conectamos
include "./inc/connect.php";

//Obtenemos datos del formulario
//controlar que los campos que he establecido como obligatorios en el hatml traigan datos
extract($_POST); //$nombre=$_POST["nombre"]; $apellidos,$tlfn,$email,$foto
if ((isset($nombre) && !empty($nombre)) && (isset($tlfn) && !empty($tlfn))) {
    if($foto=="") {
        $foto="http://www.thewantedmusic.com/img/default-avatar.gif";
    }
//Insertar contacto
    $sql = "INSERT INTO contactos (nombre,apellidos,telefono,email,foto) VALUES ('$nombre','$apellidos','$tlfn','$email','$foto')";
    $result = mysqli_query($link, $sql);

    if ($result) {
        $c = 1;
    } else {
        $c = 2;
    }
} else {
    $c = 3;
}


header("location:inddex.php?c=$c");
